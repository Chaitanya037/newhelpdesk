<?php
class MY_Loader extends CI_Loader{

	public function getHeader(){
    	return "I want menu privilege here";
    }

	public function load_template($template_name, $vars = array(), $return = FALSE){
        if($return):
            $this -> view('templates/header', $vars, $return);
            $this -> view($template_name, $vars, $return);
            $this -> view('templates/footer', $vars, $return);
        else:
            $this -> view('templates/header', $vars);
            $this -> view($template_name, $vars);
            $this -> view('templates/footer', $vars);

        endif;
    }

    function load_admin_template($template_name, $vars = array(), $return = FALSE){
        if($return):
            if($template_name != 'admin/login'):
                $this->view('admin/templates/header', $vars, $return);
                $this->view('admin/templates/sidebar', $vars, $return);
                $this->view($template_name, $vars, $return);
                $this->view('admin/templates/footer', $vars, $return);
            else :
                $this->view($template_name, $vars, $return);

            endif;
        else:
            $this->view('admin/templates/header', $vars);
            $this->view($template_name, $vars);
            $this->view('admin/templates/footer', $vars);

        endif;
    }
}