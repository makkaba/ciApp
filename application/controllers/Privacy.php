<?php

class Privacy extends CI_Controller{
	
	public function index(){
		$data = array('subview'=>'layouts/layout');
		$this->load->view('pages/privacy', $data);
	}

}
