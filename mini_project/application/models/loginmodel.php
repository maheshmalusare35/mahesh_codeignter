<?php
class loginmodel extends CI_Model
{
	public function isvalidate($username,$password)
	{
		$q = $this->db->where(['username'=>$username,'password'=>$password])
					  ->from('users')   //table uername
				      ->get();	
				     
		if ($q->num_rows()) 
		{
			return $q->row()->id;
		}	
		else
		{
			return false;
		}
	}

	public function articlelist($limit,$offset)
	{
		$this->load->library('session');
		$id = $this->session->userdata('id');
		$q = $this->db->select('*')
				 ->from('admin_project')
				 ->where(['user_id'=>$id])
				 ->limit($limit,$offset)
				 ->get();
				 return $q->result();
	}	
	public function num_rows()
	{
		$this->load->library('session');
		$id = $this->session->userdata('id');
		$q = $this->db->select('*')
				 ->from('admin_project')
				 ->where(['user_id'=>$id])
				 ->get();
				 return $q->num_rows();
	}


	public function deletedata($id)
	{
		return $this->db->delete('admin_project',['id'=>$id]);
	}


	public function editdata($id)
	{
		$q=$this->db->select(['article_title','article_body','id'])
				 ->where(['id'=>$id])
		         ->get('admin_project');
		         return $q->row();
	}

	public function updatearticle($id,$article)
	{
		return $this->db->where(['id',$id])
				 ->update('admin_project',$article);
	}


} 
?>


