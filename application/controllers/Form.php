<?php


class Form extends CI_Controller{

	public function index(){


	}


	public function saveCode(){


		//$code = $this->input->post('code');
		//$sequence = $this->input->post('sequence');


		//echo gettype($this->input->post());
		$this->load->database();
		$this->load->model('helper/Helpermodel');
		$this->Helpermodel->save_code($this->input->post());


	}
}