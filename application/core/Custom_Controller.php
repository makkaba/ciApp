<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custom_Controller extends CI_Controller {

	protected $data;

	function __construct(){
		parent::__construct();
		$this->data['title'] = 'jeff';
	}

	function _output($content){
		
	}
}