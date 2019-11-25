<?php

class Customer_model extends CI_Model{

    private $_table = "Customer";

    public $email;
    public $password;
    public $name;
    public $alamat;
    public $nomortelepon;
    public $cart;

    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'E-mail',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],
            
            ['field' => 'phone',
            'label' => 'Telepon',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getByEmail($email)
    {
        return $this->db->get_where($this->_table, ["email" => $email])->row();
    }

    public function setCart($cart)
    {
        return $this->db->get_where($this->_table, ["cart_id" => $cart])->row();
    }

    public function daftar()
    {
        $post = $this->input->post();
        $this->email = $post["email"];
        $this->name = $post["name"];
        $this->password = $post["password"];
        $this->alamat = $post["alamat"];
        $this->nomortelepon = $post["phone"];
        //$this->alamat = $post["alamat"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->email = $post["email"];
        $this->name = $post["fullname"];
        $this->alamat = $post["alamat"];
        $this->nomortelepon = $post["phone"];
        $this->cart = $post["cart_id"];

        $this->db->update($this->_table, $this, array('email' => $post['email']));
    }

}


?>