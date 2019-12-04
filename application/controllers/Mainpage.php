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

    function send_wa() 
    {
        $name_input   = $this->input->post('nameContact');
        $nomorpemesanan_input  = $this->input->post('NPContact');
        $alasan_input    = $this->input->post('alasanContact');
    
         /*Redirect the user to some site*/ 
         redirect('https://api.whatsapp.com/send?phone=6289654784312&text=Nama:%20'.$name_input.'%0ANomor%20Pemesanan:%20'.$institusi_input.'%0AAlasan:%20'.$email_input.'');
    }

    function send_email() {
        $nama     = $this->input->post('nameContact');
        $nomorpemesanan= $this->input->post('NPContact');
        $emailC    = $this->input->post('emailContact');
        $alasan      = $this->input->post('alasanContact');
       
        //Server settings
          // Konfigurasi email
        $config = [
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'protocol'  => 'smtp',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'hmikomputerup@gmail.com',    // Ganti dengan email gmail kamu
               'smtp_pass' => 'ilmukomputer1617',      // Password gmail kamu
               'smtp_port' => 465,
               'crlf'      => "\r\n",
               'newline'   => "\r\n"
           ];
    
        // Load library email dan konfigurasinya
        $this->load->library('email', $config);
    
        // Email dan nama pengirim
        $this->email->from($emailC, $nomorpemesanan.' | '.$nama);
    
        // Email penerima
        $this->email->to('madza204@gmail.com'); // Ganti dengan email tujuan kamu
    
        // Subject email
        $this->email->subject('Website Groceria | '.$nomorpemesanan);
    
        // Isi email
        $this->email->message($alasan);
    
        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            $this->session->set_flashdata('alasan',
            '<div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Terima Kasih. !</strong> Pesan Anda telah terkirim.
            </div>');
            redirect('Mainpage');
        } else {
            $this->session->set_flashdata('alasan',
            '<div class="alert alert-danger alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Oh no!</strong> Sepertinya ada kesalahan dalam mengirim pesan, silahkan coba lagi.
            </div>');
          redirect('Mainpage');
        }
      }

}