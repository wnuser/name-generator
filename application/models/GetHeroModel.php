<?php

class GetHeroModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $gender          = array_key_exists('gender', $post) ? $post['gender'] : false;
        $kindof          = array_key_exists('kindof', $post) ? $post['kindof'] :  false;
        $adjective       = array_key_exists('adjective', $post) ? $post['adjective'] : false;
        $animal          = array_key_exists('animal', $post) ? $post['animal'] : false;


        $query      =   $this->db->where('likeanimal', $animal)
                                    ->where('adjective', $adjective)
                                    ->where('kindofcharacter', $kindof)
                                    ->where('gender',$gender)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('heroNames');
        $result    = $query->result_array();
       
                                    if(count($result)){
                                        return $result;
                                                }else {
                                                $query      =   $this->db->order_by('rand()')
                                                                        ->limit($limit)
                                                                        ->get('firstNames');
                                                return  $result     =   $query->result_array(); 
                                                        
                                                } 

       
	}
	
}








?>