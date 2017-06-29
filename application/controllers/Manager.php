<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model("authenticate");
		 $this->load->model('manager_model');
		 $this->user = $this->session->user;


		 if(!$this->authenticate->checkManager()){
		 	redirect(base_url('/login?msg=Authenticated requests only'));
		 	die();
		 }

	}

	public function index(){
		$data = array("user" => $this->user);
		$this->load->view('manager/template', $data);
	}

}