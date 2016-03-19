<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bible extends CI_Controller{
	
	public function index(){

		$data = array('subview' => 'pages/bible');
		$this->load->view('layouts/layout', $data);
	}
}