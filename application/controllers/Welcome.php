<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



	public function index()
	{
		//$this->load->view('welcome_message');
		$js = array();
		$js[] = 'helplion/helplion.js';

		$data = array('subview' => 'pages/lionhelper', 'js'=>$js);
		$this->load->view('layouts/lionhelper', $data);
	}
}
