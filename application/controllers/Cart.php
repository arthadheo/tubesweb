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
    public function deleteCart($id){
        
        $this->db->query("DELETE FROM `cart_item` WHERE id_barang= '$id' ");
        
    }

    public function setTotal(){

        $email = $_SESSION['email'];
        $listBarang = $this->db->query("SELECT 
        barang.harga,cart_item.kuantitas
        FROM barang 
        INNER JOIN cart_item 
        ON barang.id_barang =cart_item.id_barang
        WHERE cart_item.id_customer ='$email'")->result();
        $total =0;
        foreach($listBarang as $row){
            $total = $total + ($row->harga * $row->kuantitas);
        }
        echo $total;
        
    }

}