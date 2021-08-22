<?php

class GetCharacterModel extends CI_Model
{
    // getting character names
    public function index($post){

        $limit      = array_key_exists('num', $post)    ? $post['num'] :false;
        $gender     = array_key_exists('gender', $post) ? $post['gender']  : false ;
        $country    = array_key_exists('country', $post) ? $post['country'] : false ;
        $title      = array_key_exists('title', $post)  ? $post['title'] : false;
        $flavour    = array_key_exists('flavour', $post)? $post['flavour'] : false;
        $character  = array_key_exists('character', $post) ? $post['character'] : false; 

        $array      =  array(
                           'gender'    => $gender,
                           'flavour'   => $flavour,
                           'country'   => $country,
                           'characters'=> $character
                        );
        $whereArray  = array_filter($array);    
        
        $query     = $this->db->where($whereArray)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('charactersName');
        $result    = $query->result_array();  

        
        if(count($result))
        {
            return $result;
        }else {
            $query      =   $this->db->order_by('rand()')
                                        ->limit($limit)
                                        ->get('charactersName');
            return  $result     =   $query->result_array();     
    }

}

}








?>