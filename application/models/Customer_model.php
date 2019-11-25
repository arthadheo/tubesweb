<?php

class Customer_model extends CI_Model{

    private $_table = "Customer";

    public $email;
    public $password;
    public $fullname;
    public $alamat;
    public $phone;
    public $cart_id = null;

    public function signUp_rules()
    {
        return [

            ['field' => 'fullname',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required|is_unique[Customer.email]',
            'errors' => [
                'is_unique' => 'This email has already registered']
            ],    

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'phone',
            'label' => 'Phone',
            'rules' => 'required|numeric'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required']

        ];
    }

    public function signIn_rules()
    {
        return [

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required']

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getAccount($email, $password)
    {
        $this->db->where("email", $email);
        $this->db->where("password", $password);
        return $this->db->get($this->_table)->row_array();

    }


    public function daftar()
    {
        $post = $this->input->post();

        $this->email = $post["email"];
        $this->fullname = $post["fullname"];
        $this->password = $post["password"];
        $this->alamat = $post["alamat"];
        $this->phone = $post["phone"];
        $this->db->insert($this->_table, $this);
    }

    public function login()
    {
        $post = $this->input->post();
        $this->email = $post["email"];
        $this->password = $post["password"];
        
        $customers = $this->getAccount($this->email, $this->password);

        if(empty($customers)){
            echo('<script>alert("Password and Username Salah")</script>');
        }
        else{

            $_SESSION['fullname'] = $customers['fullname'];
            $_SESSION['email'] = $customers['email'];
            $_SESSION['alamat'] = $customers['alamat'];
            $_SESSION['phone'] = $customers['phone'];

        }
        
    }

}


?>