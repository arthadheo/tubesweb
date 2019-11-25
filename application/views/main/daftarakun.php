<header>
        <h3 class="text-center" style="padding-top: 20px;">Daftar Akun</h3>
        <?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success" role="alert">
				<?php echo $this->session->flashdata('success'); ?>
			</div>
        <?php endif; ?>
    </header>
    <div>
        <div class="container">
            
            
            <div class="row">
                <div class="col-md-6">
                    <img class="d-lg-flex justify-content-lg-center align-items-lg-center" src="<?php echo base_url('assets/img/undraw_happy_feeling_slmw.png')?>" style="width: 100%;height: 100%;"></div>
                <div class="col-md-6">
                    <div class="d-lg-flex justify-content-lg-center" style="width: 100%;height: 100%;">

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
                        <Button class="btn btn-primary btn-lg border rounded d-lg-flex justify-content-lg-center align-items-lg-center rounded_new" type="submit" style="margin-top: 20px;background-color: #ea4335;width: 40%;height: 40px;font-size: 17px;" value = "add">Daftar</button>
                        <!-- <div class="d-lg-flex justify-content-lg-center" style="height: 38px;margin-bottom: 25px;">
                            
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>