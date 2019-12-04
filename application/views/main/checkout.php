<div class="container text-center" style="width: 100%;height: 60px;">
        <h2>Selesaikan orderanmu&nbsp;</h2>        
</div>
    <div class="container d-xl-flex justify-content-xl-center align-items-xl-center" style="width: 100%;">
        <img src="<?php echo base_url('assets/img/undraw_profile_data_mk6k%20(1).png')?>" style="width: 500px;height: 360px;"></div>
    <div  id = "invoice"style="width: 100%;">
        <div class="container" style="width: 100%;padding-right: 0px;padding-bottom: 30px;">
            <div class="row" style="background-color: #f9f9f9;width: 100%;padding-bottom: 30px;padding-top: 30px;">
                <div class="col-md-6" style="width: 100%;">
                    <h6>Kirim Ke</h6>
                    <div class="dropdown" style="width: 200px;">
                    <form method = "post">
                    <select id = 'city' name="city" class="browser-default custom-select">
                        <option value=20000>Jakarta Barat</option>
                        <option value=25000>Jakarta Timur</option>
                        <option value=15000>Jakarta Selatan</option>
                        <option value=25000>Jakarta Utara</option>
                        <option value=20000>Jakarta Pusat</option>
                    </select>
                    </form>
                    
                    </div>
                    <h6 style="margin-top: 20px;">Alamat Lengkap</h6>
                        <textarea placeholder = "Mohon isi alamat dengan lengkap"class="border rounded" style="width: 400px;height: 38px;"></textarea>
                    <h6 style="margin-top: 20px;">Pilih Kurir Pengiriman</h6>
                    <form method = "post">
                        <div class="form-check"><input name = "shipping" value = 1.5 class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1">UMX Shipping Regular</label></div>
                        <div class="form-check"><input name = "shipping" value = 1.7 class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1">UMX Shipping Kilat</label></div>
                        <div class="form-check"><input name = "shipping" value = 1.8 class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1">UMX Shipping Premier</label></div>
                    </form>
                    
                </div>
                <div class="col">
                    <h5 style="margin-bottom: 0px;">Summary Order</h5>
                    <p>Total biaya diperoleh dari total pembelian barang dan biaya pengirimian</p>
                    <div style="margin-top : 10px;width: 100%;">
                        <div class="row" style="height: 20px;">
                            <div class="col d-block" style="width: 45%;">
                                <h6>Harga Barang</h6>
                            </div>
                            <div class="col d-inline-block" style="width: 45%;">
                                <h6>Rp <?php echo number_format($total)?></h6>
                            </div>
                        </div>
                        <div class="row" style="height: 20px;margin-top: 5px;">
                            <div class="col d-block" style="width: 45%;">
                                <h6>Pengiriman</h6>
                            </div>
                            <div class="col d-inline-block" style="width: 45%;">
                                <h6 id = "ongkir">-</h6>
                            </div>
                        </div>
                        <div class="row" style="height: 20px;margin-top: 30px;">
                            <div class="col d-block" style="width: 45%;">
                                <h6>Total Biaya</h6>
                            </div>
                            <div class="col d-inline-block" style="width: 45%;">
                                <h6 id = "total">-</h6>
                            </div>
                        </div>
                        <h5 style="margin-top: 20px;">Bank Pembayaran</h5>
                        <select style="margin-top: 20px;" class="browser-default custom-select">
                                <option selected>Select the Bank</option>
                                <option value="Mandiri">Mandiri</option>
                                <option value="BNI">BNI</option>
                                <option value="Danamon">Danamon</option>
                                <option value="BCA">BCA</option>
                                <option value="BRI">BRI</option>
                        </select>
                    </div>
                    <div class="d-xl-flex align-items-xl-center" style="margin-top: 20px; width: 100%;padding-top: 15px;">
                        <div>
                            <Button onClick = "createInvoice()" type = 'Button'class="btn btn-primary border-white" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button" style="margin-bottom: 20px; background-color: rgb(234,67,53);">Get Virtual Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    