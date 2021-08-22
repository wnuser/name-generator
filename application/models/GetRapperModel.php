<?php

class GetRapperModel extends CI_Model
{
	public function index($post)
	{
        // $limit             = array_key_exists('num', $post)    ? $post['num'] :false;
        $ftvcharchacter    = array_key_exists('ftvcharchacter', $post) ? $post['ftvcharchacter'] : false;
        $firstname         = array_key_exists('firstname', $post) ? $post['firstname'] :  false;
        $adjective         = array_key_exists('adjective', $post) ? $post['adjective'] : false;
        $lastname          = array_key_exists('lastname', $post) ? $post['lastname'] : false;
        $criminal          = array_key_exists('criminal', $post) ? $post['criminal'] : false;
        $pleasant          = array_key_exists('pleasant', $post) ? $post['pleasant']  : false;
        $name_of_pet       = array_key_exists('name_of_pet', $post) ? $post['name_of_pet'] : false;


        $superArray       = array();
        $charArray        = explode(" ", $ftvcharchacter);
        $firstNameTVstar  = $charArray['0'];
        $lastNameRVstar   = (sizeof($charArray) > 1) ? $charArray['1'] : false;

        $criminalArray    = explode(" ", $criminal);
        $fistNameCriminal = $criminalArray['0'];
        $lastNameCriminal = (sizeof($criminalArray) > 1) ? $criminalArray['1'] : false;



        
        $StaticArray         = array(
                                  array(
                                          'name'  => substr($firstNameTVstar, 0, 1).'.'.substr($lastNameRVstar, 0, 1).' '.$lastNameCriminal
                                  ),
                                  array(
                                          'name'  => "Big".' '.$name_of_pet
                                  ),
                                  array(
                                          'name'  => $name_of_pet.' '.$lastNameCriminal
                                  ),
                                  array(
                                          'name'  => $firstNameTVstar.' '.$firstNameTVstar.' '."Rao"
                                  ),
                                  array(
                                          'name'  => "Da Real".' '.$firstname
                                  ),
                                  array(
                                          'name'  => "Coolo".$lastname
                                  ),
                                  array(
                                          'name'  => $pleasant.' '.$lastNameCriminal
                                  ),
                                  array(
                                          'name'  => $adjective.' '.$firstname
                                  ),
                                  array(
                                          'name'  => $firstname."donna"
                                  ),
                                  array(
                                          'name'  => $pleasant.' '.$fistNameCriminal
                                  ),
                                  array(
                                          'name' => $firstname.' '.$firstname.' '.substr($lastNameRVstar, 0, 1) 
                                  ),
                                  array(
                                          'name' => $firstname.'-'.substr($lastname, 0, 1)
                                  ),
                                  array(
                                          'name' => "Rapper".' '.$firstNameTVstar
                                  ),
                                  array(
                                          'name' => $name_of_pet.' '.$lastNameCriminal
                                  ),
                                  array(
                                          'name' => "The ".$ftvcharchacter." Effect"
                                ),
                                array(
                                        'name' => "I'm still ".$firstname." From the Street"
                                ),
                                array(
                                        'name' => "The Story of ".$ftvcharchacter
                                ),
                                array(
                                        'name' => "Two, Three, Four ".$adjective
                                ),
                                array(
                                        'name' => $name_of_pet.' Better have My '.$adjective
                                ),
                                array(
                                        'name' => "They Were Good ".$adjective
                                ),
                                array(
                                        'name' => $ftvcharchacter.", If You're Ready?"
                                )
                                  

        );

        $superArray[0]    = $StaticArray;

        $query      =   $this->db->order_by('rand()')
                                    ->limit(30)
                                    ->get('rapperNames');
        $result     =   $query->result_array();  

        $dbNames    =   array();
        foreach ($result as $key => $value) {

                if($key == 0):
                        $dbNames[$key]['name']  = substr($firstname, 0 ,1).' '.$value['name'];
                elseif($key == 2):
                        $dbNames[$key]['name']  = substr($firstname, 0 ,1).' '.$value['name'];
                elseif($key == 3):
                        $dbNames[$key]['name']  = $firstNameTVstar.' '.$value['name'];
                elseif($key == 5):
                        $dbNames[$key]['name']  = $value['name'].$lastNameCriminal;
                elseif($key == 6):
                        $dbNames[$key]['name']  = $value['name'].$name_of_pet;
                elseif($key == 8):
                        $dbNames[$key]['name']  = $value['name'].$firstNameTVstar;
                elseif($key == 9):
                        $dbNames[$key]['name']  = $value['name'].$lastNameRVstar;
                elseif($key == 10):
                        $dbNames[$key]['name']  = $value['name'].$lastname;   
                elseif($key > 11 && $key < 14):
                        $dbNames[$key]['name']  = $firstname.' '.$value['name'];
                elseif($key > 14 && $key < 16):
                        $dbNames[$key]['name']  = $adjective.' '.$value['name'];
                elseif($key > 21 && $key < 24):
                        $dbNames[$key]['name']  = $value['name'].$lastNameCriminal;                                         
                else:
                        $dbNames[$key]['name']  = $value['name'].' '.$adjective;
                endif;    
            

        }
        $superArray[1]  = $dbNames;

        return $superArray;

}
	
}








?>