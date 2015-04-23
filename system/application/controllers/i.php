<?php

class I extends Controller {

	function I()
	{
		parent::Controller();
		$this->load->library('Layouts');
		$this->load->database();
	}
	function index(){
		$this->layouts->view('detail/i_index',array());
	}
	function tour(){
		$id = $this->uri->segment(3);
		$data = $this->db->query('SELECT * FROM `tour` WHERE `ID` = '.$id);
		$data_detail = $this->db->query('SELECT * FROM `tour_detail` WHERE `ID` = '.$id);

		$this->layouts->view('detail/i_tour',array(
			'data' => $data->result()[0],
			'data_detail' => $data_detail->result()[0],
			));
	}

	function hotel(){
		$this->layouts->view('detail/i_hotel',array());
	}

	function search(){
		$result = array();
		if(!empty($_POST)){
        	$key = $_POST['key'];
        	$data = $this->db->query("SELECT * FROM `tour` WHERE `name` LIKE '%".$key."%'");
        	$result = $data->result();
        }
        $this->layouts->view('detail/i_search',array(
        		'data' => $result,
        		'key' => $_POST['key'],
        	));
	}



	//-- Linh Tinh --
	function otherservice(){

		$this->layouts->view('detail/i_news',array());
	}
	function news(){
		$id = $this->uri->segment(3);
		$data = $this->db->query('SELECT * FROM `news` WHERE `ID` = '.$id);
		$this->layouts->view('detail/i_news',array(
			'data' => $data->result()[0]
		));
	}
	function dairy(){
		$id = $this->uri->segment(3);
		$data = $this->db->query('SELECT * FROM `dairy` WHERE `ID` = '.$id);
		$this->layouts->view('detail/i_dairy',array(
			'data' => $data->result()[0]
		));
	}
	function visa(){
		$id = $this->uri->segment(3);
		$data = $this->db->query('SELECT * FROM `visa` WHERE `ID` = '.$id);
		$this->layouts->view('detail/i_visa',array(
			'data' => $data->result()[0]
		));
	}
	function place(){
		$id = $this->uri->segment(3);
		$data = $this->db->query('SELECT * FROM `place` WHERE `ID` = '.$id);
		$this->layouts->view('detail/i_place',array(
			'data' => $data->result()[0]
		));
	}
}
