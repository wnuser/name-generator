<?php

class GetCoupleModel extends CI_Model
{
	public function index($post)
	{
        $limit            = array_key_exists('num', $post)    ? $post['num'] :false;
        $afname           = array_key_exists('afname', $post) ? $post['afname'] : false;
        $asname           = array_key_exists('asname', $post) ? $post['asname'] :  false;
        $bfname           = array_key_exists('bfname', $post) ? $post['bfname'] : false;
        $bsname           = array_key_exists('bsname', $post) ? $post['bsname'] : false;

        $existanceArray   = array($afname, $asname, $bfname, $bsname);
        $existance        = sizeof(array_filter($existanceArray));

        $array    = array();

        if($existance !=0):
                
        for ($i=1; $i <= $limit; $i++) { 
                # code...

                $randomNumber = rand(1, $limit);
                $afLength     = ($afname) ? (strlen($afname)) : false;
                $afRandomn    = rand(1, $afLength);
                $afRandomc    = substr($afname, $afRandomn);

                $firstChar    = $afname[0];
                

                $bfLength     = ($bfname) ? (strlen($bfname)) : false;
                $bfRandomn    = rand(1, $bfLength);
                $bfRandomc    = substr($bfname, $bfRandomn);

                if($i < $randomNumber){
                        $array[$i]['name']  = ucfirst($firstChar.$afRandomc.$bfRandomc.$asname);

                } else {
                        $array[$i]['name']  = ucfirst($bfRandomc.$afRandomc.$bsname);

                }


        }        

        return $array;
        else :

        endif;

        

        $query      =   $this->db->where('afname', $afname)
                                    ->where('asname', $asname)
                                    ->where('bfname', $bfname)
                                    ->where('bsname',$bsname)
                                    ->order_by('rand()')
                                    ->limit($limit)
                                    ->get('couplenames');
        $result     =   $query->result_array();  

     
        if(count($result))
        {
                return $result;
                }else {
                    $query      =   $this->db->order_by('rand()')
                                            ->limit($limit)
                                            ->get('couplenames');
                    return  $result     =   $query->result_array();     
        }

       
        }
        
        
	
}








?>