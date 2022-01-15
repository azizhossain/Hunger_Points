<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Store_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('restaurants', $formArray);
    }

    public function getStores() {
        $result = $this->db->get('restaurants')->result_array();
        return $result;
    }
}
