<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Mainpage extends CI_Controller {


    public function __construct () {
        parent ::__construct();

    }

    public function index () {
        //load view footer
        $this->load->view("templates/header");
        $this->load->view("main/main_page");
        $this->load->view("templates/footer");

    }

    public function belanja () {

        //load view footer
        $this->load->view("templates/header");
        $this->load->view("main/belanja");
        $this->load->view("templates/footer");

    }

    public function MyCart()
    {   
        $this->load->view("templates/header");
        $this->load->view("main/mycart");
        $this->load->view("templates/footer");
    }

    public function add_to_cart($id){
        
        echo('<script>alert("'.$id.'")</script>');
        $this->db->query("INSERT INTO `cart_item` (id_cart_item, id_barang,kuantitas,id_costumer) VALUES (1,'$id',1,101)");
        

    }

    public function TentangKami(){

        $this->load->view("templates/header");
        $this->load->view("main/tentangkami");
        $this->load->view("templates/footer");
    }
    

    public function Checkout()
    {   
        $this->load->view("templates/header");
        $this->load->view("main/checkout");
        $this->load->view("templates/footer");
    }

    public function InputResep()
    {   
        $this->load->view("templates/header");
        $this->load->view("main/resep");
        $this->load->view("templates/footer");
    }

    public function InputTutorial()
    {   
        $this->load->view("templates/header");
        $this->load->view("main/menulis_resep");
        $this->load->view("templates/footer");
    }

}