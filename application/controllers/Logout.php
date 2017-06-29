<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function index(){
		$this->session->unset_tempdata('user');
        $this->session->set_flashdata('msg',"Logged out Successfully");
          redirect(base_url('/login/again'));
        die();
	}
}