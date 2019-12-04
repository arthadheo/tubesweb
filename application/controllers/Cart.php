<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Cart_model");
    }

    public function index()
    {   
        if(isset($_SESSION['email'])){

            if($_SESSION['email'] != ''){
                $cart=$this->Cart_model;
                $data['list_cart'] = $cart->getAllCart($_SESSION['email']);
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

}