<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Profile extends CI_Controller {

    function __construct(){
        parent::__construct();

        $user = $this->session->userdata('user');
            if(empty($user)) {
                $this->session->set_flashdata('msg', 'Your session has been expired');
                redirect(base_url().'login/');
            }

        $this->load->model('User_model');
    }

    public function index() {
        $loggedUser = $this->session->userdata('user');
        $id = $loggedUser['user_id'];
        $user = $this->User_model->getUser($id);
        $data['user'] = $user;
        $this->load->view('front/partials/header');
        $this->load->view('front/profile',$data);
    }
}