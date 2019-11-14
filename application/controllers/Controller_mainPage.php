<?php class Controller_mainPage extends CI_Controller {
    public function __construct () {
        parent ::__construct();
    }

    public function index () {
        //load view footer
        $this->load->view("header");
        $this->load->view("main_page");
        $this->load->view("footer");

    }
}