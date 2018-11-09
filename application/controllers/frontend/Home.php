<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends MY_controller{
	
	function __construct() {
        parent::__construct();
	}

	function index(){
		$data['menu_show'] = 'Yes'; 
		$this->load->load_template('frontend/body', $data);
	}
}