<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Africa extends CI_Controller{

	public function index(){
		$data = array('subview' => 'pages/africa');
		$this->load->view('layouts/layout', $data);
	}
}