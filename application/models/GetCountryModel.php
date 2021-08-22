<?php

class GetCountryModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $kindofname      = array_key_exists('kindofname', $post) ? $post['kindofname'] : false;
        $beginwith       = array_key_exists('beginwith', $post) ? $post['beginwith'] :  false;
        $endwith         = array_key_exists('endwith', $post) ? $post['endwith'] : false;

        $and            =  "and";
        $b              =  ($beginwith) ? "and name LIKE "."'".$beginwith."%'".(($endwith) ? $and : false) : false;
        $e              =  ($endwith) ? (($beginwith) ? '' : "and")." name LIKE "."'%".$endwith."'" : false;

        $wArray         = array($b,$e);
        $wwArray        = array_filter($wArray);

        $wString        = implode(" ", $wwArray);

        $sql        =   "SELECT name FROM `countryNames` WHERE kindofname ='$kindofname'   $wString limit $limit ";
        $sqlQ       =    $this->db->query($sql);
        $result     =    $sqlQ->result_array();

        return $result;

       
	}
	
}








?>