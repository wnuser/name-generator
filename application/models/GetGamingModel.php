<?php

class GetGamingModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $firstname       = array_key_exists('firstname', $post) ? $post['firstname'] : false;
        $adjective       = array_key_exists('adjective', $post) ? $post['adjective'] :  false;
        $country         = array_key_exists('country', $post) ? $post['country'] : false;
        $adjective_1     = array_key_exists('adjective_1', $post) ? $post['adjective_1'] : false;
        $adjective_2     = array_key_exists('adjective_2', $post) ? $post['adjective_2'] : false;
        $bodypart        = array_key_exists('bodypart', $post) ? $post['bodypart'] : false;
        $bodypart_1      = array_key_exists('bodypart_1', $post) ? $post['bodypart_1'] : false;
        $animal          = array_key_exists('animal', $post) ? $post['animal'] : false;

        $superArray     =  array();
        $staticArray    =  array(
                                ($firstname) ?
                                array(
                                    'name' => substr($firstname, 0, -1)."ex"
                                ) : false,

                                ($bodypart) ?
                                array(
                                    'name' => "IHas".$bodypart
                                ) : false,

                                ($firstname && $adjective && $bodypart_1) ?
                                array(
                                    'name'  => $firstname.' '.$adjective.' '.$bodypart_1
                                ) : false,

                                ($firstname && $country) ?
                                array(
                                    'name' => $firstname.' '.$country
                                ) : false,

                                ($animal && $adjective) ?
                                array(
                                    'name' => "Uber".' '.$adjective.' '.$animal
                                ) : false,

                                ($animal) ?
                                array(
                                    'name' => "Disguised".' '.$animal
                                ) : false,

                                ($adjective && $bodypart_1) ?
                                array(
                                    'name' => $adjective.$bodypart_1."OMG"
                                ) : false,

                                ($adjective_1 && $bodypart_1) ?
                                array(
                                    'name' => $adjective_1.$bodypart_1."LOL"
                                ) : false,

                                ($adjective_2 && $bodypart_1) ?
                                array(
                                    'name' => $adjective_2.$bodypart_1."OMG"
                                ) : false,

                                ($adjective && $bodypart) ?
                                array(
                                    'name' => $adjective.$bodypart."LOL"
                                ) : false,

                                ($adjective_1 && $bodypart) ?
                                array(
                                    'name' => $adjective_1.$bodypart."OMG"
                                ) : false,

                                ($adjective_2 && $bodypart) ?
                                array(
                                    'name' => $adjective_2.$bodypart."LMAO"
                                ) : false,

                                ($adjective) ?
                                array(
                                    'name' => "lam".$adjective
                                ) : false,

                                ($adjective_1) ?
                                array(
                                    'name' => "lam".$adjective_1
                                ) : false,

                                ($adjective_2) ?
                                array(
                                    'name' => "lam".$adjective_2
                                ) : false,

                                ($firstname &&  $adjective_2 && $animal) ?
                                array(
                                    'name' => $firstname.' '.$adjective_2.' '.$animal
                                ) : false,

                                ($firstname) ?
                                array(
                                    'name' => "MindOf".$firstname
                                ) : false,

                                ($animal) ?
                                array(
                                    'name' => "Gamer".$animal
                                ) : false,

                                ($adjective) ?
                                array(
                                    'name' => "The".' '.$adjective.' '."Gamer"
                                ) : false,

                                ($adjective_1) ?
                                array(
                                    'name' => "The".' '.$adjective_1.' '."Gamer"
                                ) : false,

                                ($adjective_2) ?
                                array(
                                    'name' => "The".' '.$adjective_2.' '."Gamer"
                                ) : false,

                                ($adjective) ?
                                array(
                                    'name' => "Dr".$adjective
                                ) : false,

                                ($firstname && $bodypart_1) ?
                                array(
                                    'name' => $firstname.$bodypart_1."popper"
                                ) : false,

                                ($adjective && $animal) ?
                                array(
                                    'name' => "Big".$adjective.$animal
                                ) : false,

                                ($animal) ?
                                array(
                                    'name' => "ItIsYe".$animal
                                ) : false,

                                ($animal) ?
                                array(
                                    'name' => $animal.' '."Boy"
                                ) : false,

                                ($animal) ?
                                array(
                                    'name' => $animal.' '."Girl"
                                ) : false,

                                ($animal) ?
                                array(
                                    'name' => $animal.' '."Person"
                                ) : false,

                                ($adjective) ?
                                array(
                                    'name' => "Captain".' '.$adjective
                                ) : false,

                                ($bodypart_1) ?
                                array(
                                    'name' => "IHas".$bodypart_1
                                ) : false,

                                ($animal) ?
                                array(
                                    'name' => "Total".' '.$animal
                                ) : false,

                                ($country) ?
                                array(
                                    'name' => "The Strong ".$country.' Dude'
                                ) : false,

                                ($animal) ?
                                array(
                                    'name' => "The Gaming ".$animal
                                ) : false,

                                ($firstname) ?
                                array(
                                    'name' => "Gaming with ".$firstname
                                ) : false,

                                ($animal) ?
                                array(
                                    'name' => "Mr Game ".$animal
                                ) : false,

                                ($animal) ?
                                array(
                                    'name' => "Ms Game ".$animal
                                ) : false,

        );

        // return  $superArray[0]  = $staticArray;
        return array_filter($staticArray);


    
       
	}
	
}








?>