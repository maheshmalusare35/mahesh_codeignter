<?php 

class Usermodel extends MY_model
{
	public function getuserdata()
	{
		$this->test();
		$this->load->database();
		$q=$this->db->query("SELECT * FROM user");
		return $q->result_array();
	}
}
?>