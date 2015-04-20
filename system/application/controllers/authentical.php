<?php

class Authentical extends Controller {

    function Authentical()
    {
        parent::Controller();
        $this->load->library('Layouts');
        $this->load->database();
    }
    function index(){
        $this->layouts->view('ab/index',array(),'authentical');
    }
    function login(){
        $this->layouts->view('ab/login',array(),'authentical');
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */