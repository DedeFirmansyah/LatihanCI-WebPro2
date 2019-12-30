<div class="container" style="padding: 15px;">
	<form method="POST" action="<?php echo base_url('RegisterMahasiswa/aksi_register_mahasiswa') ?>">
		<div class="form-group">
			<label for="Npm">NPM :</label>
			<input type="number" class="form-control" id="npm" name="npm" maxlength="8" placeholder="Masukan Npm . . . " required>
		</div>
		<div class="form-group">
			<label for="Nama">Nama :</label>
			<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama . . . " required>
		</div>
		
		<?php if ($this->session->flashdata('flash')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
             <?= $this->session->flashdata('flash');?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
		<?php endif; ?>

		<button type="submit" value="Submit" class="btn btn-primary float-right">Simpan</button>
	</form> 
	
</div>     
