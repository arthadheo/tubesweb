<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Mainpage extends CI_Controller {


    public function __construct () {
        parent ::__construct();
        $this->load->model("Barang_model");

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


    public function addCart($id){

        if(isset($_SESSION['email'])){

            if($_SESSION['email'] != ''){
                $barang=$this->Barang_model;
                $barang->addCartItem($id,$_SESSION['email']);
                redirect();
            }else{
                redirect('Authorization/SignIn');
            }
            
        }
        else{
            redirect('Authorization/SignIn');
        }
        

        

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