<?php

class Ad extends Controller {

    function Ad()
    {
        parent::Controller();
        $this->load->library('Layouts');
        $this->load->database();
    }
    function index(){

        $this->layouts->view('ad/index',array(
            'c_tour' => $this->db->count_all_results('tour'),
            ),'admin');
    }
    function logout(){
        unset($_SERVER['PHP_AUTH_USER']);
        $this->layouts->view('ad/logout',array(),'admin');
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
        if(!empty($_POST))
        {
            $arr_insert = array();
            $arr_detail = array('tongquan','hanhtrinh','banggia','dieukien');
            $arr_insert_detail = array();
            // get all post data in one nice array
            foreach ($_POST as $key => $value)
            {
                if(!in_array($key, $arr_detail)){
                    $arr_insert[$key] = $value;
                }else{
                    $arr_insert_detail[$key] = $value;
                }
            }
            $this->db->where('ID', $id);
            $this->db->update('tour', $arr_insert);
            $this->db->update('tour_detail', $arr_insert_detail);

        }

        $data = $this->db->query('SELECT * FROM `tour` WHERE `ID`='.$id);
        $data_detail = $this->db->query('SELECT * FROM `tour_detail` WHERE `ID`='.$id);
        //echo '<pre>',var_dump($data->result()),'</pre>';die();
        $this->layouts->view('ad/detailtour',array(
            'data' => $data->result()[0],
            'data_detail' => $data_detail->result()[0],
        ),'admin');

        //var_dump($_POST);
    }
    function addtour(){
        if(!empty($_POST))
        {
            $arr_insert = array();
            $arr_detail = array('tongquan','hanhtrinh','banggia','dieukien');
            $arr_insert_detail = array();
            // get all post data in one nice array
            foreach ($_POST as $key => $value)
            {
                if(!in_array($key, $arr_detail)){
                    $arr_insert[$key] = $value;
                }else{
                    $arr_insert_detail[$key] = $value;
                }
            }
            $this->db->trans_start();
            $this->db->insert('tour', $arr_insert);
            $id = $this->db->insert_id();
            $this->db->trans_complete();
            $arr_insert_detail['ID'] = $id;
            $this->db->insert('tour_detail', $arr_insert_detail);

        }
        $this->layouts->view('ad/addtour',array(),'admin');
    }
    function alltintuc(){

    }
    function remove(){
        $id = $this->uri->segment(3);
        if($id){
            $this->db->delete('tour', array('ID' => $id));
            $this->db->delete('tour_detail', array('ID' => $id));
        }
        $this->layouts->view('ad/remove',array(),'admin');
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */