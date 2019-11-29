<a class="login-trigger fa fa-user" style="width: 24px;height: 24px;background-position: center;background-size: cover;font-size: 24px;" href="#" data-target="#login" data-toggle="modal"></a>
<div id="login" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button data-dismiss="modal" class="close">&times;</button>
                                    <h4 style="margin-bottom: 25px;">Account</h4>
                                    <label for="Name">Name</label>
                                    <div style="height: 38px;margin-bottom: 25px; padding:10px; background-color : #F9EFEF; border-radius: 15px;">
                                        <?php echo($_SESSION["fullname"]);?><br>
							        </div>
                                    <label for="Name">E-mail</label>
                                    <div style="height: 38px;margin-bottom: 25px; padding:10px; background-color : #F9EFEF; border-radius: 15px;">
                                        <?php echo($_SESSION["email"]);?><br>
							        </div>
                                    <label for="Name">Phone Number</label>
                                    <div style="height: 38px;margin-bottom: 25px; padding:10px; background-color : #F9EFEF; border-radius: 15px;">
                                        <?php echo($_SESSION["phone"]);?><br>
							        </div>
                                    <label for="Name">Alamat</label>
                                    <div style="height: 38px;margin-bottom: 25px; padding:10px; background-color : #F9EFEF; border-radius: 15px;">
                                        <?php echo($_SESSION["alamat"]);?><br>
							        </div>
                                    <form action = "<?php echo base_url('Authorization/SignOut')?>">
                                        <Button type = "submit" class="btn btn-primary btn-lg border rounded d-lg-flex justify-content-lg-center align-items-lg-center rounded_new" type="submit" style="margin-top: 20px; margin-bottom: 20px;background-color: #ea4335;width: 20%;height: 38px;font-size: 15px;">Keluar</button>
                                    </form>
                                </div>
                            </div>
                        </div>  
                    </div>
                 </div>
            </div>
        </nav>
    </div>

</body>
</html>