<?php
defined('BASEPATH') OR exit('No direct script acess allowed');
class Users extends MY_controller
{
	public function User()
	{
		// $this->load->library('email');
		// $this->email->show();
		// $this->test();
		// $this->load->library('test');
		// $this->test->dbdetails();
		// $this->load->helper('array');
		// $arr = ['ABC'=>'abc','XYZ'=>'xyz'];
		// echo element('ABC',$arr,'Not Found');
		// show();
		$this->load->model('Usermodel');
		$this->Usermodel->getuserdata();
		// $data['user_data'] = $this->Usermodel->getuserdata();		
		// $this->load->view('Users/userlist',$data);
	}
}
?>