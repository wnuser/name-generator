<?php

class GetBabyModel extends CI_Model
{
	public function index($post)
	{
        $limit            = array_key_exists('num', $post)    ? $post['num'] :false;
       
        $surname          = array_key_exists('surname', $post) ? $post['surname'] : false;
        $firstname        = array_key_exists('firstname', $post) ? $post['firstname'] :  false;
        $filmstarfullName = array_key_exists('filmstar', $post) ? $post['filmstar'] : false;
        $filmstar         = strtok($filmstarfullName, " ");
   
        $beginwith       = array_key_exists('beginwith', $post) ? $post['beginwith'] : false;
        $religion        = array_key_exists('religion', $post) ? $post['religion'] : false;
        $country         = array_key_exists('country', $post) ? $post['country'] : false;
        $gender          = array_key_exists('gender', $post) ? $post['gender'] : false;


        $array          = array(
                                 'country'       => $country,
                                 'gender'        => $gender,
                                 'religion'      => $religion
                            );
        
        $whereArray     = array_filter($array);


        if($beginwith):
            $query      =   $this->db->where($whereArray)
                                        ->like('name', $beginwith)
                                        ->limit($limit)
                                        ->get('babyNames');
            $result     =   $query->result_array(); 
        else:
            $query      =   $this->db->where($whereArray)
                                        ->limit($limit)
                                        ->get('babyNames');
            $result     =   $query->result_array(); 
        endif;

        if(!count($result))
        {
            $query      =   $this->db->limit($limit)
                                      ->get('babyNames');
            $result     =   $query->result_array(); 
        }

        return self::formatData($result, $surname, $filmstar, $firstname );

    }
    
        /**
         * function for format data 
         */
        public function formatData($data, $surname, $filmstar, $firstname)
        {
            
           $totalNames     = count($data); 
           $randomNumber   = ($totalNames/2);

           $array          = array();
           for ($i=1; $i <= $randomNumber; $i++) { 
               # code...
               $array[$i]  = $i; 
           }


           $returnArray        = array();
           $words              = ($filmstar) ? explode(" ", $filmstar) : false;
           $firstWordFilmstar  = ($words)  ? $words[0] : false;
        //    $surnamefilmstar    = ($words)  ? $words[1] : false;
        //    if(!$surnamefilmstar)
        //    {
        //        $surnamefilmstar = $surname;
        //    }

           foreach ($data as $key => $value) {
               # code...
               if(key_exists($key, $array)):

                    if($key == $array[$key]){
                       
                        if($key%9==0) :
                            $returnArray[$key]['name']  = $firstWordFilmstar.' '.$value['name'].' '.$surname;

                        else :
                            $returnArray[$key]['name']  = $value['name'].' '.$surname;

                        endif;

                    }
                    else{

                    }

               else:
                    if($key%5 == 0):
                        $returnArray[$key]['name']  = $firstname.' '.$value['name'].' '.$surname;

                    else :
                        $returnArray[$key]['name']  = $value['name'].' '.$surname;

                    endif;
               endif;
           }
           return $returnArray;
           
        }
}








?>