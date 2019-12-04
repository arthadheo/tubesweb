<?php

class Cart_model extends CI_Model{



    public function addCartItem($id, $email)
    {   
        $barangAda = false;
        $listBarang = $this->db->query("SELECT  id_barang FROM `cart_item` WHERE id_customer = '$email'")->result();
        foreach($listBarang as $row){
            if($id == $row->id_barang){
                $barangAda = true;
                break;
            }
        }

        if($barangAda){
            $this->db->query("UPDATE `cart_item` SET `kuantitas` = `kuantitas`+ 1 WHERE id_barang = '$id' AND id_customer = '$email'");    
        }
        else{
            $this->db->query("INSERT INTO `cart_item` (id_barang,kuantitas,id_customer) VALUES ('$id',1,'$email')");
        }

    }

    public function getAllCart($email){

        $listBarang = $this->db->query("SELECT barang.nama_barang,barang.img_barang,
        barang.harga,cart_item.kuantitas
        FROM barang 
        INNER JOIN cart_item 
        ON barang.id_barang =barang.id_barang;")->result();

        return $listBarang;
    }

}


?>