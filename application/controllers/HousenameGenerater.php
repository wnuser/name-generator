<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HousenameGenerater extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $result['data']    =  false;
        $result['status']  =  true;
		$this->load->view('userside/housename',$result);
    }
    
    // function for getting Quick names
    public function getNames(){
         
		 $this->load->model('GetHouseModel');
		 
		 $result['data']   =   $this->GetHouseModel->index($this->input->post());
         $result['status'] =   (count($result['data'])) ? true : false;
         $this->load->view('userside/housename',$result);
    }
	
}
