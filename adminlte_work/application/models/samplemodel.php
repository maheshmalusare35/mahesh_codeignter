<?php
class Samplemodel extends CI_Model
{
	//insert register data
	public function register_form_data($register_data)
	{
		return $this->db->insert('register',$register_data);
	}

	//insert add user register data
	public function add_register_form_data($add_register_data)
	{
		return $this->db->insert('register',$add_register_data);
	}

	//check login 
	public function login_check($email,$password,$register_type)
	{
		$q = $this->db->where(['email'=>$email,'password'=>$password,'register_type'=>$register_type])
						->get('register');

		if ($q->num_rows()) 
		{
			return $q->row()->id;
		}	
		else
		{
			return false;
		}
	}

	//get the data
	public function get_data()
	{
		$new = $this->db->select()
		         ->get('register');
		         return $new->result();
	}

	//get edit data
	public function edit_data($id)
	{
		$query = $this->db->get_where('register',['id'=>$id]);
		return $query->row();
	}

	//update data
	public function update_data($update_register_data,$id)
	{
		return $query =$this->db->update('register',$update_register_data,['id'=>$id]);
	}

	//delete data
	public function delete($id)
	{
		return $this->db->delete('register',['id'=>$id]);
	}


	//insert profile data
	public function profile_data($data)
	{
		return $this->db->insert('profileuser',$data);
	}

	//insert educational data
	public function education_data($data)
	{
		return $this->db->insert('educationaldetails',$data);
	}

	//get educational data
	public function education_get_data($id)
	{
		return $this->db->select()->get('educationaldetails')->row();
	}

	//get language data
	public function language_get_data()
	{
		return $this->db->select()->get('language')->result();
	}
}
?>