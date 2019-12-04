<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Mainpage extends CI_Controller {


    public function __construct () {
        parent ::__construct();
        $this->load->model("Cart_model");
        
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
                $cart=$this->Cart_model;
                $cart->addCartItem($id,$_SESSION['email']);
                
            }else{
                redirect('Authorization/SignIn');
            }
            
        }
        else{
            redirect('Authorization/SignIn');
        }
        

        

    }
    public function detail($id){
        
        $data['id'] = $id;

        $this->load->view("templates/header");
        $this->load->view("main/detailbrang",$data);
        $this->load->view("templates/footer");
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

    public function Resep()
    {   
        $this->load->view("templates/header");
        $this->load->view("main/resep");
        $this->load->view("templates/footer");
    }

    public function Tutorial()
    {   
        $this->load->view("templates/header");
        $this->load->view("main/menulis_tutorial");
        $this->load->view("templates/footer");
    }

    public function Listresep()
    {   
        $this->load->view("templates/header");
        $this->load->view("main/listresep");
        $this->load->view("templates/footer");
    }

    public function livesearch($q)
    {
            
            $xmlDoc=new DOMDocument();
            $xmlDoc->load("links.xml");

            $x=$xmlDoc->getElementsByTagName('ROW');
            //lookup all links from the xml file if length of q>0
            if (strlen($q)>0) {
            $hint="";
            for($i=0; $i<($x->length); $i++) {
                $y=$x->item($i)->getElementsByTagName('nama_barang');
                $z=$x->item($i)->getElementsByTagName('id_barang');
                if ($y->item(0)->nodeType==1) {
                //find a link matching the search text
                if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
                    if ($hint=="") {
                    $hint="<a href='".base_url()."mainpage/detail/".
                    $z->item(0)->childNodes->item(0)->nodeValue .
                    "' target='_blank'>" .
                    $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                    } else {
                    $hint=$hint . "<br /><a href='".  base_url()."/mainpage/detail/".
                    $z->item(0)->childNodes->item(0)->nodeValue .
                    "' target='_blank'>" .
                    $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                    }
                }
                }
            }
            }

            // Set output to "no suggestion" if no hint was found
            // or to the correct values
            if ($hint=="") {
            $response="no suggestion";
            } else {
            $response=$hint;
            }

            //output the response
            echo $response;

                }

   
}