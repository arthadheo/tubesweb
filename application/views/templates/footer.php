<div class="footer-basic">
        <footer>
            <div style="font-size: 24px; text-align: center; padding-bottom: 10px"> Contact Us</div>
            <ul class="list-inline">
                <li class="list-inline-item btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Email</li>
                <li class="list-inline-item btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Whatsapp</li>
                <li class="list-inline-item btn btn-info btn-lg"><a href="<?php echo base_url('/tentangkami')?>">About</a></li>
            </ul>
            <p class="copyright">Groceria © 2019</p>
        </footer>
          <!-- MockUp Modal wa --> 
          <!-- Modal HTML -->
          <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document"	>
                  <div class="modal-content">
                      <div class="modal-footer">
                      	<div style="width: 100%">
                  			<h5 style="text-align: center">
                              Saya ingin menanyakan lebih lanjut
                  			</h5>
	                          <form action="<?php echo base_url(); ?>Mainpage/send_wa" method="POST" enctype='multipart/form-data'>
							  	<div class="form-group">
					                <label class=" zm-font-bolder zm-color-dark" for="name">Nama Lengkap</label>
					                <input type="text" autocomplete="off" class="form-control"
					                id="name" name="nameContact" required>
					            </div>
					          	<div class="form-group">
				                    <label class="zm-font-bolder zm-color-dark" for="NP">Nomor pemesanan</label>
				                    <input type="text" autocomplete="off" class="form-control"
				                    id="nomorpemesanan" name="NPContact" required>
				              	 </div>
				              	<div class="form-group"> 
				                    <label class="zm-font-bolder zm-color-dark" for="institusi">Alasan</label>
				                    <input type="text" autocomplete="off" class="form-control" 
				                    id="alasan" name="alasanContact" required>
				              	 </div>
				              	 <div class="form-group zm-pb-10 zm-pt-20"> 
				              	<button class="btn" style="background-color: grey; color: white;" type="submit">KONTAK KAMI</button>
				              	</div>
				              </form>
                      	</div>
                      </div>
                  </div>
              </div>
          </div>
<!-- /MockUp Modal -->

<!-- MockUp Modal email --> 
          <!-- Modal HTML -->
          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document"	>
                  <div class="modal-content">
                      <div class="modal-footer">
                      	<div style="width: 100%">
                  			<h5 style="text-align: center">
                              Saya ingin menanyakan lebih lanjut
                  			</h5>
                              <?php echo $this->session->flashdata('alasan'); ?>
	                          <form action="<?php echo base_url(); ?>Mainpage/send_email" method="POST" enctype='multipart/form-data'>
							  	<div class="form-group">
					                <label class=" zm-font-bolder zm-color-dark" for="name">Nama Lengkap</label>
					                <input type="text" autocomplete="off" class="form-control"
					                id="name" name="nameContact" required>
					            </div>
					          	<div class="form-group">
				                    <label class="zm-font-bolder zm-color-dark" for="NP">Nomor pemesanan</label>
				                    <input type="text" autocomplete="off" class="form-control"
				                    id="nomorpemesanan" name="NPContact" required>
				              	 </div>
                                   <div class="form-group">
                                    <label class="zm-font-s_16 zm-font-500 zm-font-bold" for="email">Email</label>
                                    <input type="text" autocomplete="off" class="form-control"  
                                    id="email" name="emailContact" aria-describedby="emailHelp" 
                                    required>
                                </div>
				              	<div class="form-group"> 
				                    <label class="zm-font-bolder zm-color-dark" for="institusi">Alasan</label>
				                    <input type="text" autocomplete="off" class="form-control" 
				                    id="alasan" name="alasanContact" required>
				              	 </div>
				              	 <div class="form-group zm-pb-10 zm-pt-20"> 
				              	<button class="btn" style="background-color: grey; color: white;" type="submit">KONTAK KAMI</button>
				              	</div>
				              </form>
                      	</div>
                      </div>
                  </div>
              </div>
          </div>
<!-- /MockUp Modal -->
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- UNTUK CART -->
    <script>
        function deleteCart(id){
        
        var x= new XMLHttpRequest();
        x.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
                     document.getElementById(id).innerHTML = this.responseText;
            }

        }
        x.open("GET", "<?php echo base_url()?>/cart/deleteCart/"+id,true);
        x.send();
        }
        function setTotal(){
            var x= new XMLHttpRequest();
            x.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("total").innerHTML = this.responseText;
                }
                
            }
            x.open("GET", "<?php echo base_url()?>/cart/setTotal",true);
            x.send();
        }
        function addQty(id){
            var x= new XMLHttpRequest();
            x.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(id+"-kuantitas").innerHTML = this.responseText;
                }
                
            }
            x.open("GET", "<?php echo base_url()?>/cart/addQty/" +id,true);
            x.send();

        }
        function minQty(id){
            var x= new XMLHttpRequest();
            x.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(id+"-kuantitas").innerHTML = this.responseText;
                    if(this.responseText == 0){
                        deleteCart(id);
                    }
                }
                
            }
            x.open("GET", "<?php echo base_url()?>/cart/minQty/" +id,true);
            x.send();
            

        }

        function totalItem(id){
            
            var x= new XMLHttpRequest();
            x.onreadystatechange = function(){
                
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(id+"-total").innerHTML = this.responseText;
            
                }
                
            }
            x.open("GET", "<?php echo base_url()?>/cart/totalItem/" +id,true);
            x.send();

        }
    </script>
    <!-- SAMPAI SINI -->
    <script>

        function addtocart(id){
            console.log(id);
            var x= new XMLHttpRequest();
            x.open("GET", "<?php echo base_url()?>/mainpage/addCart/" +id,true);
            x.send();

        }
        function cartKosong(){
            alert("Tidak ada barang di keranjang");
        }

    </script>
    <script>
        var ongkir;
        var total;

        function createInvoice(){

            $("input[name='shipping']").change(function(){

                var e = document.getElementById("city");
                var value = e.options[e.selectedIndex].value;
                ongkir = value * this.value;
                total = ongkir + <?php echo $total?>;
                
            });

            var x= new XMLHttpRequest();
            x.onreadystatechange = function(){
                
                if (this.readyState == 4 && this.status == 200) {

                    document.getElementById("invoice").innerHTML = this.responseText;
            
                }
                
            }
            x.open("GET", "<?php echo base_url()?>/checkout/createInvoice/"+ongkir+"/"+total,true);
            x.send();
           
        }

        $("input[name='shipping']").change(function(){

            var e = document.getElementById("city");
            var value = e.options[e.selectedIndex].value;
            ongkir = value * this.value;
            total = ongkir + <?php echo $total?>;

            document.getElementById('ongkir').innerHTML = "Rp " + numberWithCommas(ongkir);
            document.getElementById('total').innerHTML = "Rp " + numberWithCommas(total);

        });

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        var kosong = document.getElementById("kosong");

            kosong.addEventListener('click', function(){
                alert('Tidak ada barang di keranjang');
            });
        
    </script>

    <script>
        function showResult(str){
            if (str.length==0) {
                document.getElementById("livesearch").innerHTML="";
                document.getElementById("livesearch").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                document.getElementById("livesearch").innerHTML=this.responseText;
                document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                }
            }

            xmlhttp.open("GET","<?php echo base_url()?>/mainpage/livesearch/"+str,true);
            xmlhttp.send();
            }
        
    </script>   

</body>

</html>