<?php
class Checkout extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->load->view("templates/header");
        $this->load->view("main/checkout");
        $this->load->view("templates/footer");
    }
    
}

	