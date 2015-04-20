<?php

class Ad extends Controller {

    function Ad()
    {
        parent::Controller();
        $this->load->library('Layouts');
        $this->load->database();
    }
    function index(){
        $this->layouts->view('ad/index',array(),'admin');
    }

    function alltour(){

    }
    function alltintuc(){

    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */