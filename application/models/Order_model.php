<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Order_model extends CI_Model {

	public function insertOrder($orderData) {
        $this->db->insert_batch('user_orders', $orderData);
        return $this->db->insert_id();
    }
    public function getUserOrder($id) {
        $this->db->where('user_id', $id);
        $this->db->order_by('o_id','DESC');
        $result = $this->db->get('user_orders')->result_array();
        return $result;
    }
    
}