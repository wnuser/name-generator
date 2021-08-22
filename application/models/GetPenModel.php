<?php

class GetPenModel extends CI_Model
{
	public function index($post)
	{
        $limit           = array_key_exists('num', $post)    ? $post['num'] :false;
        $gender          = array_key_exists('gender', $post) ? $post['gender'] : false;
        $adjective       = array_key_exists('adjective', $post) ? $post['adjective'] : false;
        $weapon          = array_key_exists('weapon', $post) ? $post['weapon'] :  false;
        $firstcharacter  = array_key_exists('firstcharacter', $post) ? $post['firstcharacter'] : false;
        $language        = array_key_exists('language', $post) ? $post['language'] : false;

        $array     =    array(
                               'gender'              => $gender,
                               'language'            => $language
        );

        $whereArray = array_filter($array);
        
        $query      = $this->db->where($whereArray)
                                ->order_by('rand()')
                                ->limit($limit)
                                ->get('penNames');
        $result     =  $query->result_array();

        if(count($result))
        {
            return self::addWeaponname($result, $weapon);

        } else
        {
            $query    =    $this->db->order_by('rand()')
                                       ->like('names', $firstcharacter)
                                       ->limit($limit)
                                       ->get('penNames');
            $result   =   $query->result_array(); 
            if(count($result)) :
                return self::addWeaponname($result, $weapon); 
            else : 
                $query    =    $this->db->order_by('rand()')
                                        ->limit($limit)
                                        ->get('penNames');
                $result   =   $query->result_array(); 
                return self::firstCharformat($result, $firstcharacter, $weapon);
            endif;    

        }  	
            
    }

    /**
     * function for foramat data 
     * 
     */
    public function firstCharformat($data, $firstcharacter, $weapon)
    {
        
        $array = array();
        foreach ($data as $key => $value) {
             # code...
            // $array[$key]['names'] = $firstcharacter.$value['names'];
            $array[$key]['names']    = $firstcharacter.$value['names'];
            
        }

        return self::addWeaponname($array, $weapon);
    }
    /**
     * function for add weapon name in last of names
     */

     public function addWeaponname($data, $weapon)
     {

           $totalNames     = count($data);
           $randomNumber   = rand(1, $totalNames);

           $array          = array();
           for ($i=1; $i <= $randomNumber; $i++) { 
               # code...
               $array[$i]  = $i; 
           }

           $returnArray    = array();

           foreach ($data as $key => $value) {
               # code...
               
               if(key_exists($key, $array)) :

                    if($key ==  $array[$key]) :
                            $returnArray[$key]['names']    = ($weapon) ? $value['names'].'-'.$weapon : $value['names'];
                    else :
                            $returnArray[$key]['names']    = $value['names'];
                    endif; 
                else:
                    $returnArray[$key]['names']    = $value['names'];

                endif;    
           }
           return $returnArray;
     }
	
}








?>