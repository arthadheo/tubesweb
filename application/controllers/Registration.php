<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("customer_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view("templates/header");
        $this->load->view("main/daftarakun");
        $this->load->view("templates/footer");
    }

    public function add()
    {
        $customer = $this->customer_model;
        $validation = $this->form_validation;
        $validation->set_rules($customer->rules());

        if ($validation->run()) {
            $customer->daftar();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        echo $customer->nama;

        //$this->load->view("admin/product/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $customer = $this->customer_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["customer"] = $product->getByEmail($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->product_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}