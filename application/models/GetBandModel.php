<?php

class GetBandModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $adjective       = array_key_exists('adjective', $post) ? $post['adjective'] : false;
        $leadfirstName   = array_key_exists('leadfirstName', $post) ? $post['leadfirstName'] :  false;
        $place           = array_key_exists('place', $post) ? $post['place'] : false;
        $noun            = array_key_exists('noun', $post) ? $post['noun'] : false;

        $array       =  array(
                              'adjective'  => $adjective
        );

        $whereArray  =  array_filter($array);
        $query      =   $this->db->order_by('rand()')
                                    ->limit($limit)
                                    ->get('BandNames');
        $result     =   $query->result_array();  
       

        if(count($result))
        {
            return self::addPlaceName($result, $place, $noun, $leadfirstName, $adjective);
        
        }else 
        {
                $query      =   $this->db->order_by('rand()')
                                        ->limit($limit)
                                        ->get('BandNames');
                $result     =   $query->result_array();                        
                return  self::addPlaceName($result, $place, $noun, $leadfirstName, $adjective);
        }
        
       
	
}

        /**
         * function for add place name randomly in names 
         */
        public function addPlaceName($data, $place, $noun, $leadfirstName, $adjective)
        {
               
           $totalNames     = count($data);
           $randomNumber   = rand(1, $totalNames);

           $array          = array();
           for ($i=1; $i <= $randomNumber; $i++) { 
               # code...
               $array[$i]  = $i; 
           }

           $returnArray    = array();
           $place          = ($place) ? $place : $adjective;
           $noun           = ($noun)  ? $noun : $adjective;

           foreach ($data as $key => $value) {
               # code...
                if($key%5 == 0):
                    if($key%10 == 0) :
                        $returnArray[$key]['names']  = $value['names'].' '.$noun;
                    else:
                        $returnArray[$key]['names']  = $value['names'].' '.$place;
                    endif;
                else :
                    $returnArray[$key]['names']  = $value['names'].' '.$adjective;
                endif;   
           }

           return $returnArray;
        // echo "<pre>";
        // print_r($returnArray);
        // exit;

        }
}






?>