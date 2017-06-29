<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Manager_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                
        }

        Public function saveDoctor($data){
            $this->db->insert("doctors", $data);
            return ($this->db->affected_rows() != 1) ? false : true;
        }

    }