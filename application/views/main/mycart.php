


<?php
    $total =0;
?>
<div class="container" style="height: 60px;"></div>
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
        <div class="container" id="'.$row->id_barang.'">
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
                <div class="col-md-3 d-xl-flex justify-content-xl-center align-items-xl-center">
                    <button class="btn btn-primary text-center border rounded-circle border-white d-xl-flex justify-content-xl-center" type="button" style="background-color: rgb(234,67,53);margin-left: 0px;margin-right: 20px;width: 36px;height: 36px;">+</button>
                    <h5
                        class="text-break">'.$row->kuantitas.'</h5><button class="btn btn-primary text-center border rounded-circle border-white d-xl-flex justify-content-xl-center align-items-xl-center" type="button" style="background-color: rgb(234,67,53);margin-left: 20px;margin-right: 0px;width: 36px;height: 36px;">-</button></div>
            <div class="col-md-3 d-xl-flex justify-content-xl-center align-items-xl-center">
                <h5 class="text-break">Rp '. number_format($row->harga).'</h5>
            </div>
            <div class="col-md-3 d-xl-flex justify-content-xl-center align-items-xl-center">
                <h5class="text-break text-left d-xl-flex align-items-xl-center" style="margin-right: 35px;">Rp. '. number_format($row->harga*$row->kuantitas).'</h5>
                
                <button class="btn btn-primary border rounded-circle border-white d-xl-flex justify-content-xl-center align-items-xl-center"  onclick="deleteCart('.$row->id_barang.');setTotal();" type="button" style="background-color: rgb(234,67,53);width: 30px;height: 30px;"><i class="fa fa-trash" style="width: 12px;height: 12px;"></i></button>
                
            </div>
        </div>
    </div>
        
            ';
        $total = $total+$row->harga;
        }
         ?>

<div style="width: 100&amp;;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-xl-flex justify-content-xl-end align-items-xl-center" style="width: 80%;">
                    <h4 class="text-left d-xl-flex justify-content-xl-end">Total Harga Barang :</h4>
                </div>
                <div class="col-md-6 d-xl-flex justify-content-xl-start">
                    <h4 class="text-left d-xl-flex justify-content-xl-end"  style="color: rgb(234,67,53);">Rp  <span id="total"> <?php echo number_format($total)?></span></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-xl-flex justify-content-xl-center" style="width: 100%;margin-top: 20px;">
    <button class="btn btn-primary border-white" type="button" style="font-size: 24;background-color: rgb(234,67,53);height: 50px;width: 200px;">Checkout</button></div>
 
