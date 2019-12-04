<div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Groceria © 2019</p>
        </footer>
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
            var x= new XMLHttpRequest();
            x.open("GET", "<?php echo base_url()?>/mainpage/addCart/" +id,true);
            x.send();

        }
    </script>


</body>

</html>