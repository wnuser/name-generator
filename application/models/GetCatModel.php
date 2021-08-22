<?php

class GetCatModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $gender          = array_key_exists('gender', $post) ? $post['gender'] : false;
        $color           = array_key_exists('color', $post) ? $post['color'] :  false;
        $pattern         = array_key_exists('pattern', $post) ? $post['pattern'] : false;


        $array      =   array(
                               'gender'   => $gender,
                               'pattern'  => $pattern,
                               'color'    => $color
        );
        $whereArray =   array_filter($array);   
        
        $query      =   $this->db->where($whereArray)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('catNames');
        $result     =   $query->result_array();  

         

        if(count($result))
        {
                return $result;
        }else {
                    $query      =   $this->db->order_by('rand()')
                                            ->limit($limit)
                                            ->get('catNames');
                    return  $result     =   $query->result_array(); 
       
        }
}
	
}








?>