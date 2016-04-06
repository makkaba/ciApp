<?php

class Ajax extends CI_Controller{

	public function index(){


	}


	public function getAllCode(){
		$this->load->database();
		$this->load->model('helper/Helpermodel');
		$data = $this->Helpermodel->get_all_code();
		
		//var_dump($data);
		//var_dump($data);

		$returnValue = json_encode($data);
		echo $returnValue;
	}

	public function getOneCode(){

		$sequence = $this->input->post('sequence');
		$this->load->database();
		$this->load->model('helper/Helpermodel');
		$data = $this->Helpermodel->get_one_code($sequence);
		

		//return $data;
		$returnValue = json_encode($data);
		echo $returnValue;
	}

}

