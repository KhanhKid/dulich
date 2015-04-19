<?php

class Ab extends Controller {

	function Ab()
	{
		parent::Controller();	
		$this->load->library('Layouts');
		$this->load->database();
	}
	function index(){
		$this->layouts->view('i_index',array(),'admin');
		echo "kid";
	}
	function alltour(){

	}
	function alltour(){

	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */