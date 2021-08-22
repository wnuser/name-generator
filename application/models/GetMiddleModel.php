<?php

class GetMiddleModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $surname         = array_key_exists('surname', $post) ? $post['surname'] : false;
        $birthyear       = array_key_exists('birthyear', $post) ? $post['birthyear'] :  false;
        $gender          = array_key_exists('gender', $post) ? $post['gender'] : false;
        $beginwith       = array_key_exists('beginwith', $post) ? $post['beginwith'] : false;
        $country         = array_key_exists('country',$post) ? $post['country'] : false;
        $firstname       = array_key_exists('firstname', $post) ? $post['firstname'] : false;

       
        $array     =    array(
                                'gender'     => $gender,
                                'country'    => $country
                    );

        $whereArray = array_filter($array);

        $and            =  "and";
        $g              =  ($gender)   ? "gender ="."'".$gender." ' ".$and : false;
        $c              =  ($country)  ? "country ="."'".$country." ' ".$and : false;

        $wArray         = array($g, $c);
        $wwArray        = array_filter($wArray);

        $wString = implode(" ", $wwArray);

        if($beginwith) :
            $sql      = "SELECT name FROM `middlenames` WHERE $wString  name LIKE '$beginwith%' limit $limit ";
            $sql2     = $this->db->query($sql);
            $result   = $sql2->result_array();
        else:
             
            $query      =   $this->db->where($whereArray)
                                        ->order_by('rand()')
                                        ->limit($limit)
                                        ->get('middlenames');
            $result     =   $query->result_array();  
        endif;
  

        if($result):

            return self::formatData($firstname, $result, $surname);
        else:
            if($beginwith) :
                    $sql      = "SELECT name FROM `middlenames` WHERE   name LIKE '$beginwith%' limit $limit ";
                    $sql2     = $this->db->query($sql);
                    $result   = $sql2->result_array();
            else:

            $query      =   $this->db->order_by('rand()')
                                        ->limit($limit)
                                        ->get('middlenames');
            $result     =   $query->result_array(); 
            endif;
 
            return self::formatData($firstname, $result, $surname);
        endif;

    }
    
    public function formatData($firstname, $result, $surname)
    {
        $returnArray   =  array();
        foreach ($result as $key => $value) {
            # code...
            $returnArray[$key]['name']   = $firstname.' '.$value['name'].' '.$surname;
        }

        return $returnArray;
    }
	
}








?>