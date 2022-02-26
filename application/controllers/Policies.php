<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Policies extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    public function index() {
        $this->load->view('front/partials/header');
        $this->load->view('front/policies');
        $this->load->view('front/partials/footer');
    }
}