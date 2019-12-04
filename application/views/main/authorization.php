<header>
        <h3 class="text-center" style="padding-top: 20px;">Daftar Akun</h3>
    </header>
    <div>
        <div class="container">

            <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			<?php endif; ?>
            <?php if ($this->session->flashdata('error')): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $this->session->flashdata('error'); ?>
				</div>
			<?php endif; ?>
            
            
            <div class="row">
                <div class="col-md-6">
                    <img class="d-lg-flex justify-content-lg-center align-items-lg-center" src="<?php echo base_url('assets/img/undraw_happy_feeling_slmw.png')?>" style="width: 100%;height: 100%;"></div>
                <div class="col-md-6">
                    <div class="d-lg-flex justify-content-lg-center" style="width: 100%;height: 100%;">

                    