<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Common extends CI_Model {
    public function listDoctors(){
        $data = $this->db->get('doctors');
        $doctors = $data->result_array();
        return $doctors;
    }

    public function listUsers(){
        $data = $this->db->get_where('users', array("manager"=>"0"));
        $users = $data->result_array();
        return $users;
    }

    public function listManagers(){
        $data = $this->db->get_where('users', array("manager"=>"1"));
        $managers = $data->result_array();
        return $managers;
    }
}
