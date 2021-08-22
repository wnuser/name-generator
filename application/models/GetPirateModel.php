<?php

class GetPirateModel extends CI_Model
{
	public function index($post)
	{

        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $firstname       = array_key_exists('firstname',$post) ? $post['firstname'] : false;
        $color           = array_key_exists('color', $post) ? $post['color'] :  false;
        $adjective       = array_key_exists('adjective',$post) ? $post['adjective'] : false;
        $place           = array_key_exists('place', $post) ? $post['place'] : false;

        $array        =   array(
                          'adjective'    =>   $adjective
        );

        $whereArray   =  array_filter($array);




        $query      =   $this->db->where($whereArray)
                                        ->order_by('rand()')
                                        ->limit($limit)
                                        ->get('pirateNames');
        $result     =   $query->result_array(); 

        if($result):
                return self::formatData($result, $firstname, $color);
        else:
                $query      =   $this->db->order_by('rand()')
                                        ->limit($limit)
                                        ->get('pirateNames');
                $result     =   $query->result_array();
                return self::formatData($result, $firstname, $color);
        endif;



        }
        
        /**
         * function for format Data
         */
        public function formatData($data , $firstname, $color)
        {
                $returnArray  = array();
                foreach ($data as $key => $value) {
                        # code...
                        if($key%5 == 0) :
                                $returnArray[$key]['name']   = $firstname.' '.$value['name'];
                        else:
                                if($key%9 == 0) :
                                        $returnArray[$key]['name']   = $value['name'].' '.$color;
                                else :
                                        $returnArray[$key]['name']   = $value['name'];

                                endif;
                        endif;
                }

                return $returnArray;
        }
	
}








?>