<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function getByUsername($username) {

        $this->db->where('username', $username);
        $admin = $this->db->get('admin')->row_array();
        return $admin;
    }
     public function dishReport() {
        $query = $this->db->query('SELECT d_id, d_name, 
        SUM(quantity) AS qty
        FROM user_orders
        GROUP BY d_id
        ORDER BY SUM(quantity) DESC');
        return $query->result();
    }
}