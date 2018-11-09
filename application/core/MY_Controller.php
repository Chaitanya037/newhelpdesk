<?php
class MY_Controller extends CI_Controller{

	function __construct() {
        parent::__construct();
        $this->load->library(array('session'));
    }

    public function checkLogin($autoRedirect = true, $exitforNoLogin = false) {
        //check if user id is present in session
        if ($this->session->userdata('gblUserid') == '')
            $loggedIn = false;
        else
            $loggedIn = true;

        // if not logged in, redirect automatically
        if ($autoRedirect && !$loggedIn) {
            header('location:' . BASE_URL . 'login');
            echo 'No login';
            exit();
        }

        //if asking to exit when no login
        if ($exitforNoLogin)
            exit;

        return $loggedIn;
    }
}