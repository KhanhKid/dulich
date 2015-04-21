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
        $data = $this->db->query('SELECT * FROM `tour`');
        //echo '<pre>',var_dump($data->result()),'</pre>';die();
        $this->layouts->view('ad/alltour',array(
            'data' => $data->result(),
        ),'admin');
    }
    function detailtour(){
        $id = $this->uri->segment(3);
        $data = $this->db->query('SELECT * FROM `tour` WHERE `ID`='.$id);
        //echo '<pre>',var_dump($data->result()),'</pre>';die();
        $this->layouts->view('ad/detailtour',array(
            'data' => $data->result()[0],
        ),'admin');
    }
    function alltintuc(){

    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */