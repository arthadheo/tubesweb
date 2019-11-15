<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

class SignUP extends CI_Controller {
    public function __construct () {
        parent ::__construct();
    }

    public function index () {
        //load view footer
        $this->load->view("templates/header");
        $this->load->view("sign_up/overview");
        $this->load->view("templates/footer");

    }

    // public function main () {
    //     //load view footer
    //     //$this->load->view("templates/header");
    //     $this->load->view("main/belanja");
    //     //$this->load->view("templates/footer");

    // }
}