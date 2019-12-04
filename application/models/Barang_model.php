<?php

class Barang_model extends CI_Model{

    private $_table = "Customer";

    public $email;
    public $password;
    public $fullname;
    public $alamat;
    public $phone;
    public $cart_id = null;



    public function addCartItem($id, $email)
    {
        //$post = $this->input->post();
        $this->db->query("INSERT INTO `cart_item` (id_barang,kuantitas,id_costumer) VALUES ('$id',1,'$email')");

    }

}


?>