<form method = "post" action="<?php echo base_url('Authorization/SignUp');?>"  style="width: 100&amp;;height: 100%;">

                        <div class = "form group" style="height: 38px;margin-bottom: 25px;">
                            <input class="form-control <?php echo form_error('fullname') ? 'is-invalid':'' ?>" id = "name" name = "fullname" type="text" style="width: 100%;" placeholder="Full name">
                            <div class="invalid-feedback">
								<?php echo form_error('fullname') ?>
							</div>
                        </div>
                        <div class = "form group" style="height: 38px;margin-bottom: 25px;">
                            <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" name = "email" type="email" style="width: 100%;" placeholder="Email">
                            <div class="invalid-feedback">
								<?php echo form_error('email') ?>
							</div>
                        </div>
                        <div class = "form group" style="height: 38px;margin-bottom: 25px;">
                            <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" name = "password" type="password" style="width: 100%;margin-right: 5px;" placeholder="Password">
                            <div class="invalid-feedback">
								<?php echo form_error('password') ?>
							</div>
                        </div>
                        <div class = "form group" style="height: 38px;margin-bottom: 25px;">
                            <input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>" name = "phone" type="text" style="width: 100%;" placeholder="No Hp">
                            <div class="invalid-feedback">
								<?php echo form_error('phone') ?>
							</div>
                        </div>
                        <div class = "form group" style="height: 38px;margin-bottom: 25px;">
                            <input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" name = "alamat" type="text" placeholder="Alamat" style="width: 100%;">
                            <div class="invalid-feedback">
								<?php echo form_error('alamat') ?>
							</div>
                        </div>
<<<<<<< HEAD:application/views/main/form_signup.php
                        <Button class="btn btn-primary btn-lg border rounded d-lg-flex justify-content-lg-center align-items-lg-center rounded_new" type="submit" style="margin-top: 20px;background-color: #ea4335;width: 40%;height: 40px;font-size: 17px; margin-bottom: 30px;" value = "add">Daftar</button>
                        <a style = "color:#235A81" href="<?php echo base_url('Authorization/SignIn')?>"> Sudah punya akun? Sign in disini </a>
=======
                        <Button class="btn btn-primary btn-lg border rounded d-lg-flex justify-content-lg-center align-items-lg-center rounded_new" type="submit" style="margin-top: 20px;background-color: #ea4335;width: 40%;height: 40px;font-size: 17px; margin-left: 35%" value = "add">Daftar</button>
                        <!-- <div class="d-lg-flex justify-content-lg-center" style="height: 38px;margin-bottom: 25px;">
                            
                        </div> -->
>>>>>>> d9563669ac887c3622908109375945c633029722:application/views/main/daftarakun.php
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>