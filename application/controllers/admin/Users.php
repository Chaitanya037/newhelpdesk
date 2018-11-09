<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_controller{
	function __construct() {
        parent::__construct();
	}

	function index(){
		$data = array();
		$this->load->load_admin_template('admin/Users/index', $data, 1);
	}
}