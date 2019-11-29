<form method = "post" action="<?php echo base_url('Authorization/SignIn');?>"  style="width: 100&amp;;height: 100%; margin-top: 50px;">

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
                        <Button class="btn btn-primary btn-lg border rounded d-lg-flex justify-content-lg-center align-items-lg-center rounded_new" type="submit" style="margin-top: 20px; margin-bottom: 25px;background-color: #ea4335;width: 40%;height: 40px;font-size: 17px;">SignIn</button>
                        <a style = "color:#235A81;" href="<?php echo base_url('Authorization/SignUp')?>"> Belum punya akun? daftar disini </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>