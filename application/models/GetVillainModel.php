<?php

class GetVillainModel extends CI_Model
{
	public function index($post)
	{

        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $gender          = array_key_exists('gender', $post) ? $post['gender'] : false;
        $kindof          = array_key_exists('kindof', $post) ? $post['kindof'] :  false;
        $adjective       = array_key_exists('adjective', $post) ? $post['adjective'] : false;
        $animal          = array_key_exists('animal', $post) ? $post['animal'] : false;


       if($adjective){

        $query      =   $this->db->where('kindofcharacter', $kindof)
                                    ->where('adjective', $adjective)
                                    ->where('likeanimal', $animal)
                                    ->where('gender',$gender)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('Villainnames');
        $result     =   $query->result_array();  


       }else{

        $query      =   $this->db->where('kindofcharacter', $kindof)
                                        ->where('likeanimal', $animal)
                                        ->where('gender',$gender)
                                        ->order_by('rand()')
                                        ->limit($limit)
                                        ->get('Villainnames');
        $result     =   $query->result_array();  

       }
       
       if(count($result)){

        return self::formatData($result, $animal, $limit);
        
        }else {
                $query      =   $this->db->order_by('rand()')
                                        ->limit($limit)
                                        ->get('Villainnames');
                  $result     =   $query->result_array(); 

                  return self::formatData($result, $animal, $limit);
                        
                }

       
        }
        
        /**
         * function for format data
         */

         public function formatData($data, $animal, $limit)
         {
                 $randomNumber   = rand(1, $limit);
                 $array  = array();
                 foreach ($data as $key => $value) {
                         # code...
                         if($randomNumber < $key) :

                         $array[$key]['name']   = $value['name'].'-'.$animal;
                         
                         else:
                         $array[$key]['name'] = $value['name'];
                         endif;
                 }

                 return $array;
         }
	
}








?>