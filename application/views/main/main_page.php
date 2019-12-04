<body style="height: 983;opacity: 1;font-size: 24;">
    
    <div class="text-center">
        <div class="container">
            <div class="row">
                <div class="col"><img src="<?php echo base_url('assets/img/image.png')?>" style="width: 100%;height: 100%;"></div>
            </div>
        </div>
    </div>
    <div class="container" style="height: 10px;width: 100%;"></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="width: 100%;height: 200px;"><img style="width: 100%;height: 200px;" src="<?php echo base_url('assets/img/image.png')?>"></div>
                <div class="col-md-6"><img style="width: 100%;height: 200px;" src="<?php echo base_url('assets/img/image.png')?>"></div>
            </div>
        </div>
    </div>  
    <div class="container" style="max-width: 100%;width: 100%;height: 10px;"></div>
    
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <?php
            $query = $this->db->query('SELECT nama_barang, harga, img_barang, id_barang FROM barang' );
            foreach($query->result() as $row){
                $this->load->database();
            
                    echo '
                    <div class="col-md-3" style="width: 100%;height: 330px; margin-bottom : 10px;">
                        <div class="card" style="width: 100%;height: 100%;margin-right: 0px;">
                        <img class="card-img-top w-100 d-block" style="width: 100%;height: 220px;" src="'.base_url().'assets/img/market/' . $row->img_barang.'">
                            <h4 style="font-size: 14px;margin-left: 5px;">'. $row->nama_barang . '</h4>
                            <p style="margin-left: 5px;margin-bottom: 5px;color: rgb(0,0,0);">Rp. '. number_format($row->harga) . '</p>
                            <form action='. base_url("mainpage/addCart/$row->id_barang").'>
                            <button class="btn btn-primary text-left border-white shadow-none d-lg-flex justify-content-lg-center align-items-xl-center" type="submit"  style="height: 35px;font-size: 14px;width: 90%;margin-left: 12px;background-color: #ea4335;">add to cart&nbsp;<i class="fa fa-cart-plus" style="font-size: 16px;"></i></button>
                            </form>
                            </div>
                    </div>';
                }?>
            </div>
        </div>  
    </div>

        
    </div>
    <div class="footer-basic">
