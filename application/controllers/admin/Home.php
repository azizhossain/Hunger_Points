<?php
defined('BASEPATH') OR exit ('No direct script access allowed');



class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $admin = $this->session->userdata('admin');
        if(empty($admin)) {
            $this->session->set_flashdata('msg', 'Your session has been expired');
            redirect(base_url().'admin/login/index');
        }
        $this->load->model('Admin_model');   
    }

    public function index() {

       $this->load->view('admin/partials/header');
    }
}