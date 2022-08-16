<?php 
class User extends CI_Controller
{
	//login page
	public function login_form()
	{
		$this->load->view('crud/login');
	}
	//login
	public function login()
	{
		//$this->load->view('crud/login');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('register_type','Register Type','trim|required');

		if ($this->form_validation->run())
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$type = $this->input->post('register_type');

			$this->load->model('Usermodel');
			$get_pass['get_pass'] = $this->Usermodel->get_pass();
			foreach ($get_pass as $key) {
				echo $key->password;
			}

			$pass_check = password_verify($password, $key->password);


			$this->load->model('Usermodel');
			$check_login = $this->Usermodel->login_check($email,$pass_check,$type);


			if ($check_login == true) 
			{
				$this->load->library('session');
				$this->session->set_userdata('id',$check_login);
				$this->load->view('crud/dashboard',['data'=>$check_login]);
				if($type == 'User')
				{
					return redirect('User/userdashboard');
				}elseif ($type == 'Admin') {
					return redirect('User/dashboard');
				}
			}
			else
			{
				$this->session->set_flashdata('check', 'Invalid email, password and register type');
				return redirect('User/login_form');
			}			
		}
		else
		{
			$this->load->view('crud/login');
		}
	} 
	//register
	public function register()
	{
		//$this->load->view('crud/register');
		$this->form_validation->set_rules('firstname','Firstname','trim|required|alpha');
		$this->form_validation->set_rules('lastname','Lastname','trim|required|alpha');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('contact_no','Contact No','trim|required|exact_length[10]|is_unique[users.contact_no]');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('register_type','Register type','trim|required');

		if ($this->form_validation->run()) 
		{
			$data = [
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'contact_no' => $this->input->post('contact_no'),
						'register_type' => $this->input->post('register_type'),
						'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
					];
					

					$this->load->model('Usermodel');
					$this->Usermodel->register_data($data);

			$this->session->set_flashdata('register', 'Record Inserted successfully');
			return redirect('User/register');
		}
		else
		{
			$this->load->view('crud/register');
		}
	} 
	


	//userdashboard
	public function userdashboard()
	{
		if($this->session->userdata('id'))
		{
			$this->load->view('crud/userdashboard');
		}
		else
		{
			return redirect('User/login_form');
		}
	}


	//dashboard
	public function dashboard()
	{
		if ($this->session->userdata('id')) 
		{		
			//$this->load->view('crud/dashboard');
			$this->load->model('Usermodel');
			$data = $this->Usermodel->get_data();
			// echo $this->db->last_query();
			// die();			
			$this->load->view('crud/dashboard',['data'=>$data]);
		}
		else
		{
			return redirect('User/login_form');
		}
	}

	//load create file
	public function create()
	{
		$this->load->view('crud/create');
	}

	//insert the data of add field
	public function add_user()
	{
		// $this->load->model('Usermodel');
		// $language_data = $this->Usermodel->get_language();
		// $this->load->view('crud/create',['language_data'=>$language_data]);

		$this->form_validation->set_rules('firstname','Firstname','trim|required|alpha');
		$this->form_validation->set_rules('lastname','Lastname','trim|required|alpha');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('contact_no','Contact No','trim|required|exact_length[10]|is_unique[users.contact_no]');
		$this->form_validation->set_rules('gender','Gender','trim|required');
		$this->form_validation->set_rules('language','Language','trim|required');

		//if we include image validation in the above then they give error
		if (empty($_FILES['image']['name'])) 
		{
			$this->form_validation->set_rules('image', 'Image', 'trim|required');
		}
		

		if ($this->form_validation->run()) 
		{	
			$config = array(
				'upload_path' => './uploads',
				'allowed_types' => 'jpeg|jpg|png'							
			);

			$this->load->library('upload');
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('image'))
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('crud/image',$error);
				}
				else
				{
					$file_upload = $this->upload->data();
					$file_name =$file_upload['file_name'];
					$data = [
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'contact_no' => $this->input->post('contact_no'),
						'gender' => $this->input->post('gender'),
						'image' => $file_name,
						'language' => $this->input->post('language')
					];

					// $data =	[	
					// 'firstname' => $this->input->post('firstname'),
					// 'lastname' => $this->input->post('lastname'),
					// 'email' => $this->input->post('email'),
					// 'contact_no' => $this->input->post('contact_no')
					// ];
					

					$this->load->model('Usermodel');
					$data_add = $this->Usermodel->user_data_add($data);
					
					if ($data_add)
					{	
						$this->session->set_flashdata('msg','Record insert successful');			
						return redirect('User/dashboard');
					}
					else
					{
						echo 'data not insert';
					}
				}
	    }
		else
		{
			$this->load->view('crud/create');
		}
	}

	//get all data in the form of table
	// public function get_all_data()
	// {
	// 	$this->load->model('Usermodel');
	// 	$data = $this->Usermodel->get_data();				
	// 	$this->load->view('crud/dashboard',['data'=>$data]);		
	// }


	//Edit form 
	public function edit($id)
	{
		$this->load->model('Usermodel');
		$data = $this->Usermodel->edit_data($id);
		$this->load->view('crud/edit',['edit'=>$data]);
		// if ($this->form_validation->run('add_user_data'))
		// {
			
		// }
		// else
		// {
		// 	// $this->load->view('crud/edit');
		// }
	}

	//update data
	public function update($id)
	{
		if($this->form_validation->run('update_user_data')):
		$data =	[	
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
			'contact_no' => $this->input->post('contact_no')
			];
		$this->load->model('Usermodel');
		$this->Usermodel->update_data($data,$id);
		$this->session->set_flashdata('msg','Record Updated successful');
		//$this->session->set_flashdata('msg_class','alert alert-danger text-center');
		redirect('User/dashboard');

	else:
		$this->edit($id);
	endif;
	}

	//delete data
	public function delete($id)
	{
		$this->load->model('Usermodel');
		
		if($this->Usermodel->delete_data($id))
		{
			$this->session->set_flashdata('msg','Record delete successful');
			$this->session->set_flashdata('msg_class','alert alert-danger text-center');				
		}
		else
		{
			// $this->session->set_flashdata('msg','Record Not delete successful');
		 //  	$this->session->set_flashdata('msg_class','alert-danger');
		}
		return redirect('User/dashboard');
	} 


	//logout
	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('User/login_form');
	}
}
?>