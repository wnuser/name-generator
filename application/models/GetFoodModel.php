<?php

class GetFoodModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $typeoffood      = array_key_exists('typeoffood', $post) ? $post['typeoffood'] : false;
        $lifestyle       = array_key_exists('lifestyle', $post) ? $post['lifestyle'] : false;
        $country         = array_key_exists('country', $post) ? $post['country'] : false;
 

        $array      =   array(
                              'typeoffood'  =>  $typeoffood,
                              'country'     =>  $country,
                              'lifestyle'   =>  $lifestyle

        );

        $whereArray  =  array_filter($array);
        $query      =   $this->db->where($whereArray)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('foodNames');
        $result     =   $query->result_array();  

        if($result) :
             return $result;
        else:
                $query      =   $this->db->where($whereArray)
                                        ->order_by('rand()')
                                        ->limit($limit)
                                        ->get('foodNames');
                return $result     =   $query->result_array();  
        endif;


	}
	
}








?>