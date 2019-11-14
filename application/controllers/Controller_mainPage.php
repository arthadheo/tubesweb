<?php class Controller_mainPage extends CI_Controller {
    public function __construct () {
        parent ::__construct();
    }

    public function index () {
        //load view footer
        $this->load->view("templates/header");
        $this->load->view("main/main_page");
        $this->load->view("templates/footer");

    }

    public function main () {
        //load view footer
        //$this->load->view("templates/header");
        $this->load->view("main/belanja");
        //$this->load->view("templates/footer");

    }
}