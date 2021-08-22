<?php

class GetTeamModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $adjective       = array_key_exists('adjective', $post) ? $post['adjective'] : false;
        $color           = array_key_exists('color', $post) ? $post['color'] :  false;
        $place           = array_key_exists('place', $post) ? $post['place'] : false;
        $animal          = array_key_exists('animal', $post) ? $post['animal'] : false;
        $adjective_1     = array_key_exists('adjective_1', $post) ? $post['adjective_1'] : false;
        $adjective_2     = array_key_exists('adjective_2', $post) ? $post['adjective_2'] : false;
        $animal_1        = array_key_exists('animal_1', $post) ? $post['animal_1'] : false;
        $animal_2        = array_key_exists('animal_2', $post) ? $post['animal_2'] : false;
        $group           = array_key_exists('group', $post) ? $post['group'] : false;

 
        $superArray      = array();
        $staticArray     = array(

                           ($place && $animal) ?
                           array(
                               'name' => $place.' '.$animal
                           ) : false,

                           ($place && $animal_1) ?
                           array(
                               'name' => $place.' '.$animal_1 
                           ) : false,

                           ($place && $animal_2) ?
                           array(
                               'name' => $place.' '.$animal_2
                           ) : false,


                        //    ($place) ?
                        //    array(
                        //        'name' => $place
                        //    ) : false,

                           ($place && $group) ?
                           array(
                               'name' => $place.' '.$group
                           ) : false,

                           ($place && $color) ?
                           array(
                               'name'  => $place.' '.$color.' '."Jackets"
                           ) : false,

                           ($place && $color) ?
                           array(
                               'name' => $place.' '.$color.' '."Legs"
                           ) : false,

                           ($place && $color) ?
                           array(
                               'name' => $place.' '.$color
                           ) : false,

                           ($place)  ? 
                           array(
                               'name' => $place.' '."United"
                           ) : false,

                           ($color && $animal_1) ?
                           array(
                               'name' => $color.' '.$animal_1
                           ) : false,

                           ($color && $animal) ?
                           array(
                               'name' => $color.' '.$animal
                           ) : false,

                           ($color && $group) ?
                           array(
                               'name' => $color.' '.$group
                           ) : false,

                           ($color && $animal_2) ?
                           array(
                               'name' => $color.' '.$animal_2
                           ) : false,

                        //    ($adjective) ?
                        //    array(
                        //        'name' => $adjective
                        //    ) : false,

                           ($adjective && $group) ?
                           array(
                               'name' => $adjective.' '.$group
                           ) : false,

                        //    ($animal)? 
                        //    array(
                        //        'name' => $animal
                        //    ) : false,

                        //    ($animal_2) ?
                        //    array(
                        //        'name' => $animal_2
                        //    ) : false,

                        //    ($animal_1) ?
                        //    array(
                        //        'name' => $animal_1
                        //    ) : $animal_1,

                        //    ($group) ?
                        //    array(
                        //        'name' => $group
                        //    ) : false,

                           ($adjective && $animal) ?
                           array(
                               'name' => $adjective.' '.$animal
                           ) :  false,

                           ($adjective && $animal_1) ?
                           array(
                               'name' => $adjective.' '.$animal_1
                           ) :  false,

                           ($adjective && $animal_2) ?
                           array(
                               'name' => $adjective.' '.$animal_2
                           ) :  false,

                           ($adjective && $group) ?
                           array(
                               'name' => $adjective.' '.$group
                           ) :  false,

                           ($adjective_1 && $animal) ?
                           array(
                               'name' => $adjective_1.' '.$animal
                           ) : false,

                           ($adjective_1 && $animal_1) ?
                           array(
                               'name' => $adjective_1.' '.$animal_1
                           ) : false,

                           ($adjective_1 && $animal_2) ?
                           array(
                               'name' => $adjective_1.' '.$animal_2
                           ) : false,

                           ($adjective_1 && $group) ?
                           array(
                               'name' => $adjective_1.' '.$group
                           ) : false,

                           ($adjective_2 && $animal) ?
                           array(
                               'name' => $adjective_1.' '.$animal
                           ) : false,

                           ($adjective_2 && $animal_1) ?
                           array(
                               'name' => $adjective_1.' '.$animal_1
                           ) : false,

                           ($adjective_2 && $animal_2) ?
                           array(
                               'name' => $adjective_1.' '.$animal_2
                           ) : false,

                           ($adjective_2 && $group) ?
                           array(
                               'name' => $adjective_1.' '.$group
                           ) : false,

                           
        );

        return array_filter($staticArray);

      
        //  $query      =    $this->db->order_by('rand()')
        //                                             ->limit($limit)
        //                                             ->get('teamNames');
        //                 return   $result     =   $query->result_array(); 
        //             }  

       
	}
	
}








?>