<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Sample extends CI_Controller
{ 
	//main css and html header footer
	// public function index()
	// {
	//   $data['_view']='student/studentprofile';
	//   $this->load->view('layout/main',$data);
 //    }
	// register view
	public function register()
	{
		$this->load->view('register/register');
	}
	//admin_panel dashboard
	public function admin_panel()
	{
		$this->load->view('dashboard/admin');
		//for get name
		$this->load->model('Samplemodel');
		$data = $this->Samplemodel->get_name();		
		$this->load->view('layout/adminsidebar/adsidebar',['data'=>$data]);
	}
	//recruiter_panel dashboard
	// public function recruiter_panel_dashboard()
	// {
	// 	$this->load->view('dashboard/recruiter');
	// 	$this->load->model('Samplemodel');
	// 	$data = $this->Samplemodel->get_name();		
	// 	$this->load->view('layout/recruitersidebar/recsidebar',['data'=>$data]);
	// }
	//login in job portal
	public function login_panel()
	{
		$this->load->view('login/login');
	} 
	//recruiter 
	public function recruiter_panel()
	{
		if ($this->session->userdata('id')) {
			$this->load->view('recruiter/recruiterpage');
		}
		else
		{
			return redirect('Sample/login_panel');
		}
		
	}
	//student 
	public function student_panel()
	{
		$this->load->view('student/studentprofile');
	}
	//education 
	public function education_panel()
	{
		$this->load->view('education/educationpage');
	}
	//Jobs 
	public function job_panel()
	{
		$this->load->view('job/jobpage');
	}
	//profile view 
	public function profile_view()
	{
		$this->load->view('student/profileview');
	}
	//add jobseeker
	public function add_jobseeker()
	{
		$this->load->view('admin/addjobseeker');
		$this->load->model('Samplemodel');
		$data_name = $this->Samplemodel->get_name();		
		$this->load->view('layout/adminsidebar/adsidebar',['data'=>$data_name]);
	}
	//show jobseeker
	public function show_jobseeker()
	{
		$this->load->model('Samplemodel');
		$data = $this->Samplemodel->get_jobseeker_data();		
		$this->load->view('admin/showjobseeker',['data'=>$data]);	
		
		$data_name = $this->Samplemodel->get_name();		
		$this->load->view('layout/adminsidebar/adsidebar',['data'=>$data_name]);
		//$this->load->view('admin/showjobseeker');
	}
	//add recruiter
	public function add_recruiter()
	{
		$this->load->view('admin/addrecruiter');
		$this->load->model('Samplemodel');
		$data_name = $this->Samplemodel->get_name();		
		$this->load->view('layout/adminsidebar/adsidebar',['data'=>$data_name]);
	}
	//show recruiter
	public function show_recruiter()
	{
		$this->load->model('Samplemodel');
		$data = $this->Samplemodel->get_recruiter_data();		
		$this->load->view('admin/showrecruiter',['data'=>$data]);
		
		$data_name = $this->Samplemodel->get_name();		
		$this->load->view('layout/adminsidebar/adsidebar',['data'=>$data_name]);	
		//$this->load->view('admin/showjobseeker');
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

				
				if($register_type == 'Job Seeker')
				{
					//$this->session->set_flashdata('login', 'Login Successfully');
					return redirect('Sample/jobseekerdashboard');
				}
				elseif ($register_type == 'Recruiter')
				{
					return redirect('Sample/recruiter_panel');
				}
				elseif($register_type == 'Admin')
				{
					return redirect('Sample/admindashboard');
				}
				else
				{
					return redirect('Sample/login_panel');
				}
			}
			else
			{
				$this->session->set_flashdata('check', 'Invalid email, password and register type');
				return redirect('Sample/login_panel');
			}
		}
		else
		{
			$this->load->view('login/login');
		}
	}

	
	
	//jobseeker
	public function jobseekerdashboard()
	{
		if($this->session->userdata('id'))
		{
			$this->load->view('dashboard/jobseeker');
			$this->load->model('Samplemodel');
			$data = $this->Samplemodel->get_name();		
			$this->load->view('layout/sidebar',['data'=>$data]);
		}
		else
		{
			return redirect('Sample/login_panel');
		}
	}	


	//recruiter
	public function recruiterdashboard()
	{
		if($this->session->userdata('id'))
		{
			$this->load->view('dashboard/recruiter');
			$this->load->model('Samplemodel');
			$data = $this->Samplemodel->get_name();		
			$this->load->view('layout/recruitersidebar/recsidebar',['data'=>$data]);
		}
		else
		{
			return redirect('Sample/login_panel');
		}
	}


	//admin
	public function admindashboard()
	{
		if ($this->session->userdata('id')) 
		{		
			$this->load->model('Samplemodel');
			$data_name = $this->Samplemodel->get_name();		
			$this->load->view('layout/adminsidebar/adsidebar',['data'=>$data_name]);			
		}
		else
		{
			return redirect('Sample/login_panel');
		}
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
				$this->session->set_flashdata('registerdata', 'Record Inserted successfully');
				return redirect('Sample/login_panel');					
		}
		else
		{
			$this->load->view('register/register');
		}

	}

	// company register check
	public function company_register_check()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('company_name','Company Name','trim|required|alpha|is_unique[recruiter_company_detail.company_name]');
		$this->form_validation->set_rules('company_owner_name','Company Owner Name','trim|required');
		$this->form_validation->set_rules('company_email','Company Email','trim|required|valid_email|is_unique[recruiter_company_detail.company_email]');
		$this->form_validation->set_rules('company_phone_no','Company Phone No','trim|required|is_unique[recruiter_company_detail.company_phone_no]');
		

		if ($this->form_validation->run())
		{
			$register_data =
				[
					'user_id' => $this->session->userdata('id'),
					'company_name' => $this->input->post('company_name'),
					'company_owner_name' => $this->input->post('company_owner_name'),
					'company_email' => $this->input->post('company_email'),
					'company_phone_no' => $this->input->post('company_phone_no')
				]; 
				$this->load->model('Samplemodel');
				$this->Samplemodel->company_data($register_data);
				$this->session->set_flashdata('register', 'Record Inserted successfully');
				return redirect('Sample/recruiterdashboard');					
		}
		else
		{
			$this->load->view('recruiter/recruiterpage');
		}

	}


	//add register model
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
		return redirect('Sample/login_panel	');
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
		$this->form_validation->set_rules('contact_no','Contact No','trim|required|exact_length[10]|numeric|is_unique[profile_job_seeker.contact_no]');
		$this->form_validation->set_rules('gender','Gender','trim|required');
		$this->form_validation->set_rules('address','Address','trim|required');
		$this->form_validation->set_rules('city','City','trim|required|alpha');
		$this->form_validation->set_rules('state','State','trim|required|alpha');
		$this->form_validation->set_rules('pincode','Pincode','trim|required|exact_length[6]|numeric');
		$this->form_validation->set_rules('language[]','Language','trim|required');
	
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

					
					// echo('<pre>');
					// print_r($data);
					//  exit();

					$this->load->model('Samplemodel');
					$data_add = $this->Samplemodel->profile_data($data);
					
					if ($data_add)
					{	
						$this->session->set_flashdata('register','Record insert successfully');			
						return redirect('Sample/jobseekerdashboard');
					}
					else
					{
						echo 'data not insert';
					}					
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('student/studentprofile',$error);
				}
		}
		else
		{
			$this->load->model('Samplemodel');
		$language = $this->Samplemodel->language_get_data();
		$this->load->view('student/studentprofile',['language'=>$language]);
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


	//education details 
	public function education_details()
	{
		$this->form_validation->set_rules('university_name','University Name','trim|required');
		$this->form_validation->set_rules('graduation_college_name','Graduction College Name','trim|required');
		$this->form_validation->set_rules('graduction_grade','Graduction Grade','trim|required|numeric');
		$this->form_validation->set_rules('graduction_passing_year','Graduction Passing Year','trim|required');
		$this->form_validation->set_rules('hsc_board_name','HSC Board Name','trim|required');
		$this->form_validation->set_rules('hsc_college_name','HSC College Name','trim|required');
		$this->form_validation->set_rules('hsc_percentage','HSC Percentage','trim|required|numeric');
		$this->form_validation->set_rules('hsc_passing_year','HSC Passing Year','trim|required');
		$this->form_validation->set_rules('ssc_board_name','SSC Board Name','trim|required');
		$this->form_validation->set_rules('ssc_school_name','SSC College Name','trim|required');
		$this->form_validation->set_rules('ssc_percentage','SSC Percentage','trim|required|numeric');
		$this->form_validation->set_rules('ssc_passing_year','SSC Passing Year','trim|required');

		//if we include image validation in the above then they give error
		if (empty($_FILES['resume']['name'])) 
		{
			$this->form_validation->set_rules('resume', 'Resume', 'trim|required');
		}



		if ($this->form_validation->run())
		{
			$config = array(
				'upload_path' => './resumes',
				'allowed_types' => 'pdf'							
			);

			$this->load->library('upload');
			$this->upload->initialize($config);
			if ($this->upload->do_upload('resume'))
				{
					$file_upload = $this->upload->data();
					$file_name =$file_upload['file_name'];
					$data = [
						'user_id' => $this->session->userdata('id'),
						'university_name' => $this->input->post('university_name'),
						'graduation_college_name' => $this->input->post('graduation_college_name'),
						'graduction_grade' => $this->input->post('graduction_grade'),						
						'graduction_passing_year' => $this->input->post('graduction_passing_year'),
						'hsc_board_name' => $this->input->post('hsc_board_name'),
						'hsc_college_name' => $this->input->post('hsc_college_name'),
						'hsc_percentage' => $this->input->post('hsc_percentage'),						
						'hsc_passing_year' => $this->input->post('hsc_passing_year'),
						'ssc_board_name' => $this->input->post('ssc_board_name'),
						'ssc_school_name' => $this->input->post('ssc_school_name'),
						'ssc_percentage' => $this->input->post('ssc_percentage'),
						'ssc_passing_year' => $this->input->post('ssc_passing_year'),
						'resume' => $file_name						
					];			
					// echo("<pre>");
					// print_r($data);
					// exit();	


					$this->load->model('Samplemodel');
					$data_add = $this->Samplemodel->education_data($data);
					
					if ($data_add)
					{	
						$this->session->set_flashdata('register','Record insert successfully');			
						return redirect('Sample/jobseekerdashboard');
					}
					else
					{
						echo 'data not insert';
					}					
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('education/educationpage',$error);
				}
		}
		else
		{
			$this->load->view('education/educationpage');
		}
	}

	//language
	public function language()
	{
		$this->load->model('Samplemodel');
		$language = $this->Samplemodel->language_get_data();
		$this->load->view('student/studentprofile',['language'=>$language]);
		// echo'<pre>';
		// print_r($language);
		// exit();
	}

	//add job seeker data
	public function add_job_seeker_data()
	{
		$this->form_validation->set_rules('fullname','Full Name','trim|required|alpha');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[register.email]');
		$this->form_validation->set_rules('password','Password','trim|required');


		if($this->form_validation->run())
		{
			$register_data = 
			[
				'fullname'=> $this->input->post('fullname'),
				'email'=> $this->input->post('email'),
				'password'=> md5($this->input->post('password')),
				'register_type' => 'Job Seeker'
			];

			$this->load->model('Samplemodel');
			$this->Samplemodel->register_form_data($register_data);
			$this->session->set_flashdata('register', 'Record Inserted successfully');
			return redirect('Sample/add_jobseeker');					
			
		}
		else
		{
			$this->load->view('admin/addjobseeker');
		}

	}


	//add recruiter data
	public function add_recruiter_data()
	{
		$this->form_validation->set_rules('fullname','Full Name','trim|required|alpha');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[register.email]');
		$this->form_validation->set_rules('password','Password','trim|required');


		if($this->form_validation->run())
		{
			
			$register_data = 
			[
				'fullname'=> $this->input->post('fullname'),
				'email'=> $this->input->post('email'),
				'password'=> md5($this->input->post('password')),
				'register_type' => 'Recruiter'
			];

			$this->load->model('Samplemodel');
			$this->Samplemodel->register_form_data($register_data);
			$this->session->set_flashdata('register', 'Record Inserted successfully');
			return redirect('Sample/add_recruiter');					
			
		}
		else
		{
			$this->load->view('admin/addrecruiter');
		}

	}

	//job create
	public function job_create()
	{
		$this->load->view('recruiter/job_create');
	}

	//get data of the new job crate
	public function get_job_details()
	{
		$this->form_validation->set_rules('job_name','Job Name','trim|required');
		$this->form_validation->set_rules('job_description','Job Description','trim|required');
		$this->form_validation->set_rules('job_apply_start_date','Job Apply Start Date','trim|required');
		$this->form_validation->set_rules('job_apply_end_date','Job Apply End Date','trim|required');

		if ($this->form_validation->run())
		{
			
		}
		else
		{
			$this->load->view('recruiter/job_create');
		}

	}
	
}
?>