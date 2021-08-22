<?php

class GetStreetModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $likethem        = array_key_exists('likethem', $post) ? $post['likethem'] : false;
        $beginwith       = array_key_exists('beginwith', $post) ? $post['beginwith'] : false;
        $endwith         = array_key_exists('endwith', $post) ? $post['endwith'] :  false;

        
        if($endwith){
            $query      = $this->db->where('likethem', $likethem)
                                    ->like('name', $beginwith)
                                    ->where('endwith', $endwith)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('Streetnames');
            $result     =  $query->result_array();  
        } else {

            $query      = $this->db->where('likethem', $likethem)
                                    ->like('name', $beginwith)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('Streetnames');
            $result     =  $query->result_array();  

        }
             
        if(count($result))
        {
            return self::formatData($result, $endwith);

        }else {
            $query      =   $this->db->order_by('rand()')
                                            ->limit($limit)
                                            ->get('Streetnames');
            $result     =   $query->result_array(); 
            return self::addFirstLetter($result, $beginwith, $endwith);
        }	
                
        }

        /**
         * funciton for add firstLetter
         */

         public function addFirstLetter($data, $beginwith, $endwith)
         {
             $array = array();
             foreach ($data as $key => $value) {
                 # code...

                 $array[$key]['name']  = trim($beginwith.$value['name']);
             }

             return self::formatData($array, $endwith);
         }

        /**
         * function for format data
         */
        public function formatData($data, $endwith)
        {

            $array   = array();
            foreach ($data as $key => $value) {
                # code...

                $array[$key]['name']  = trim($value['name'].$endwith);
            }
            return $array;
        }
	
}








?>