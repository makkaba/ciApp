<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Winner extends CI_Controller{

	public function index(){
		$data = array('subview' => 'pages/winner/main');
		$this->load->view('layouts/layout', $data);
	}

	public function write(){

		$this->load->view('pages/winner/plusView');
		//login 안되어 있으면 로그인으로
		//$this->load->helper('url');
		//redirect('/login');
		
		//아니면 플러스 페이지로



	}
}