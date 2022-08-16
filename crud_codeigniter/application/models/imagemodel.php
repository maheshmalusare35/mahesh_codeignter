<?php
class Imagemodel extends CI_Model
{
	public function insertdata($data)
	{
		return $this->db->insert('imageupload',$data);
	}
}
?>