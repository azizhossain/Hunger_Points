<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class About_Us extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    public function index() {
        $this->load->view('front/partials/header');
        $this->load->view('front/about_us');
        $this->load->view('front/partials/footer');
    }
}