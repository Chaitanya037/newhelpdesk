<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_model{

	function __construct() {
        parent::__construct();
        $this->load->database();
    }

}