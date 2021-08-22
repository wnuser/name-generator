<?php

class GetBlogModel extends CI_Model
{
	public function index($post)
	{
        $firstname         = array_key_exists('firstname', $post) ? $post['firstname'] : false;
        $lastname          = array_key_exists('lastname', $post) ? $post['lastname'] :  false;
        $adjective         = array_key_exists('adjective', $post) ? $post['adjective'] : false;
        $place             = array_key_exists('place', $post) ? $post['place'] : false;
        $verb_1            = array_key_exists('verb_1', $post) ? $post['verb_1'] : false;
        $verb_2            = array_key_exists('verb_2', $post) ? $post['verb_2'] : false;
        $verb_3            = array_key_exists('verb_3', $post) ? $post['verb_3'] : false;


        $superArray       = array();
        $staticArray      = array(
                               ($verb_1) ? 
                               array(
                                   'name'  => $verb_1.' '."Addict" 
                                ): false,

                               array('name'  => "overload"),

                               ($firstname) ?
                               array(
                                   'name'  => "The ".substr($firstname,0, 1)." Word"
                               ) : false,

                               ($verb_1) ?
                               array(
                                   'name' => "Confessions of a ".$verb_1." Freak"
                               ) : false,

                               ($firstname && $lastname) ?
                               array(
                                   'name' => $firstname.substr($lastname, 0, 1)."'s Secret Diary"
                               ) : false,

                               ($verb_2) ? 
                               array(
                                   'name' => "The Art of ".$verb_2
                               ) : false,

                               ($firstname && $lastname) ? 
                               array(
                                   'name' => $firstname.' '.$lastname."'s".' Not-So-Secret Diary'
                               ): false,

                               ($adjective && $firstname) ?
                               array(
                                   'name' => $adjective.' '.$firstname
                               ) : false,
                               
                               ($adjective) ? 
                               array(
                                   'name' => $adjective.' '."Blog"
                               ): false,

                               ($verb_1) ? 
                               array(
                                   'name' => "The Art of ".$verb_1
                               ): false,

                               ($firstname) ? 
                               array(
                                   'name' => $firstname."ble"
                               ) : false,


                               ($lastname) ? 
                               array(
                                   'name' => "The ".$lastname." Post"
                               ) : false,

                               ($place) ? 
                               array(
                                   'name' => "The ".$place." Times"
                               ) : false,


                               ($verb_3) ?
                               array(
                                   'name' => "Confessions of a ".$verb_3.' '." Freak"
                               ) : false,

                               ($firstname) ?
                               array(
                                   'name' => "The ".$firstname." Journal"
                               ) : false,

                               ($firstname && $lastname) ?
                               array(
                                   'name'  => "The ".$firstname.' '.$lastname.' Today'
                               ) : false,

                               ($verb_2) ?
                               array(
                                   'name' => "Confessions of a ".$verb_2." Freak"
                               ) : false,

                               ($firstname) ? 
                               array(
                                   'name' => "The Daily ".$firstname
                               ) : false,

                               ($lastname) ? 
                               array(
                                   'name' => "The ".substr($lastname, 0, 1)." Word"
                               ) : false,

                               ($lastname) ? 
                               array(
                                   'name'  => "The ".$lastname."'s Today"
                               ): false,



        );

        $superArray['0']    = $staticArray;
       
        $query      =   $this->db->order_by('rand()')
                                    ->limit(25)
                                    ->get('blogNames');
        $result     =   $query->result_array(); 
        $superArray['1'] = $result;

        return $superArray;
                    
   


       
	}
	
}








?>