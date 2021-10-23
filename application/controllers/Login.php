<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('front/login');
    }
    public function authenticate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('usersname','Username', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');

         if($this->form_validation->run() == true) {
             $usersname = $this->input->post('usersname');
             $user = $this->User_model->getByUsername($usersname);
             if(!empty($user)) {
                $password = $this->input->post('password');
                if( password_verify($password, $user['password']) == true) {

                    $userArray['user_id'] = $user['user_id'];
                    $userArray['usersname'] = $user['usersname'];
                    $this->session->set_userdata('user', $userArray);
                    redirect(base_url().'home/index');
                } else {
                    $this->session->set_flashdata('msg', 'Either username or password is incorrect');
                    redirect(base_url().'login/index');
                }
             } else {
                $this->session->set_flashdata('msg', 'Either username or password is incorrect');
                redirect(base_url().'login/index');
             }
             //success
         } else {
             //Error
            $this->load->view('front/login');
         }
    }
    public function logout() {
        $this->session->unset_userdata('user');
        redirect(base_url().'login/index');
    }
}