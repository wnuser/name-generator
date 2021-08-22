<?php

class GetLastModel extends CI_Model
{
	public function index($post)
	{
        $limit             = array_key_exists('num', $post)    ? $post['num'] :false;
        $firstname         = array_key_exists('firstname', $post) ? $post['firstname'] : false;
        $birthyear         = array_key_exists('birthyear', $post) ? $post['birthyear'] :  false;
        $religion          = array_key_exists('religion', $post) ? $post['religion'] : false;
        $country           = array_key_exists('country', $post) ? $post['country'] : false;
        $typeofcharcter    = array_key_exists('typeofcharcter',$post) ? $post['typeofcharcter'] : false;
        $beginwith         = array_key_exists('beginwith', $post) ? $post['beginwith'] : false;


        $array          =  array(
                                  'country'  => $country,
                                  'religion' => $religion,
        );
        $whereArray     = array_filter($array);

        $and            = "and";
        $c              =  ($country) ? "country ="."'".$country." ' ".$and : false;
        $r              =  ($religion) ? "religion="."'".$religion." ' ".$and : false;

        $wArray         = array($c,$r);
        $wwArray        = array_filter($wArray);
        $wString        = implode(" ", $wwArray);

        if($beginwith) : 
                $sql      = "SELECT name FROM `lastNames` WHERE $wString  name LIKE '$beginwith%' limit $limit ";
                $sql2     = $this->db->query($sql);
                $result   = $sql2->result_array();               
        else:
                $sql     = $this->db->where($whereArray)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('lastNames');
                $result   =  $sql->result_array();             
        endif;  

     
        if($result):
                // return self::formatData($result, $firstname);
        else:
                if($beginwith):
                        $sql  = "SELECT name FROM `lastNames` WHERE name LIKE '$beginwith%' limit $limit ";
                        $sqlQ = $this->db->query($sql);
                        $result = $sqlQ->result_array();
        
                else:
                        $query      =   $this->db->order_by('rand()')
                                                ->limit($limit)
                                                ->get('lastNames');
                        $result     =   $query->result_array(); 
                endif;   
                // return self::formatData($result, $firstname);
                
        endif;

    

        
        }



        
        /**
         * function for format data
         */
        public function formatData($data, $firstname)
        {
                $returnArray  = array();
                foreach ($data as $key => $value) {
                       $returnArray[$key]['name']  = $firstname.' '.$value['name'];
                }
                return $returnArray;
        }
	
}








?>