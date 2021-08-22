<?php

class GetCityModel extends CI_Model
{
	public function index($post)
	{
        $limit            = array_key_exists('num', $post)    ? $post['num'] :false;
        $likethem         = array_key_exists('likethem', $post) ? $post['likethem'] : false;
        $region           = array_key_exists('region', $post) ? $post['region'] :  false;
        $beginwith        = array_key_exists('beginwith', $post) ? $post['beginwith'] : false;
        $endwith          = array_key_exists('endwith', $post) ? $post['endwith'] : false;

       
        $array     = array(
                       'kindof' => $likethem,
                       'region' => $region,
        );
        $whereArray  = array_filter($array);

        $and            =  "and";
        $l              =  ($likethem) ? "kindof ="."'".$likethem." ' ".$and : false;
        $r              =  ($region) ? "region="."'".$region." ' ".$and : false;

        $wArray         = array($l,$r);
        $wwArray        = array_filter($wArray);
        $wString        = implode(" ", $wwArray);

        if($beginwith):
            $sql      = "SELECT name FROM `Citynames` WHERE $wString  name LIKE '$beginwith%' limit $limit ";
            $sql2     = $this->db->query($sql);
            $result   = $sql2->result_array();
          
        else:
            $query      =   $this->db->order_by('rand()')
                                        ->where('kindof', $likethem)
                                        ->where('region', $region)
                                        ->limit($limit)
                                        ->get('Citynames');
            $result     =   $query->result_array();                  
        endif;
       
       if(count($result))
       {
        return  self::formatData($result, $endwith);

       }else {

        if($beginwith):
            $sql    = "SELECT name FROM `Citynames` WHERE name LIKE '$beginwith%' limit $limit ";
            $sqlQ   = $this->db->query($sql);
            $result = $sqlQ->result_array();

        else:
                $query      =   $this->db->order_by('rand()')
                                        ->limit($limit)
                                        ->get('Citynames');
                $result     =   $query->result_array(); 
        endif;  
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

                $array[$key]['name']  = trim($value['name']);
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