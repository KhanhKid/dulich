<?php

class A extends Controller {

	function A()
	{
		parent::Controller();	
		$this->load->library('Layouts');
		$this->load->database();
	}
	
	function index(){
		
		$this->layouts->set_title('Welcome!');
		$this->layouts->add_include('js/simple_js.js')
					  ->add_include('css/simple_css.css');
		$data = array();
		$tourtrongnuoc = $this->db->query('SELECT * FROM `tour` WHERE `type` = 1 limit 3');
		$tourngoainuoc = $this->db->query('SELECT * FROM `tour` WHERE `type` = 2 limit 3');
		$tourkhuyenmai = $this->db->query('SELECT * FROM `tour` WHERE `type` = 3 limit 3');
		$tourfree = $this->db->query('SELECT * FROM `tour` WHERE `type` = 4 limit 3');
		
		$visa_all = $this->db->query('SELECT * FROM `visa`  order by ID Desc limit 5' );
		$news_all = $this->db->query('SELECT * FROM `news` order by ID Desc limit 10');
		$dairy_all = $this->db->query('SELECT * FROM `dairy` order by ID Desc limit 5');
		
		$this->layouts->view('a_index',array(
			'tourtrongnuoc' => $tourtrongnuoc->result(),
			'tourngoainuoc' => $tourngoainuoc->result(),
			'tourkhuyenmai' => $tourkhuyenmai->result(),
			'tourfree' => $tourfree->result(),
			'visa_f' => $visa_all->result()[0],
			'visa_all' => $visa_all->result(),
			'news_f' => $news_all->result()[0],
			'news_all' => $news_all->result(),
			'dairy_f' => $dairy_all->result()[0],
			'dairy_all' => $dairy_all->result(),
		));
	}


	function tourfree(){
		$data = array();
		$tour = $this->db->query('SELECT * FROM `tour` WHERE `type` = 4');
		$tour_suggest = $this->db->query('SELECT * FROM `tour` WHERE `type` = 4 limit 3');
		
		$this->layouts->view('a_tourfree',array(
			'tour' => $tour->result(),
			'tour_suggest' => $tour_suggest->result(),
		));
	}
	function tourkhuyenmai(){
		$data = array();
		$tour = $this->db->query('SELECT * FROM `tour` WHERE `type` = 3');
		$tour_suggest = $this->db->query('SELECT * FROM `tour` WHERE `type` = 3 limit 3');
		
		$this->layouts->view('a_tourkhuyenmai',array(
			'tour' => $tour->result(),
			'tour_suggest' => $tour_suggest->result(),
		));
	}
	function tourngoainuoc(){
		$data = array();
		$tour = $this->db->query('SELECT * FROM `tour` WHERE `type` = 2');
		$tour_suggest = $this->db->query('SELECT * FROM `tour` WHERE `type` = 2 limit 3');
		
		$this->layouts->view('a_tourngoainuoc',array(
			'tour' => $tour->result(),
			'tour_suggest' => $tour_suggest->result(),
		));
	}
	function tourtrongnuoc(){
		$data = array();
		
		$tour = $this->db->query('SELECT * FROM `tour` WHERE `type` = 1');
		$tour_suggest = $this->db->query('SELECT * FROM `tour` WHERE `type` = 1 limit 3');
		
		$this->layouts->view('a_tourtrongnuoc',array(
			'tour' => $tour->result(),
			'tour_suggest' => $tour_suggest->result(),
		));
	}
	function gioithieu(){
		$this->layouts->view('a_gioithieu',array());
	}
	function vemaybay(){
		$this->layouts->view('a_vemaybay',array());
	}
	function dichvukhac(){
		$this->layouts->view('a_dichvukhac',array());
	}
	function thutucvisa(){
		$list = $this->db->query('SELECT * FROM `visa` order by ID Desc' );
		$this->layouts->view('a_thutucvisa',array('list'=>$list->result()));
	}
	function thangcanh(){

		$list = $this->db->query('SELECT * FROM `place` order by ID Desc' );
		$this->layouts->view('a_thangcanh',array('list'=>$list->result()));
	}
	function khachsan(){
		$this->layouts->view('a_khachsan',array());
	}
	function xe(){
		$this->layouts->view('a_xe',array());
	}
	function lienhe(){
		$this->layouts->view('a_lienhe',array());
	}
	function tindulich(){
		$list = $this->db->query('SELECT * FROM `news` order by ID Desc' );
		$this->layouts->view('a_tindulich',array('list'=>$list->result()));
	}	
	function nhatky(){

		$list = $this->db->query('SELECT * FROM `dairy` order by ID Desc' );
		$this->layouts->view('a_nhatky',array('list'=>$list->result()));
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */