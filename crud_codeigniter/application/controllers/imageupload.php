<?php
class Imageupload extends CI_Controller
{
	public function image()
	{
		$this->load->view('crud/image');
	}
	public function store_image()
	{
		$this->form_validation->set_rules('firstname', 'First name', 'trim|required|alpha');
		$this->form_validation->set_rules('lastname', 'Last name', 'trim|required|alpha');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('contactno', 'Contact No', 'trim|required|exact_length[10]');
		//$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		//$this->form_validation->set_rules('language', 'Language', 'trim|required');

		//if we include image validation in the above then they give error
		if (empty($_FILES['image']['name'])) {
			$this->form_validation->set_rules('image', 'Image', 'trim|required');
		}

		if ($this->form_validation->run())
		{
			//$original_file = $_FILES['image']['name'];
			//$new_name = $original_file;//time().''.str_replace(' ','-',$original_file)
			$config = array(
				'upload_path' => './uploads',
				'allowed_types' => 'jpeg|jpg|png'
				//'filename' => $_FILES['image']['name']				
			);
								
				$this->load->library('upload');
				$this->upload->initialize($config);
				
				if (!$this->upload->do_upload('image')){
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
						'contactno' => $this->input->post('contactno'),
						'image' => $file_name
					];


					$this->load->model('Imagemodel');
					$this->Imagemodel->insertdata($data);
					echo 'record inserted';
				}			
		} 
		else
		{
			$this->load->view('crud/image');
		}
	} 
}
?>