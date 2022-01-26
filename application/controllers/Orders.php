<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Orders extends CI_Controller {
    function __construct(){
        parent::__construct();

        $user = $this->session->userdata('user');
            if(empty($user)) {
                $this->session->set_flashdata('msg', 'Your session has been expired');
                redirect(base_url().'login/');
            }
    }
    public function index() {
        $this->load->view('front/partials/header');
        $this->load->view('front/orders');
        $this->load->view('front/partials/footer');
    }

}