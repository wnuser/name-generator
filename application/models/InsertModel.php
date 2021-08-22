<?php

class InsertModel extends CI_Model
{
	public function addData($table, $post)
	{
		return   $this->db->insert($table, $post);
	}
	
}








?>