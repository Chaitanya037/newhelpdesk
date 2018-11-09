<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_controller{
	function __construct() {
        parent::__construct();
	}

	function index(){
		$data = array();
		$this->load->load_admin_template('admin/Dashboard/index', $data, 1);
	}
}