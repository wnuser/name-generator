<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadCsv extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('InsertModel');
		$this->load->library('csvimport');
	}

	public function index()
	{
		$file_data     =   $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
		$table         =   $this->input->post('table');
		$url           =   $this->input->post('url');

		$totalRows     = count($file_data);
		for ($i=0; $i < $totalRows ; $i++) { 
			$this->InsertModel->addData($table, $file_data[$i]);
		}

		$this->session->set_flashdata('success','Names Uploaded Successfully');
		return redirect('Admin/'.$url);

	}
	
}
