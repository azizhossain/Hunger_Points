<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User_model extends CI_Model {
    
    public function create($formArray) {
        $this->db->insert('users', $formArray);
    }
       public function getByUsername($usersname) {
        $this->db->where('usersname', $usersname);
        $mainuser = $this->db->get('users')->row_array();
        return $mainuser;
    }
} 