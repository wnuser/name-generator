<?php

class AdminModel extends CI_Model
{
	public function isValidate($userData)
	{
		
		$q =  $this->db->select()
		                ->from('admin')
		                ->where('user_name',$userData['user_name'])
		                ->get();
		    $rows = $q->num_rows();
		    $data = $q->row_array();
		if($rows>0)
		{
             if(password_verify($userData['password'],$data['password']))
             {
               return $q->row()->id;
             }else{
                return false;
             }
             
		}else{
            return false;
		}   


	}
	
	
	
}








?>