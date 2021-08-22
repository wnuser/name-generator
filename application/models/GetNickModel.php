<?php

class GetNickModel extends CI_Model
{
	public function index($post)
	{
        $limit          = array_key_exists('num', $post)    ? $post['num'] :false;
        $gender         = array_key_exists('gender', $post) ? $post['gender'] : false;
        $firstname      = array_key_exists('firstname', $post) ? $post['firstname'] :  false;
        $middlename     = array_key_exists('middlename', $post) ? $post['middlename'] : false;
        $lastname       = array_key_exists('lastname', $post) ? $post['lastname'] : false;
        $adjective      = array_key_exists('adjective', $post) ? $post['adjective']  : false;

        $ExistArray     = array($middlename, $lastname);
        $existance      = sizeof(array_filter($ExistArray));
        $superArray     = array();

        

        if($adjective) : 
            // descriptive Names Generating
            $adjectiveQuery  = $this->db->where('adejctive', $adjective)
                                            ->order_by('rand()')
                                            ->get('adjective_synonyms');
            $adjectives        = $adjectiveQuery->result_array(); 
            
            $descriptiveNames  = array();

            foreach ($adjectives as $key => $value) {
                # code...
                if($key%2==0):
                    $descriptiveNames[$key]['name']  = $firstname.' the '.$value['synonyms'];
                else:
                    $descriptiveNames[$key]['name']  = $value['synonyms'].' '.$firstname;
                endif;
            }
            $superArray[0] = $descriptiveNames;
            // descriptive Names Array 
    else:
    endif;



        /**
         *  computer slang generated names
         */
        $suffix1         = "ella";
        $suffix2         = "ie";
        $computerSlang   = array(
                                
                                 array(
                                    'name'  => substr_replace($firstname, "", -1).$suffix1,
                                 ),
                                 ($middlename) ?
                                array(
                                    'name'  => substr_replace($middlename, "", -1).$suffix2,
                                ) : false,
                                 array(
                                    'name'  => substr_replace($firstname, "", -2).$suffix2,
                                ),
                                ($lastname) ?
                                array(
                                    'name'  => substr_replace($lastname, "", -1).$suffix2,
                                ) : false,
                                array(
                                    'name'  => substr_replace($firstname, "", -1),
                                ),
                                ($lastname) ?
                                array(
                                    'name'  => substr_replace($lastname, "", -2).$suffix1,
                                ) : false,
                                
                                ($middlename) ?
                                array(
                                    'name'  => substr_replace($middlename, "", -2).$suffix1,
                                ) : false,
                                ($middlename) ?
                                array(
                                    'name'  => substr_replace($middlename, "", -1),
                                ) : false,
                                ($lastname) ?
                                array(
                                    'name'  => substr_replace($lastname, "", -1).substr($firstname, 0, 1),
                                ) : false,
                                ($middlename) ?
                                array(
                                    'name'  => substr_replace($middlename, "", -1).substr($firstname, 0, 1),
                                ) : false,
                                ($lastname) ?
                                array(
                                    'name'  => substr_replace($lastname, "", -1),
                                ) : false,
        );

         /**
         *  computer slang generated names
         */



        // Bob Suffix Names 
        $bobArray      = array(
            ($lastname) ?
             array(
                 'name'   => ($lastname) ? substr_replace($lastname, "", -2)."bob" : false,
             ) : false,
             array(
                 'name'   =>  substr_replace($firstname, "", -1)."bob",
             ),
             ($lastname) ?
             array(
                 'name'   => ($lastname) ? substr_replace($lastname, "", -1)."bob" : false,
             ) : false,

             ($middlename) ?
             array(
                 'name'   => ($middlename) ?  substr_replace($middlename, "", -2)."bob" : false,
             ) : false,
            
             array(
              'name'   => substr_replace($firstname, "", -2)."bob",
             ),
             ($middlename) ?
             array(
                 'name'   => ($middlename) ? substr_replace($middlename, "", -1)."bob" : false,
             ) : false,

);
            $superArray[2]   = array_filter($bobArray);
            // bob array completion


        $superArray[1]    =  array_filter($computerSlang);

        // echo "<pre>";
        // print_r($superArray);
        // exit;
        return $superArray;


    //     $inputArray   = array(
    //                       'gender'=> $gender
    //     );

    //     $whereArray   = array_filter($inputArray);
    //     $query      =   $this->db->where($whereArray)
    //                                 ->order_by('rand()')
    //                                 ->limit($limit)
    //                                 ->get('nickNames');
    //     $result     =   $query->result_array(); 


       
    //    if(count($result))
    //    {
    //     return $result;
    //    } else{
    //     $query      =    $this->db->order_by('rand()')
    //                                         ->limit($limit)
    //                                         ->get('nickNames');
    //     return   $result     =   $query->result_array(); 
    //     }  

       
	}
	
}








?>