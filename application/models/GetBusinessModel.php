<?php

class GetBusinessModel extends CI_Model
{
	public function index($post)
	{
        $limit            = array_key_exists('num', $post)    ? $post['num'] :false;
        $b_type           = array_key_exists('b_type', $post) ? $post['b_type'] : false;
        $b_activity       = array_key_exists('b_activity', $post) ? $post['b_activity'] :  false;
        $b_based          = array_key_exists('b_based', $post) ? $post['b_based'] : false;

        $query      =   $this->db->where('b_type', $b_type)
                                    ->where('b_activity', $b_activity)
                                    ->where('b_based', $b_based)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('businessNames');
            $result     =   $query->result_array();     


            if(count($result)){
                return $result;
                    } else{
                            $query      =    $this->db->order_by('rand()')
                                                    ->limit($limit)
                                                    ->get('businessNames');
                        return   $result     =   $query->result_array(); 
                    }  

       
	}
	
}








?>