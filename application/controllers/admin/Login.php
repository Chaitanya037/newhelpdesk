<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_controller{
	function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->model('Login_model');
	}

	function index(){
		$data = array();
		$this->load->load_admin_template('admin/login', $data, 1);
	}

	function verifyLogin(){
		$userName = $this->input->post('username');
		$userPassword = $this->input->post('userpwd');
		echo $this->session->userdata('gblUserid');
	}
}