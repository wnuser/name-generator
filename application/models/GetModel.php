<?php

class GetModel extends CI_Model
{
    //getting adjectives
    public function getAdjective()
    {
        $sql = $this->db->get('adjectives');
        return $sql->result_array();
    }
    
    // getting Quick names 
	public function getQuicknames($post)
	{

        $limit    = array_key_exists('num', $post)    ? $post['num'] :false;
        $gender   = array_key_exists('gender', $post) ? $post['gender']  : false ;
        $country  = array_key_exists('country', $post) ? $post['country'] : false ;

        // echo "<pre>";
        // print_r($post);
        // exit;

        if($gender && $country == '') {
            $query    = $this->db->where('gender',$gender)
                                ->order_by('rand()')
                                ->limit($limit)
                                ->get('quickName');
            $result   = $query->result_array();
            // echo "1";
            // echo "<pre>";
            // print_r($result);

        } else if($gender && $country) {
            $query    = $this->db->where('gender',$gender)
                                 ->where('country', $country)
                                ->order_by('rand()')
                                ->limit($limit)
                                ->get('quickName');
            $result   = $query->result_array();
            // echo "2";
            // echo "<pre>";
            // print_r($result);

        } else if($country && $gender == '') {
            $query    = $this->db->where('country', $country)
                                ->order_by('rand()')
                                ->limit($limit)
                                ->get('quickName');
            $result   = $query->result_array();

            // echo "3";
            // echo "<pre>";
            // print_r($result);

        }else if($country ==  '' && $gender == ''){
            $query    = $this->db->order_by('rand()')
                                ->limit($limit)
                                ->get('quickName');
            $result   = $query->result_array();

            // echo "4";
            // echo "<pre>";
            // print_r($result);

        } else {
        }

        if(count($result)){
            return $result;
                } else{
                        $query      =    $this->db->order_by('rand()')
                                                ->limit($limit)
                                                ->get('quickName');
                    return   $result     =   $query->result_array(); 
                }  
    
    }
    
    public function get_all_admin()
	{
		
		 $q =  $this->db->select()
                      ->from('admin')
                      ->get();
                    return $q->row_array();
    }
    
    public function get_all_review()
	{
		
		 $q =  $this->db->select()
                      ->from('review')
                      ->get();
                    return $q->result_array();
	}
	
}








?>