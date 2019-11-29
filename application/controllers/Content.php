<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Content extends CI_Controller {

    public function __construct () {
        parent ::__construct();
    }


    public function item ($id) {

        $data['id'] = $id;
        $this->load->view("templates/header");
        $this->load->view("main/content_page", $data);
        $this->load->view("templates/footer");

    }

    

}