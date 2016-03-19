<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sniper extends CI_Controller{
	
	public function index(){

		$data = array('subview'=> 'pages/sniper');
		$this->load->view('layouts/layout', $data);
	}
}

