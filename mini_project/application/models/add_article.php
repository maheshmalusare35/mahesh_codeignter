<?php
class Add_article extends CI_Model
{
	public function add_article_data($article_data)
	{
		return $this->db->insert('admin_project',$article_data);
	}
} 
?>