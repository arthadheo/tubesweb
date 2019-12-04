<?php
class Checkout extends CI_Controller{
	
	function __construct(){
        parent::__construct();
        $this->load->model("Cart_model");

	}

	function index(){

        $cart=$this->Cart_model;
        $data['total'] = $cart->getTotal();
        $this->load->view("templates/header");
        $this->load->view("main/checkout", $data);
        $this->load->view("templates/footer", $data);

    }

    function createInvoice($ongkir, $total){
        
        $virtual = rand();

        $cart=$this->Cart_model;
        $cart->clearCart();

        echo ('<div class="card text-center">
        <div class="card-header">
          Segera Lakukan Pembayaran
        </div>
        <div style = "background-color:#f66464"; class="card-body">
          <h3 style = "margin-bottom:20px"; class="card-title">Invoice</h3>
          <h4 style = "margin-bottom:20px";>Rp '.number_format($total).'</h4>
          <a style = "color:#ffffff;" class="btn btn-primary">'. $virtual.'</a>
        </div>
        <div class="card-footer text-muted">
          Terima Kasih 
        </div>
      </div>');




    }
    
}

	