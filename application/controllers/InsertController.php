
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertController extends CI_Controller {

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
	public function insertData()
	{
		 
		 $table     =  $this->input->post('table');
		 $url       =  $this->input->post('url'); 

         $postArray =  $this->input->post();
		 unset($postArray['table']);
		 unset($postArray['url']);

         $this->load->Model('InsertModel');
		 $this->InsertModel->addData($table,$postArray);
		 
		 $this->session->set_flashdata('message_success', 'Added Successfully');
		 if($table == 'review'){
			 return redirect($url);
		 }else{
			return redirect('Admin/'.$url);
		}

    }
}
