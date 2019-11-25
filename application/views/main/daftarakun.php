<header>
        <h3 class="text-center" style="padding-top: 20px;">Daftar Akun</h3>
    </header>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><img class="d-lg-flex justify-content-lg-center align-items-lg-center" src="assets/img/undraw_happy_feeling_slmw.png" style="width: 100%;height: 100%;"></div>
                <div class="col-md-6">
                    <div class="d-lg-flex justify-content-lg-center" style="width: 100%;height: 100%;">

                    <form action="<?php base_url('Registration/add') ?>" method = "post" style="width: 100&amp;;height: 100%;" enctype="multipart/form-data">
                        <div style="height: 38px;margin-bottom: 25px;">
                            <input class="form-control  <?php echo form_error('name') ? 'is-invalid':'' ?>" name = "nama" type="text" style="width: 100%;" placeholder="Nama Depan">
                        </div>
                        <div style="height: 38px;margin-bottom: 25px;">
                            <input class="form-control  <?php echo form_error('email') ? 'is-invalid':'' ?>" name = "email" type="email" style="width: 100%;" placeholder="Email">
                        </div>
                        <div style="height: 38px;margin-bottom: 25px;">
                            <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" name = "password" type="password" style="width: 100%;margin-right: 5px;" placeholder="Password">
                        </div>
                        <div style="height: 38px;margin-bottom: 25px;">
                            <input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>" name = "phone" type="text" style="width: 100%;" placeholder="No Hp">
                        </div>
                        <div style="height: 38px;margin-bottom: 25px;">
                            <input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" name = "alamat" type="text" placeholder="Alamat" style="width: 100%;">
                        </div>
                        <div class="d-lg-flex justify-content-lg-center" style="height: 38px;margin-bottom: 25px;">
                            <input class="btn btn-primary btn-lg border rounded d-lg-flex justify-content-lg-center align-items-lg-center rounded_new" type="submit" style="margin-top: 20px;background-color: #ea4335;width: 40%;height: 40px;font-size: 17px;"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>