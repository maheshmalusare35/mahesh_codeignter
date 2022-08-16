<?php
class User extends MY_controller
{
	public function index_user()
	{
		$this->load->view('Users/articlelist');
	}
}
?>