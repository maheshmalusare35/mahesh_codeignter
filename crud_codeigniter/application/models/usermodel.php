<?php
class Usermodel extends CI_Model
{
	//data insert using register form 
	public function register_data($data)
	{
		return $this->db->insert('users',$data);
	}
	//get data for password
	public function get_pass()
	{
		$get_pass = $this->db->select()
				 		 ->get('users');
				 		return $get_pass->row();
	}
	
	
	//check for the login
	public function login_check($email,$pass_check,$type)
	{
			$q = $this->db->where(['email'=>$email,'password'=>$pass_check,'register_type'=>$type])
					  ->from('users')   //table username
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

	//get the data for the show name using id
	public function name_data()
	{
		$this->load->library('session');
		$id = $this->session->userdata('id');
		$q = $this->db->select('*')
				 ->from('users')
				 ->where(['id'=>$id])
				 ->get();
	if ($q->num_rows()) 
		{
			return $q->row();
		}	
		else
		{
			return false;
		}
	}



	// data insert from table
	public function user_data_add($data)
	{
		return $this->db->insert('users',$data);
	}
	// data get from table all column and rows data data
	public function get_data()
	{
		$new = $this->db->select()
		         ->get('users');
		         return $new->result();
	}
	public function edit_data($id)
	{
		$query = $this->db->get_where('users',['id'=>$id]);
		return $query->row();
	}
	public function update_data($data,$id)
	{
		return $query =$this->db->update('users',$data,['id'=>$id]);
	}
	public function delete_data($id)
	{
		return $this->db->delete('users',['id'=>$id]);
	}

	//get data for the language
	public function get_language()
	{
		$new_get = $this->db->select()
		         ->get('language');
		         return $new_get->result();
	}
}
?>