<?php

class GetFirstModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $surname         = array_key_exists('surname', $post) ? $post['surname'] : false;
        $birthyear       = array_key_exists('birthyear', $post) ? $post['birthyear'] :  false;
        $gender          = array_key_exists('gender', $post) ? $post['gender'] : false;
        $religion        = array_key_exists('religion', $post) ? $post['religion'] : false;
        $country         = array_key_exists('country', $post) ? $post['country'] : false;
        $beginwith       = array_key_exists('beginwith', $post) ? $post['beginwith'] : false;


        $array     =    array(
                                'gender'     => $gender,
                                'religion'   => $religion,
                                'country'    => $country
                );

        $whereArray = array_filter($array);


        $and            =  "and";
        $g              =  ($gender)   ? "gender ="."'".$gender." ' ".$and : false;
        $c              =  ($country)  ? "country ="."'".$country." ' ".$and : false;
        $r              =  ($religion) ? "religion="."'".$religion." ' ".$and : false;

        $wArray         = array($g, $c,$r);
        $wwArray        = array_filter($wArray);

        $wString = implode(" ", $wwArray);

        if($beginwith):
                $sql      = "SELECT name FROM `firstNames` WHERE $wString  name LIKE '$beginwith%' limit $limit ";
                $sql2     = $this->db->query($sql);
                $result   = $sql2->result_array();

        else:
                $query      = $this->db->where($whereArray)
                                        ->order_by('rand()')
                                        ->limit($limit)
                                        ->get('firstNames');
                $result     =  $query->result_array();

               
        endif;


        // block of code if not getting data from above query 
        if($result) : 
                return    self::formatData($result, $surname);
        else :
                if($beginwith) :
                        $sql      = "SELECT name FROM `firstNames` WHERE   name LIKE '$beginwith%' limit $limit ";
                        $sql2     = $this->db->query($sql);
                        $result   = $sql2->result_array();

                else:
                        $query      = $this->db->order_by('rand()')
                                                ->limit($limit)
                                                ->get('firstNames');
                        $result     =  $query->result_array();
                endif;
                
                return    self::formatData($result, $surname);
        endif;

        }

        public function formatData($data, $surname)
        {
              $returnArray   = array();
              foreach ($data as $key => $value) {
                      # code...
                      $returnArray[$key]['name']   = $value['name'].' '.$surname;
              }

              return $returnArray;
        }


	
}








?>