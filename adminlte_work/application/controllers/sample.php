<?php
/**
 * 
 */
class Sample extends CI_Controller
{
	//admin_panel
	public function admin_panel()
	{
		$this->load->view('crud/admin_portal');
	}
	//login in job portal
	public function login_panel()
	{
		$this->load->view('login/login');
	} 







	// login view
	public function login()
	{
		$this->load->view('crud/login');
	}

	//login check
	public function login_check()
	{
		$this->load->library('form_validation');		
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('register_type','Register Type','trim|required');
		

		if ($this->form_validation->run())
		{
			
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));
				$register_type = $this->input->post('register_type');
					
			$this->load->model('Samplemodel');
			$check_for_login = $this->Samplemodel->login_check($email,$password,$register_type);


			if ($check_for_login == true)
			{
				$this->load->library('session');
				$this->session->set_userdata('id',$check_for_login);
				$this->load->view('crud/admin',['data'=>$check_for_login]);
				$this->load->view('crud/user',['data'=>$check_for_login]);

				if($register_type == 'User')
				{
					return redirect('Sample/userdashboard');
				}
				elseif ($register_type == 'Admin')
				{
					return redirect('Sample/admindashboard');
				}
				else
				{
					return redirect('Sample/login');
				}
			}
			else
			{
				$this->session->set_flashdata('check', 'Invalid email, password and register type');
				return redirect('Sample/login');
			}
		}
		else
		{
			$this->load->view('crud/login');
		}
	}

	//user
	public function userdashboard()
	{
		if($this->session->userdata('id'))
		{
			$this->load->view('crud/user');
		}
		else
		{
			return redirect('Sample/login');
		}
	}


	//admin
	public function admindashboard()
	{
		if ($this->session->userdata('id')) 
		{		
			$this->load->model('Samplemodel');
			$data = $this->Samplemodel->get_data();		
			$this->load->view('crud/admin',['data'=>$data]);			
		}
		else
		{
			return redirect('Sample/login');
		}
	}

	// register view
	public function register()
	{
		$this->load->view('crud/register');
	}

	//register check
	public function register_check()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname','Full Name','trim|required|alpha');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[register.email]');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('register_type','Register Type','trim|required');
		

		if ($this->form_validation->run())
		{
			$register_data =
				[
					'fullname' => $this->input->post('fullname'),
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password')),
					'register_type' => $this->input->post('register_type')
				]; 
				$this->load->model('Samplemodel');
				$this->Samplemodel->register_form_data($register_data);
				$this->session->set_flashdata('register', 'Record Inserted successfully');
				return redirect('Sample/login');					
		}
		else
		{
			$this->load->view('crud/register');
		}

	}

	//register model
	public function add_register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname','Full Name','trim|required|alpha');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[register.email]');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('register_type','Register Type','trim|required');
		
		

		if ($this->form_validation->run())
		{
			$add_register_data =
				[
					'fullname' => $this->input->post('fullname'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'register_type' => $this->input->post('register_type')
				]; 
				$this->load->model('Samplemodel');
				$this->Samplemodel->add_register_form_data($add_register_data);

			$this->session->set_flashdata('register', 'Record Inserted successfully');
				return redirect('Sample/admindashboard');					
		}
		else
		{
			$this->load->view('crud/adduser');
		}

	}


	//edit
	public function edit($id)
	{
		$this->load->model('Samplemodel');
		$data =  $this->Samplemodel->edit_data($id);
		$this->load->view('crud/edit',['edit'=>$data]);
	}

	
	//update data
	public function update($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fullname','Full Name','trim|required|alpha');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[register.email]');

		if($this->form_validation->run())
		{
				$update_register_data =
				[
					'fullname' => $this->input->post('fullname'),
					'email' => $this->input->post('email')					
				]; 
				$this->load->model('Samplemodel');
				$this->Samplemodel->update_data($update_register_data,$id);

			$this->session->set_flashdata('update', 'Record update successfully');
				return redirect('Sample/admindashboard');	
		}
		else
		{
			 $this->edit($id);
		}
	
	}



	//adduser
	public function adduser()
	{
		$this->load->view('crud/adduser');
	}

	//user panel
	// public function user()
	// {
	// 	$this->load->view('crud/user');
	// }

	//logout
	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('Sample/login');
	}

	//delete
	public function delete($id)
	{
		$this->load->model('Samplemodel');
		//$this->Samplemodel->delete($id);
		if($this->Samplemodel->delete($id))
		{
			$this->session->set_flashdata('delete', 'Record delete successfully');
				return redirect('Sample/admindashboard');
		}		
	}


	//prfile users dashboard
	public function profile()
	{
		$this->load->model('Samplemodel');
		$language = $this->Samplemodel->language_get_data();
		$this->load->view('crud/profile',['language'=>$language]);
	}

	//profile submit form and validation
	public function profile_student()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('contact_no','Contact No','trim|required|exact_length[10]|numeric|is_unique[profileuser.contact_no]');
		$this->form_validation->set_rules('gender','Gender','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('city','City','trim|required|alpha');
		$this->form_validation->set_rules('state','State','trim|required|alpha');
		$this->form_validation->set_rules('pincode','Pincode','trim|required|exact_length[6]|numeric');
		///$this->form_validation->set_rules('language[]','Language','trim|required');
	
		//if we include image validation in the above then they give error
		if (empty($_FILES['image']['name'])) 
		{
			$this->form_validation->set_rules('image', 'Image', 'trim|required');
		}

		if($this->form_validation->run())
		{
			$config = array(
				'upload_path' => './uploads',
				'allowed_types' => 'jpeg|jpg|png'							
			);

			$this->load->library('upload');
			$this->upload->initialize($config);
			if ($this->upload->do_upload('image'))
				{
					$file_upload = $this->upload->data();
					$file_name =$file_upload['file_name'];
					$data = [
						'user_id' => $this->session->userdata('id'),
						'contact_no' => $this->input->post('contact_no'),
						'image' => $file_name,
						'gender' => $this->input->post('gender'),
						'address' => $this->input->post('address'),
						'city' => $this->input->post('city'),
						'state' => $this->input->post('state'),
						'pincode' => $this->input->post('pincode'),
						 'language' =>implode(',', $this->input->post('language'))
					];				

					//$language = $this->input->post('language[]');
					
					//print_r($language);
					 //exit();

					$this->load->model('Samplemodel');
					$data_add = $this->Samplemodel->profile_data($data);
					
					if ($data_add)
					{	
						$this->session->set_flashdata('register','Record insert successful');			
						return redirect('Sample/userdashboard');
					}
					else
					{
						echo 'data not insert';
					}					
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('crud/profile',$error);
				}
		}
		else
		{
			$this->load->model('Samplemodel');
		$language = $this->Samplemodel->language_get_data();
		$this->load->view('crud/profile',['language'=>$language]);
		}
	}

	//education users dashboard
	public function education()
	{
		$id = $this->session->userdata('id');
		$this->load->model('Samplemodel');
		$education = $this->Samplemodel->education_get_data($id);
		$this->load->view('crud/education',['education'=>$education]);
	}


	//education details add
	public function education_details()
	{
		$this->form_validation->set_rules('hscboardname','HSC Board Name','trim|required');
		$this->form_validation->set_rules('hsccollegename','HSC College Name','trim|required');
		$this->form_validation->set_rules('hscpercentage','HSC Percentage','trim|required|numeric');
		$this->form_validation->set_rules('hscpassingyear','HSC Passing Year','trim|required');
		$this->form_validation->set_rules('sscboardname','SSC Board Name','trim|required');
		$this->form_validation->set_rules('sscschoolname','SSC College Name','trim|required');
		$this->form_validation->set_rules('sscpercentage','SSC Percentage','trim|required|numeric');
		$this->form_validation->set_rules('sscpassingyear','SSC Passing Year','trim|required');


		if ($this->form_validation->run())
		{
			$data = [
						'user_id' => $this->session->userdata('id'),
						'hscboardname' => $this->input->post('hscboardname'),
						'hsccollegename' => $this->input->post('hsccollegename'),
						'hscpercentage' => $this->input->post('hscpercentage'),						
						'hscpassingyear' => $this->input->post('hscpassingyear'),
						'sscboardname' => $this->input->post('sscboardname'),
						'sscschoolname' => $this->input->post('sscschoolname'),
						'sscpercentage' => $this->input->post('sscpercentage'),
						'sscpassingyear' => $this->input->post('sscpassingyear')
					];		

					$this->load->model('Samplemodel');
					$this->Samplemodel->education_data($data);	
					$this->session->set_flashdata('register','Record insert successful');
					return redirect('Sample/userdashboard');
		}
		else
		{
			$this->load->view('crud/education');
		}
	}

	//language
	public function language()
	{
		$this->load->model('Samplemodel');
		$language = $this->Samplemodel->language_get_data();
		$this->load->view('crud/profile',['language'=>$language]);
		// echo'<pre>';
		// print_r($language);
		// exit();
	}

	
}
?>