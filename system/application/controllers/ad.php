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
            'c_order' => $this->db->count_all_results('order'),
            'c_news' => $this->db->count_all_results('news'),
            'c_place' => $this->db->count_all_results('place'),
            'c_dairy' => $this->db->count_all_results('dairy'),
            'c_visa' => $this->db->count_all_results('visa'),
            ),'admin');
    }
    function logout(){
        unset($_SERVER['PHP_AUTH_USER']);
        $this->layouts->view('ad/logout',array(),'admin');
    }

    function alltour(){
        $data = $this->db->query('SELECT * FROM `tour` ORDER BY `ID` DESC');
        //echo '<pre>',var_dump($data->result()),'</pre>';die();
        $this->layouts->view('ad/alltour',array(
            'data' => $data->result(),
        ),'admin');
    }
    function allorder(){
        $data = $this->db->query('SELECT * FROM `order` ORDER BY `ID` DESC');
        //echo '<pre>',var_dump($data->result()),'</pre>';die();
        $this->layouts->view('ad/allorder',array(
            'data' => $data->result(),
        ),'admin');
    }
    function allmisc(){
        $arr_all = array();
        $data = $this->db->query('SELECT * FROM `visa` ORDER BY `ID` DESC');
        foreach ($data->result('array') as $key => $value) {
            # code...   
            $arr_temp = array();
            $arr_temp = $value;
            $arr_temp['type'] = 1;
            $arr_all[] = $arr_temp;
        }
        $data = $this->db->query('SELECT * FROM `news` ORDER BY `ID` DESC');
        foreach ($data->result('array') as $key => $value) {
            # code...   
            $arr_temp = array();
            $arr_temp = $value;
            $arr_temp['type'] = 2;
            $arr_all[] = $arr_temp;
        }
        $data = $this->db->query('SELECT * FROM `dairy` ORDER BY `ID` DESC');
        foreach ($data->result('array') as $key => $value) {
            # code...   
            $arr_temp = array();
            $arr_temp = $value;
            $arr_temp['type'] = 3;
            $arr_all[] = $arr_temp;
        }
        $data = $this->db->query('SELECT * FROM `place` ORDER BY `ID` DESC');
        foreach ($data->result('array') as $key => $value) {
            # code...   
            $arr_temp = array();
            $arr_temp = $value;
            $arr_temp['type'] = 4;
            $arr_all[] = $arr_temp;
        }
        //echo '<pre>',var_dump($arr_all),'</pre>';die();
        $this->layouts->view('ad/allmisc',array(
            'data' => $arr_all
        ),'admin');
    }
    function addmisc(){
        $notice = "";
        if(!empty($_POST))
        {
            //var_export($_POST);die();
            $arr_insert = array();
            $arr_detail = array('title','img','content');
            $arr_insert_detail = array();
            // get all post data in one nice array
            foreach ($_POST as $key => $value)
            {
                if(in_array($key, $arr_detail)){
                    $arr_insert[$key] = $value;
                }
            }
            switch ($_POST['type']) {
                case '1':
                    # Visa
                    $this->db->insert('visa', $arr_insert);
                    $notice = "Thêm visa thành công";
                    break;
                case '2':
                    # News
                    $this->db->insert('news', $arr_insert);
                    $notice = "Thêm tin tức thành công";
                    break;
                case '3':
                    # Nhật Ký
                    $this->db->insert('dairy', $arr_insert);
                    $notice = "Thêm nhật ký thành công";
                    break;
                case '4':
                    # Thắng cảnh
                    $this->db->insert('place', $arr_insert);
                    $notice = "Thêm thắng cảnh thành công";
                    break;               
            }
            
        }
        $this->layouts->view('ad/addmisc',array('notice'=>$notice),'admin');
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
            $this->db->where('ID', $id);
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
    function removeorder(){
        $id = $this->uri->segment(3);
        if($id){
            $this->db->delete('order', array('ID' => $id));
        }
        $this->layouts->view('ad/removeorder',array(),'admin');
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */