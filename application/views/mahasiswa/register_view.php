<?php if ($this->session->flashdata('msg')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('msg');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
		<?php endif; ?>
<div class="container" style="padding: 90px;">
	<form method="post" action="<?php echo base_url('LoginMahasiswa/aksi_register') ?>">
		 <h2 align="center">Register Mahasiswa</h2>
        <hr width="24%" size="10px" color="lightgrey">
		<div class="form-group">
			<label for="Npm">Npm :</label>
			<input type="text" class="form-control" id="npm" name="npm" placeholder="Npm" required>
		</div>
		<div class="form-group">
			<label for="Nama">Password :</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
		</div>
		<div class="form-group">
			<label for="Nama">Sudah punya akun ?<a href="<?php echo base_url('LoginMahasiswa/') ?>"> Login Disini</a> </label>
		</div>
		<button type="submit" value="Submit" class="btn btn-primary float-right mr-4 mt-4">Login</button>
	</form> 
</div>     
