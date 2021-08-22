<?php

class GetFemaleModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $surname         = array_key_exists('surname', $post) ? $post['surname'] : false;
        $birthyear       = array_key_exists('birthyear', $post) ? $post['birthyear'] :  false;
        $beginwith       = array_key_exists('beginwith', $post) ? $post['beginwith'] : false;
        $religion        = array_key_exists('religion', $post) ? $post['religion'] : null;
        $country         = array_key_exists('country', $post) ? $post['country'] : false;
        
        $array          = array(
                            'country' => $country,
                            'religion' => $religion
        );

        $whereArray     = array_filter($array);
        $and            =  "and";
        $c              =  ($country) ? "country ="."'".$country." ' ".$and : false;
        $r              =  ($religion) ? "religion="."'".$religion." ' ".$and : false;

        $wArray         = array($c,$r);
        $wwArray        = array_filter($wArray);

        $wString = implode(" ", $wwArray);

        if($beginwith) : 
                $sql      = "SELECT name FROM `femaleNames` WHERE $wString  name LIKE '$beginwith%' limit $limit ";
                $sql2     = $this->db->query($sql);
                $result   = $sql2->result_array();
               
        else :
                $querey  = $this->db->where($whereArray)
                                        ->order_by('rand()')
                                        ->limit($limit)
                                        ->get('femaleNames');
                $result  = $querey->result_array();
        endif;  
        
 

       if(count($result))
       {
        return self::formatData($result, $surname);
       }
       else 
       {
        if($beginwith):
                $sql  = "SELECT name FROM `femaleNames` WHERE name LIKE '$beginwith%' limit $limit ";
                $sqlQ = $this->db->query($sql);
                $result = $sqlQ->result_array();

        else:
                $query      =   $this->db->order_by('rand()')
                                        ->limit($limit)
                                        ->get('femaleNames');
                $result     =   $query->result_array(); 
        endif;
        

        return self::addFirstLetter($result, $beginwith, $surname);
                        
        }  
       
        }

        /**
         * 
         * function for add begin with name
         */

         public function addFirstLetter($data, $beginwith, $surname)
         {
             $array   = array();
             foreach ($data as $key => $value) {
                     # code...

                     $array[$key]['name']  = $value['name'];
             }

             return self::formatData($array, $surname);

         }


        /**
         * function for format data
         * 
         */
        public function formatData($data, $surname)
        {
                $returnArray = array();
                foreach ($data as $key => $value) {
                        # code...
                        $returnArray[$key]['name']  = $value['name'].' '.$surname;
                }

                return $returnArray;

        }
	
}








?>