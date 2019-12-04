<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Barang_model");
    }

    public function index()
    {   
        if(isset($_SESSION['email'])){

            if($_SESSION['email'] != ''){
                $barang=$this->Barang_model;
                $data['list_cart'] = $barang->getAllCart($_SESSION['email']);
                $this->load->view("templates/header");
                $this->load->view("main/mycart", $data);
                $this->load->view("templates/footer");
            }else{
                redirect('Authorization/SignIn');
            }
            
        }
        else{
            redirect('Authorization/SignIn');
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

            $data = $customer->login();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect();

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