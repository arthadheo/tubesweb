<div class="container" style="height: 40px;"></div>
    <div style="width: 100%;background-color: #f2d2d2;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="text-center">&nbsp;Barang</h4>
                </div>
                <div class="col-md-3">
                    <h4 class="text-center">Jumlah</h4>
                </div>
                <div class="col-md-3">
                    <h4 class="text-center">Harga</h4>
                </div>
                <div class="col-md-3">
                    <h4 class="text-center">&nbsp;Total</h4>
                </div>
            </div>
        </div>
    </div>
    
        <?php foreach($list_cart as $row){
            echo '
    <div style="width: 100%;">
        <div class="container">
            <div class="row" style="height: 120px;margin-bottom: 15px;">
                <div class="col-md-3 text-center d-xl-flex justify-content-xl-left align-items-xl-center" >
                    <div class="row">
                        <div class="col"><img class="d-inline d-xl-flex" src="'.base_url().'assets/img/market/' . $row->img_barang.'" style="width: 100px;height: 100px;">
                            
                        </div>
                    </div>
                    <div class="row" style="height: 16px;">
                                <div class="col">
                                    <p>'.$row->nama_barang.'</p>
                                </div>
                            </div>
                </div>
                <div class="col-md-3 d-xl-flex justify-content-xl-center align-items-xl-center"><button class="btn btn-primary text-left border rounded-circle border-white d-xl-flex justify-content-xl-center" type="button" style="background-color: rgb(234,67,53);margin-left: 0px;margin-right: 20px;width: 36px;height: 36px;">+</button>
                    <h5
                        class="text-break">'.$row->kuantitas.'</h5><button class="btn btn-primary text-center border rounded-circle border-white d-xl-flex justify-content-xl-center align-items-xl-center" type="button" style="background-color: rgb(234,67,53);margin-left: 20px;margin-right: 0px;width: 36px;height: 36px;">-</button></div>
            <div class="col-md-3 d-xl-flex justify-content-xl-center align-items-xl-center">
                <h5 class="text-break">Rp '. number_format($row->harga).'</h5>
            </div>
            <div class="col-md-3 d-xl-flex justify-content-xl-center align-items-xl-center">
                <h5 class="text-break">Rp. '. number_format($row->harga*$row->kuantitas).'</h5>
            </div>
        </div>
    </div>
        
            ';
        }
         ?>
    