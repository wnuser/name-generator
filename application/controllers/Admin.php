<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		  parent::__construct();
		  if(!is_logged_in())  // if you add in constructor no need write each function in above controller. 
		 {
			 return redirect('Auth/login');
		  //redirect you login view
		 }
	}

	public function logout()
    {
    	$this->session->unset_userdata('id');
        return redirect('admin');
    }

	public function review()
	{
		$this->load->model('GetModel');
		$data['data']  = $this->GetModel->get_all_review();
        $this->load->view('default/review', $data);
	}

	public function index()
	{
		$this->load->view('default/index');
	}
	public function quickname(){
		$this->load->view('default/quickname');
	}

	public function charactername(){
		$this->load->view('default/characternames');
	}

	public function pennames(){
		$this->load->view('default/pennames');
	}

	public function bandnames(){
		$this->load->view('default/bandnames');
	}

	public function babynames(){
		$this->load->view('default/babynames');
	}

	public function femalenames(){
		$this->load->view('default/femalenames');
	}

	public function malenames(){
		$this->load->view('default/malenames');
	}

	public function nicknames(){
		$this->load->view('default/nicknames');
	}

	public function catnames(){
		$this->load->view('default/catnames');
	}

	public function usernames() {
		$this->load->view('default/usernames');
	}

	public function heronames() {
		$this->load->view('default/heronames');
	}
	
	public function villiannames() {
		$this->load->view('default/villiannames');
	}

	public function couplenames() {
		$this->load->view('default/couplenames');
	}

	public function streetnames() {
		$this->load->view('default/streetnames');
	}
	public function citynames() {
		$this->load->view('default/citynames');
	}

	public function rappernames(){
		$this->load->view('default/Rappernames');
	}
	
	public function firstnames(){
		$this->load->view('default/firstnames');
	}

	public function middlenames(){
		$this->load->view('default/middlenames');
	}

	public function lastnames(){
		$this->load->view('default/lastnames');
	}
	public function twinnames(){
		$this->load->view('default/twinnames');
	}
	public function piratenames(){
		$this->load->view('default/piratenames');
	}

	public function fantacyname(){
		$this->load->view('default/fantancynames');
	}

	public function blognames(){
		$this->load->view('default/blognames');
	}

	public function foodnames(){
		$this->load->view('default/foodnames');
	}
	
	public function housenames(){
		$this->load->view('default/housenames');
	}

	public function businessnames(){
		$this->load->view('default/businessnames');
	}

	public function teamnames(){
		$this->load->view('default/teamnames');
	}

	public function gamingnames(){
		$this->load->view('default/gamingnames');
	}
	public function titlenames(){
		$this->load->view('default/titlenames');
	}
	public function countrynames(){
		$this->load->view('default/countrynames');
	}

	public function adjective(){
		$this->load->view('default/adjective');
	}

	public function usernameString(){
		$this->load->view('default/usernameString');
	}

	public function sysnoyms(){

		$this->load->view('default/synonyms');
	}

	public function contact_query() {
		$this->load->view('default/contact');
	}

}
