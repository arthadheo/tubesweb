<body style="height: 983;opacity: 1;font-size: 24;">
    
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <?php
            $url = base_url();
            $query = $this->db->query("SELECT * FROM barang WHERE id_barang LIKE '$id%'");
            foreach($query->result() as $row){
                $this->load->database();
            
                    echo '
                    <div class="col-md-3 wrapper" style="width: 100%;height: 330px; margin-bottom : 10px;">
                        <div class="card" style="width: 100%;height: 100%;margin-right: 0px;">
                        <a href='.base_url("mainpage/detail/$row->id_barang").'>
                        <img class="card-img-top w-100 d-block" style="width: 100%;height: 220px;" src="'.$url.'assets/img/market/' . $row->img_barang.'" >
                        </a>
                            <h4 style="font-size: 14px;margin-left: 5px;">'. $row->nama_barang . '</h4>
                            <p style="margin-left: 5px;margin-bottom: 5px;color: rgb(0,0,0);">Rp.'.number_format($row->harga) . '</p>
                           
                            <div class="row d-xl-flex justify-content-xl-center" style="margin-left: 0px;margin-right: 0px;width: 100%;">
                            <div class="col d-xl-flex justify-content-xl-center" style="width: 100%;">
                            <div id="Success-Button" style="width: 200px;"><button class="btn btn-success" data-toggle="modal" onclick ="addtocart('.$row->id_barang.')" data-target="#succesalert" type="button"  style="width: 200px;height: 35px;background-color: rgb(234,67,53);font-size: 14px;">add to cart&nbsp;<i class="fa fa-cart-plus" style="font-size: 16px;"></i></button>
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
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                        </div>
                    </div>';
                }?>
            </div>
        </div>  
    </div>

        
    </div>
    <div class="footer-basic"></div>

<script>
$('.add-to-cart').on('click', function () {
        var cart = $('.shopping-cart');
        var imgtodrag = $(this).parent('.card').find("img").eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
                .css({
                'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '100'
            })
                .appendTo($('body'))
                .animate({
                'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
            }, 1000, 'easeInOutExpo');
            
            setTimeout(function () {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                    'height': 0
            }, function () {
                $(this).detach()
            });
        }
    });
</script>