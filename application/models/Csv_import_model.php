<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Csv_import_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    function select() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('tbl_user');
        return $query;
    }

    function insert($data) {
        $this->db->insert_batch('tbl_user', $data);
    }

}
