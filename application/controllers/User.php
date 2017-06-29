<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 
    public $user;

	public function __construct(){
		 parent::__construct();
		 $this->load->model("authenticate");

		 $this->user = $this->session->user;

		 if(!$this->authenticate->checkUser()){
		 	redirect(base_url('/login?msg=Authenticated requests only'));
		 	die();
		 }


	}

	public function index(){

		echo "Teacher logged in";
		
	}
}