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
    function login($username, $password){
       $this ->db-> select('id, username, password');
       $this ->db-> from('users');
       $this ->db-> where('username', $username);
       $this ->db-> where('password', MD5($password));
       $this ->db-> limit(1);

       $query = $this -> db -> get();

       if($query -> num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */