<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('_x')){

	function _x($data, $flag = true){
    	echo "<pre>";
    	print_r($data);
    	echo "</pre>";

    	if($flag){
    		exit;
    	}
    }
}