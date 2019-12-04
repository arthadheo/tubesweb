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
                           
                            <button class="btn btn-primary text-left border-white shadow-none d-lg-flex justify-content-lg-center align-items-xl-center" type="button"onclick ="addtocart('.$row->id_barang.')"  style="height: 35px;font-size: 14px;width: 90%;margin-left: 12px;background-color: #ea4335;">add to cart&nbsp;<i class="fa fa-cart-plus" style="font-size: 16px;"></i>
                            </button>
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