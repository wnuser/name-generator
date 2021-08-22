<?php

class GetUsersModel extends CI_Model
{
	public function index($post)
	{
        $limit            = array_key_exists('num', $post)    ? $post['num'] :false;
        $gender           = array_key_exists('gender', $post) ? $post['gender'] : false;
        $firstname        = array_key_exists('firstname', $post) ? $post['firstname'] :  false;
        $middlename       = array_key_exists('middlename', $post) ? $post['middlename'] : false;
        $lastname         = array_key_exists('lastname', $post) ? $post['lastname'] : false;
        $superArray   = array();


        $ExistArray     = array($middlename, $lastname);
        $existance      = sizeof(array_filter($ExistArray));


        /**
         * logic for generate descriptive names
         */
        $stringQuery    = $this->db->order_by('rand()')
                                   ->limit(20)
                                   ->get('userNameStrings');
        $stringData   = $stringQuery->result_array();  
        $stringArray  = array();
        
        $count    =  0;
        foreach ($stringData as $key => $value) {
            # code...
            if($key%5 == 0):
                for ($i=0; $i < 3; $i++) { 
                    # code...
                    if($i == 0):
                        $stringArray[$key][$i]['name']  = $value['string'].$firstname;
                    elseif($i == 1):
                        $stringArray[$key][$i]['name']  = $value['string'].'_'.$firstname;
                    else:
                        $stringArray[$key][$i]['name']  = $value['string'].'.'.$firstname;
                    endif;
                }
            else:
                for ($i=0; $i < 3; $i++) { 
                    # code...
                    if($i == 0):
                        $stringArray[$key][$i]['name']  = $firstname.'.'.$value['string'];
                    elseif($i == 1):
                        $stringArray[$key][$i]['name']  = $firstname.'_'.$value['string'];
                    else:
                        $stringArray[$key][$i]['name']  = $firstname.$value['string'];
                    endif;
                }
            endif;
            
        }

        /**
         * logic for generate descriptive names
         */

        /**
         *  classic names 
         * */
        $classicArray  = array(
                                ($lastname && $middlename) ?
                                array(
                                    'name'  => $firstname.$middlename.$lastname,
                                ) : false,
                                ($lastname && $middlename) ?
                                array(
                                    'name'  => $firstname.'_'.$middlename.'_'.$lastname,
                                ) : false,
                                ($lastname && $middlename) ?
                                array(
                                    'name'  => $firstname.'.'.$middlename.'.'.$lastname,
                                ) : false,
                                array(
                                    'name'  => substr_replace($firstname, "", -1).'90',
                                ),
                                ($middlename) ?
                                array(
                                    'name'  => $firstname.$middlename,
                                ) : false,
                                ($middlename) ?
                                array(
                                    'name'  => $firstname.'_'.$middlename,
                                ) : false,
                                ($middlename) ?
                                array(
                                    'name'  => $firstname.'.'.$middlename,
                                ) : false,
                                ($lastname) ?
                                array(
                                    'name'  => $firstname.'.'.$lastname,
                                ) : false,
                                ($lastname) ?
                                array(
                                    'name'  => $firstname.'_'.$lastname,
                                ) : false,
                                ($lastname) ?
                                array(
                                    'name'  => $lastname.'.'.$firstname,
                                ) : false,
                                ($lastname) ?
                                array(
                                    'name'  => $lastname.'_'.$firstname,
                                ) : false,
                                ($middlename) ?
                                array(
                                    'name'  => $middlename.'_'.$firstname,
                                ) : false,
                                ($middlename) ?
                                array(
                                    'name'  => $middlename.'.'.$firstname,
                                ) : false,
                                
        );
         
        $superArray[1]   = array_filter($classicArray);
         /**
         *  classic names 
         * */ 

         /**
          * getting Obscure names
          */

          $obscureFirstarray   =  array();
          for ($i=0; $i < 30; $i++) { 
              # code...
              $random  = rand(4,7);
              if($i%3 == 0):
                    $s                               =  substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", $random)), 0, $random);
                    $obscureFirstarray[$i]['name']   = $firstname.$s;
              else:
                    $s                               =  substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", $random)), 0, $random);
                    $obscureFirstarray[$i]['name']   =  $firstname.'.'.$s;
              endif;
          }
          $superArray[2]    = $obscureFirstarray;

          if($middlename){
            $obscureMiddlearray   =  array();
            for ($i=0; $i < 30; $i++) { 
                # code...
                $random  = rand(4,7);
                if($i%3 == 0):
                      $s                               =  substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", $random)), 0, $random);
                      $obscureMiddlearray[$i]['name']   = $middlename.$s;
                else:
                      $s                               =  substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", $random)), 0, $random);
                      $obscureMiddlearray[$i]['name']   =  $middlename.'.'.$s;
                endif;
            }
            $superArray[3]  = $obscureMiddlearray;
              
          }

          if($lastname) {
            $obscureLastarray   =  array();
            for ($i=0; $i < 30; $i++) { 
                # code...
                $random  = rand(4,7);
                if($i%3 == 0):
                      $s                               =  substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", $random)), 0, $random);
                      $obscureLastarray[$i]['name']   = $lastname.$s;
                else:
                      $s                               =  substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", $random)), 0, $random);
                      $obscureLastarray[$i]['name']   =  $lastname.'.'.$s;
                endif;
            }
            $superArray[4]  = $obscureLastarray;

          }
         

         /**
          * getting Obscure names
          */
                   
        //   echo "<pre>";
        //   print_r($superArray);
        //   exit;

        $returnArray  = array(
              'superArray'  => $superArray,
              'stringArray' => $stringArray,
        );

        return $returnArray;
        //   echo "<pre>";
        //   print_r($returnArray);
        //   exit;
        //   return $superArray;

    //    if($middlename){

    //     $query      =   $this->db->where('fname', $firstname)
    //                                 ->where('mname', $middlename)
    //                                 ->where('lname', $lastname)
    //                                 ->where('gender',$gender)
    //                                 ->order_by('rand()')
    //                                 ->limit($limit)
    //                                 ->get('userNames');
    //     $result     =   $query->result_array();  

    //    }else{

    //     $query      =   $this->db->where('fname', $firstname)
    //                                 ->where('lname', $lastname)
    //                                 ->where('gender',$gender)
    //                                 ->order_by('rand()')
    //                                 ->limit($limit)
    //                                 ->get('userNames');
    //     $result     =   $query->result_array();  

    //    }
       
    //    if(count($result)){
    //     return $result;
    //             }else {
    //             $query      =   $this->db->order_by('rand()')
    //                                     ->limit($limit)
    //                                     ->get('userNames');
    //             return  $result     =   $query->result_array(); 
                        
    //             }	
	}
	
}








?>