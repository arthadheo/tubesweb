<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Customer_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view("templates/header");
        $this->load->view("main/daftarakun");
        $this->load->view("templates/footer");
    }

    public function SignUp()
    {
        $customer = $this->Customer_model;
        $validation = $this->form_validation;
        $validation->set_rules($customer->signUp_rules());

        if ($validation->run() == false) {
            $this->load->view("templates/header");
            $this->load->view("main/daftarakun");
            $this->load->view("templates/footer");
        }
        else{
            $customer->daftar();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect();

        }
    }

    public function SignIn()
    {
        $customer = $this->Customer_model;
        $validation = $this->form_validation;
        $validation->set_rules($customer->signIn_rules());

        if ($validation->run() == false) {
            $this->load->view("templates/header");
            $this->load->view("main/main_page");
            $this->load->view("templates/footer");
        }
        else{

            $data = $customer->login();
            
            $this->load->view("templates/header");
            $this->load->view("main/main_page");
            $this->load->view("templates/login_succes");
            $this->load->view("templates/footer");
        }
    }

    
}