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
        $this->load->model('User_model'); 
        $this->load->model('Store_model');
        $this->load->model('Menu_model');  
        $this->load->model('Category_model');
        $this->load->model('Order_model');
    }

    public function index() {
        $data['countUser'] = $this->User_model->countUser();
        $data['countStore'] = $this->Store_model->countStore();
        $data['countDish'] = $this->Menu_model->countDish();
        $data['countCategory'] = $this->Category_model->countCategory();
        $data['countOrders'] = $this->Order_model->countOrders();
        $data['countPendingOrders'] = $this->Order_model->countPendingOrders();
        $data['countDeliveredOrders'] = $this->Order_model->countDeliveredOrders();
        $data['countRejectedOrders'] = $this->Order_model->countRejectedOrders();

        $dishReport = $this->Admin_model->dishReport();
        $data['dishReport'] = $dishReport;
       $this->load->view('admin/partials/header');
       $this->load->view('admin/dashboard', $data);
    }
    public function dishreport() {
        
        $dishReport = $this->Admin_model->dishReport();
        $data['dishReport'] = $dishReport;
       $this->load->view('admin/dishreport', $data);
               
    }
}