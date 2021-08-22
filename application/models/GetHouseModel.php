<?php

class GetHouseModel extends CI_Model
{
	public function index($post)
	{
        $location      = array_key_exists('location', $post) ? $post['location'] : false;
        $size          = array_key_exists('size', $post) ? $post['size'] :  false;
        $color         = array_key_exists('color', $post) ? $post['color'] : false;
        $street        = array_key_exists('street', $post) ? $post['street'] : false;
        $view_1        = array_key_exists('view_1', $post) ? $post['view_1'] : false;
        $view_2        = array_key_exists('view_2', $post) ? $post['view_2'] : false;
        $weather_adj   = array_key_exists('weather_adj', $post)  ? $post['weather_adj'] : false;
        $previously    = array_key_exists('previously', $post) ? $post['previously'] : false;

        $superArray    = array();
        $staticArray   = array(
                            ($view_1) ? array(
                                'name'  => $view_1.' '."View"
                            ) : false,
                            ($previously) ? array(
                                'name'  => "The Old".$previously
                            ) : false,
                            ($street) ? array(
                                'name' => $street.' '."Lodge"
                            ) : false,
                            ($color) ? array(
                                'name'  => $color.' '."House"
                            ) : false,
                            ($view_2) ? array(
                                'name'  => $view_2."side"
                            ): false,
                            ($view_1) ? array(
                                'name' => $view_1.'ways'
                            ) : false,
                            ($location) ? array(
                                'name' => $location.' '.$previously
                            ) : false,
                            ($weather_adj)  ? array(
                                'name'  => $weather_adj.' '."House"
                            ) : false,
                            ($view_2) ? array(
                                'name'  => $view_2.' '."View"
                            ) : false,
                            ($view_1) ? array(
                                'name' => $view_1."side"
                            ) : false

        );

        $superArray['0']  = $staticArray;
        $query      =    $this->db->order_by('rand()')
                                                ->limit(20)
                                                ->get('houseNames');
        $superArray['1'] =  $result     =   $query->result_array(); 

        return $superArray;
      
     
       
	}
	
}








?>