<?php
class Register extends CI_Model
{
	public function register_form_data($data)
	{
		return $this->db->insert('users',$data);
	}
}
?>