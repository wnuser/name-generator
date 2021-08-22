<?php

class GetFantasyModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $typeofname      = array_key_exists('typeofname', $post) ? $post['typeofname'] : false;
        $gender          = array_key_exists('gender', $post) ? $post['gender'] : false;
    
      
        $query      =   $this->db->where('typeofname', $typeofname)
                                    ->where('gender', $gender)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('fantacyNames');
        $result     =   $query->result_array();  
        
       
       if(count($result)){
                return $result;
       }
       else 
       {
                $query      =   $this->db->order_by('rand()')
                                        ->limit($limit)
                                        ->get('fantacyNames');
                return  $result     =   $query->result_array(); 
                        
       }      


       
	}
	
}








?>