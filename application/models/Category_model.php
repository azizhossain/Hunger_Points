<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Category_model extends CI_Model {
    
    public function create_cat($cat) {

        $this->db->insert('res_category', $cat);
    }

    public function getCategory() {
        $cats_result = $this->db->get('res_category')->result_array();
        return $cats_result;
    }

}
