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

    public function Registration(){
        $this->load->view("templates/header");
        $this->load->view("main/daftarakun");
        $this->load->view("templates/footer");
    }

    public function belanja () {
        //load view footer
        $this->load->view("templates/header");
        $this->load->view("main/belanja");
        $this->load->view("templates/footer");

    }

}