<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->library('Layouts');
		$this->layouts->set_title('Welcome!');
		
		$this->layouts->add_include('js/simple_js.js')
					  ->add_include('css/simple_css.css');
		
		$this->layouts->view('welcome_message');
		$this->load->database();
		//$test = $this->db->query('SELECT * FROM `dairy`');
		//var_dump($test->result());die();
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */