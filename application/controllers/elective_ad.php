<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elective_ad extends CI_Controller {

	
	public function index()
	{
		$this->load->view('ele_upload');
	}
}
