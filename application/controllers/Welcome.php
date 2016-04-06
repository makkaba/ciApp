<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



	public function index()
	{
		//$this->load->view('welcome_message');
		$js = array();
		$js[] = 'helplion/helplion.js';
		$js[] = 'prism.js';

		$css = array();
		$css[] = 'prism.css';
		$css[] = 'lionhelper.css';
		$css[] = 'bootstrap.min.css';

		$data = array('subview' => 'pages/lionhelper', 'js'=>$js, 'css'=>$css);
		$this->load->view('layouts/lionhelper', $data);
	}

	public function getSourcecode(){
		$this->load->database();
		$this->load->model('helper/Helpermodel');
		$data = $this->Helpermodel->get_all_code();
		var_dump($data);
	}
}
