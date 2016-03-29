<?php


class Blossom extends CI_Controller{

	public function index(){


		$data =  array('subview' => 'pages/blossom/blossom' );
		$this->load->view('layouts/layout', $data);
	}

	public function success(){

		$data =  array('subview' => 'pages/blossom/success' );
		$this->load->view('layouts/layout', $data);
	}
}