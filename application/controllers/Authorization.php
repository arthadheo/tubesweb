<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization extends CI_Controller
{
    var $status = true;
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Customer_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        if(!$this->status){
            $this->load->view("templates/header");
            $this->load->view("main/authorization");
            $this->load->view("main/form_signin");
            $this->load->view("templates/footer");
            echo('<script>alert("Password and Username Salah")</script>');

        }
        else{
            $this->load->view("templates/header");
            $this->load->view("main/authorization");
            $this->load->view("main/form_signin");
            $this->load->view("templates/footer");
        }
        
    }

    public function SignUp()
    {
        $customer = $this->Customer_model;
        $validation = $this->form_validation;
        $validation->set_rules($customer->signUp_rules());

        if ($validation->run() == false) {
            $this->load->view("templates/header");
            $this->load->view("main/authorization");
            $this->load->view("main/form_signup");
            $this->load->view("templates/footer");
        }
        else{
            $customer->daftar();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('Authorization');

        }
    }

    public function SignIn()
    {
        $customer = $this->Customer_model;
        $validation = $this->form_validation;
        $validation->set_rules($customer->signIn_rules());

        if ($validation->run() == false) {
            $this->load->view("templates/header");
            $this->load->view("main/authorization");
            $this->load->view("main/form_signin");
            $this->load->view("templates/footer");
        }
        else{

            $this->status = $customer->login();

            if($this->status){
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect();
            }
            else{

                $this->session->set_flashdata('error', 'Password Username Salah');
                redirect('Authorization');

            }
            

        }
    }

    public function SignOut(){

        $_SESSION['fullname'] = '';
        $_SESSION['email'] = '';
        $_SESSION['alamat'] = '';
        $_SESSION['phone'] = '';

        redirect('Authorization');
    }


}