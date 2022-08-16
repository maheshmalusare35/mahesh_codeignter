<?php 
class Admin extends MY_controller
{
	// public function __construct()
	// {
	// 	parent::__construct();		
	// 	if (!$this->session->userdata('id')) {
	// 		$this->load->view('Admin/login');
	// 	}
	// }
	public function index_admin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User Name','required|alpha');
		$this->form_validation->set_rules('password','Password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if ($this->form_validation->run())
		{
			//use for get the data
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('loginmodel');
			$result = $this->loginmodel->isvalidate($username,$password);
			if ($result) 
			{
				$this->load->library('session');
				$this->session->set_userdata('id',$result);
				// $this->load->view('Admin/dashboard');
				return redirect('Admin/welcome');
			}			
			else{
				$this->session->set_flashdata('login_fail','Invalid Username and Password');
				return redirect('Admin/login');
			}		
		}
		else
		{
			$this->load->view('Admin/login');
		}
	}

	public function welcome()
	{ if($this->session->userdata('id')){
		$this->load->model('loginmodel');
		//pagination		
		$this->load->library('pagination');
		
		$config=
		[
			'base_url'=>base_url('Admin/welcome'),
			'per_page'=>2,
			'total_rows'=>$this->loginmodel->num_rows(),
			'full_tag_open'=>'<nav aria-label="Page navigation example"><ul class="pagination">',
			'full_tag_close'=>'</ul></nav>',
			'next_tag_open'=>'<li class="page-item"><a class="page-link">',
			'next_tag_close'=>'</a></li>',
			'prev_tag_open'=>'<li class="page-item"><a class="page-link">',
			'prev_tag_close'=>'</a></li>',
			'num_tag_open'=>'<li class="page-item"><a class="page-link">',
			'num_tag_close'=>'</a></li>',
			'cur_tag_open'=>'<li class="page-item"><a class="page-link">',
			'cur_tag_close'=>'</a></li>'
		];
		
		$this->pagination->initialize($config);
		
		

		$article = $this->loginmodel->articlelist($config['per_page'],$this->uri->segment(3));
		// echo $this->db->last_query();
		// die();
		$this->load->view('Admin/dashboard',['article'=>$article]);

		



		}
		else{
			return redirect('Admin/login');
		}
	}
	//register funtion
	public function register()
	{
		$this->load->view('Admin/register');
	}
	//get register data
	public function register_form_data()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User name','required|alpha|is_unique[users.username]');
		$this->form_validation->set_rules('firstname', 'First name','required|alpha');
		$this->form_validation->set_rules('lastname', 'Last name','required|alpha');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div');

		if ($this->form_validation->run())
	    {
	    	$data = [
	    		'username'=>$this->input->post('username'),
			'firstname'=>$this->input->post('firstname'),
			'lastname'=>$this->input->post('lastname'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password')

		];

		$this->load->model('Register');
		$this->Register->register_form_data($data);

		?>
			<script type="text/javascript">
				alert("Register Successfully");
			</script>
		<?php
		$this->load->view('Admin/register');


		//email function
			// $this->load->library('email');
			// $this->email->from(set_value('email'),set_value('firstname'));
			// $this->email->to("");
			// $this->email->subject("Registration successfully");

			// $this->email->message("Thank you for registration");
			// $this->email->set_newline("\r\n");
			// $this->email->send();


			// if (!$this->email->send()) {
			// 	show_error($this->email->print_debugger());
			// }
			// else
			// {
			// 	echo "your mail has been send";
			// }			
		}
		else
		{
			// echo "record not inserted";
			//  echo validation_errors();
			$this->load->view('Admin/register');
		}

	}

	//login function
	public function login()
	{
		$this->load->view('Admin/login');
	}
	///logout function
	public function logout()
	{
		$this->session->unset_userdata('id');
		return redirect('Admin/login');
	}
	//adduser function for add_article 
	public function adduser()
	{
		$this->load->view('Admin/add_article');
	}
	//data get for add_article
	public function add_article_data()
	{
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('article_title','Article Title','required|alpha|is_unique[admin_project.article_title]');
		// $this->form_validation->set_rules('article_body','Article Body','required');
		// $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if ($this->form_validation->run('add_article_rules')) 
		{
		    $id = $this->session->userdata('id');
			$article_data =[
			'article_title'=>$this->input->post('article_title'),
			'article_body'=>$this->input->post('article_body'),
			'user_id'=>$id
			];

			
			$this->load->model('Add_article');
			$this->Add_article->add_article_data($article_data);
			
		return redirect('Admin/welcome');
		}
		else
		{
			// echo 'not successful';
			//echo validation_errors();
			$this->load->view('Admin/add_article');
		}
	}

	//function delete data
	public function deletedata()
	{

		$id= $this->input->post('id');
		$this->load->model('loginmodel');
		if ($this->loginmodel->deletedata($id))
		 {
		  $this->session->set_flashdata('msg','Record delete successful');
		  $this->session->set_flashdata('msg_class','alert-success');
		}
		else{
			 $this->session->set_flashdata('msg','Record Not delete successful');
		  $this->session->set_flashdata('msg_class','alert-success');
		}
			return redirect('Admin/welcome');

	}	

	//FUNCTION EDIT DATA
	public function editdata()
	{
		$id= $this->input->post('id');
		$this->load->model('loginmodel');
		$new=$this->loginmodel->editdata($id);
		$this->load->view('Admin/edit_article',['article'=>$new]);		
	} 

	//fuction update data
	public function updatearticle()
	{
		$id = $this->session->userdata('id');
		if ($this->form_validation->run('add_article_rules')) 
		{
			$this->input->post();
			$this->load->model('loginmodel');
			$articleid=$this->input->post('article_id');
			if ($this->loginmodel->updatearticle($articleid))
		 {
		  $this->session->set_flashdata('msg','Record Updated successful');
		  $this->session->set_flashdata('msg_class','alert-success');
		}
		else{
			 $this->session->set_flashdata('msg','Record Not Updated successful');
		  $this->session->set_flashdata('msg_class','alert-success');
		}
			return redirect('Admin/welcome');
			// print_r($this->input->post());
			// $this->load->model('loginmodel');
			// if($this->loginmodel->updatearticle())
			// {

			// }
			// else{

			// }
		}
		else{
				$this->load->view('Admin/edit_article');
			}
	}
}
?>