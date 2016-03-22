<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Race extends CI_Controller{

	public function index(){

		$data = array('subview'=>'pages/race');
		$this->load->view('layouts/layout', $data);
	}
}