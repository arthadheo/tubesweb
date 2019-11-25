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
            //$customer->daftar();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            //redirect();

        }
    }

    // public function edit($id = null)
    // {
    //     if (!isset($id)) redirect('admin/products');
       
    //     $customer = $this->customer_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($product->rules());

    //     if ($validation->run()) {
    //         $product->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["customer"] = $product->getByEmail($id);
    //     if (!$data["product"]) show_404();
        
    //     $this->load->view("admin/product/edit_form", $data);
    // }

    // public function delete($id=null)
    // {
    //     if (!isset($id)) show_404();
        
    //     if ($this->product_model->delete($id)) {
    //         redirect(site_url('admin/products'));
    //     }
    // }
}