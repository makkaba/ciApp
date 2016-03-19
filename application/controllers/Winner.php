<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Winner extends CI_Controller{

	public function index(){
		$data = array('subview' => 'pages/winner');
		$this->load->view('layouts/layout', $data);
	}
}