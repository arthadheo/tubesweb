
<?php
    $query = $this->db->query("SELECT * FROM barang where id_barang = '$id'")->result();

    foreach($query as $row){

    echo '

        <div class="container" style="height: 40px;"></div>
            <div class="container">
                <h3 style="height: 40px;">'.$row->nama_barang.'</h3>
            </div>
            <div style="width: 100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"><img src="'.base_url().'assets/img/market/' . $row->img_barang.'" style="width: 220px;"></div>
                        <div class="col-md-6">
                            <p>'.$row->deskripsi.'<br></p>
                            <h6>Rp. '.number_format($row->harga).'</h6>
                            <h6 class="d-inline-block" style="width: 35px;">'.number_format($row->kuantitas).'</h6>
                            <h6 class="d-inline-block" style="width: 45%;">'.$row->satuan.'</h6>
                            <div id="Success-Button" style="width: 200px;"><button class="btn btn-success" data-toggle="modal" data-target="#succesalert" type="button" onclick ="addtocart('.$row->id_barang.')" style="width: 200px;height: 35px;background-color: rgb(234,67,53);font-size: 14px;">add to cart&nbsp;<i class="fa fa-cart-plus" style="font-size: 16px;"></i></button>
        <div class="modal fade"
            role="dialog" tabindex="-1" id="succesalert">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body d-xl-flex align-items-xl-center" id="successalert" style="color: green;height: 300px;">
                        <div class="d-xl-flex justify-content-xl-center" style="width: 100%;color: rgb(222,49,11);">
                            <div class="row">
                            <div class="col-xl-4 d-block d-xl-flex justify-content-xl-center align-items-xl-center" style="font-size: 80px;width: 100%;"><i class="fa fa-check-circle" style="width: 100%;"></i></div>
                            </div>
                            <div class="row">
                                <div class="col d-block d-xl-flex justify-content-xl-start align-items-xl-center" style="width: 100%;"><span class="d-xl-flex" style="font-size: 25px;"><strong> Sukses! </strong>&nbsp;Barang ditambahkan</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>
                    </div>
                </div>
            </div>
    ';
    }
?>