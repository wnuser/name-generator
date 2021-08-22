<?php

class GetTitleModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $adjective       = array_key_exists('adjective', $post) ? $post['adjective'] : false;
        $planet          = array_key_exists('planet', $post) ? $post['planet'] :  false;
        $plural          = array_key_exists('plural', $post) ? $post['plural'] : false;
        $number          = array_key_exists('number', $post) ? $post['number'] : false;
        $power_word      = array_key_exists('power_word', $post) ? $post['power_word'] : false;
        $industry        = array_key_exists('industry', $post) ? $post['industry'] : false;
        $clothing        = array_key_exists('clothing', $post) ? $post['clothing'] : false;
        $colour          = array_key_exists('colour', $post) ? $post['colour'] : false;
        $people_group    = array_key_exists('people_group', $post) ? $post['people_group'] : false;
        $rock_star       = array_key_exists('rock_star', $post) ? $post['rock_star'] : false;
        $tv_character    = array_key_exists('tv_character', $post) ? $post['tv_character'] : false;
        $bodypart_1      = array_key_exists('bodypart_1', $post) ? $post['bodypart_1'] : false;
        $bodypart        = array_key_exists('bodypart', $post) ? $post['bodypart'] : false;
        $adjective_1     = array_key_exists('adjective_1', $post) ? $post['adjective_1'] : false;
        $country         = array_key_exists('country', $post) ? $post['country'] : false;
        $animals         = array_key_exists('animals', $post) ? $post['animals'] : false;
        $imaginary       = array_key_exists('imaginary', $post) ? $post['imaginary'] : false; 
        $adjective_2     = array_key_exists('adjective_2', $post) ? $post['adjective_2'] : false;
       

        $staticArray     = array(
                     ($rock_star) ? 
                     array(
                         'name' => "7 Pictures of ".$rock_star." That We'd Rather Forget"
                     ) : false,

                     ($bodypart) ?
                     array(
                         'name' => "How to Increase Your Income Using Just Your ".$bodypart."."
                     ) : false,

                     ($animals) ?
                     array(
                         'name' => "10 Awesome Ways to Photograph ".$animals
                     ) : false,

                     ($animals) ?
                     array(
                         'name' => "21 Myths About ".$animals." Debunked"
                     ) : false,

                     ($imaginary) ?
                     array(
                         'name' => $imaginary.": Fact versus Fiction"
                     ) : false,

                     ($animals) ?
                     array(
                         'name' => "Can ".$animals." Dance : An exploration of Memes"
                     ) : false,

                     ($animals) ?
                     array(
                         'name' => $animals." Are the New Black"
                     ) : false,

                     ($clothing) ?
                     array(
                         'name' => "20 ".$clothing." Reviews in Tweet Form"
                     ) : false,

                     ($imaginary) ?
                     array(
                         'name' => "From Zero to ".$imaginary." - Makeover Tips"
                     ) : false,

                     ($adjective && $clothing) ?
                     array(
                         'name' => "How to Make Your Own ".$adjective.' '.$clothing." for less than $5"
                     ) : false,

                     ($tv_character) ?
                     array(
                         'name' => $tv_character."'s 10 Best Moments"
                     ) : false,

                     ($adjective) ?
                     array(
                         'name' => "How to Attract More ".$adjective." Subscribers"
                     ) : false,

                     array(
                         'name' => "A Day in the Life of Anonymous"
                     ),

                     ($imaginary) ?
                     array(
                         'name' => "Unboxing My New ".$imaginary." Poo"
                     ) : false,

                     ($rock_star) ?
                     array(
                         'name' => "The Week's Top Stories About ".$rock_star
                     ) : false,

                     ($imaginary) ?
                     array(
                         'name' => "10 Things You've Always Wanted to Know About the Famous".$imaginary
                     ) : false,

                     ($people_group) ?
                     array(
                         'name' => "7 Unmissable YouTube Channels About ".$people_group   
                     ) : false,

                     ($tv_character && $people_group) ?
                     array(
                         'name' => "10 Things govinda Can Teach Us About ".$people_group
                     ) : false,

                     ($animals) ?
                     array(
                         'name' => "Mistakes That ".$animals." Make and How to Avoid Them"
                     ) : false,

                     ($planet) ?
                     array(
                         'name' => "Like ".$planet." on Earth"
                     ) : false,

                     ($adjective && $people_group) ?
                     array(
                         'name' => "Before ".$adjective.' '.$people_group
                     ) : false,

                     ($people_group) ?
                     array(
                         'name' => "Down With the ".$people_group
                     ) : false, 

                     ($adjective && $adjective_1 && $adjective_2) ?
                     array(
                         'name' => $adjective.' '.$adjective_1.' '.$adjective_2
                     ) : false,

                     ($imaginary) ?
                     array(
                         'name' => $imaginary.' '."Memories"
                     ) : false,

                     ($people_group) ?
                     array(
                         'name' => $people_group." Dreams"
                     ) : false,

                     ($people_group) ?
                     array(
                         'name' => "Mind Over ".$people_group
                     ) : false,

                     ($animals) ?
                     array(
                         'name' => "Born to Chase ".$animals
                     ) : false,

                     ($people_group) ?
                     array(
                         'name' => "Tunnel of ".$people_group
                     ) : false, 

                     ($adjective_2 && $animals) ?
                     array(
                         'name' => "Bridge Over ".$adjective_2." ".$animals
                     ) : false,

                     ($adjective) ?
                     array(
                         'name' => "Truly, Madly, ".$adjective
                     ) : false , 

                     ($rock_star) ?
                     array(
                         'name' => $rock_star." Dreams"
                     ) : false,

                     ($people_group && $country) ?
                     array(
                         'name' => "Great ".$people_group.' of'.$country
                     ) : false,

                     ($adjective_1) ?
                     array(
                         'name' => "If You're Feeling ".$adjective_1
                     ) : false,

                     ($imaginary && $people_group) ?
                     array(
                         'name' => "Captain ".$imaginary." and the ".$people_group
                     ) : false,

                     ($adjective && $animals) ?
                     array(
                         'name' => $adjective.' '.$animals." cause sand storms. Discuss."
                     ) : false,

                     ($country && $animals) ?
                     array(
                         'name'=> "What role do ".$country." ".$animals." foxes play in the food chain? "
                     ) : false,


        );



        return array_filter($staticArray);
        // echo "<pre>";
        // print_r($post);
        // exit;
        //     $query      =   $this->db->where('adjective', $adjective)
        //                             ->where('planet', $planet)
        //                             ->where('plural', $plural)
        //                             ->where('power_word', $power_word)
        //                             ->where('number',$number)
        //                             ->where('industry', $industry)
        //                             ->order_by('rand()')
        //                             ->limit($limit)
        //                             ->get('titleNames');
        //     $result     =   $query->result_array();     

       

        //     if(count($result)){
        //         return $result;
        //             } else{
        //                     $query      =    $this->db->order_by('rand()')
        //                                             ->limit($limit)
        //                                             ->get('titleNames');
        //                 return   $result     =   $query->result_array(); 
        //             }  

       
	}
	
}








?>