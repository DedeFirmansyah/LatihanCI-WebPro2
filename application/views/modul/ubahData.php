<div class="container" style="padding: 15px;">
	<?php if (empty($datamhs)): 
		redirect(base_url().'Myadmin/tambahdata');
		endif; 
	?>
	<form method="POST" action="<?php echo base_url('Myadmin/aksi_ubah_data') ?>">
		<input type="number" name="id" value="<?= $datamhs['id'] ?>" hidden>
		<div class="form-group">
			<label for="Npm">NPM :</label>
			<input type="number" class="form-control" id="npm" name="npm" maxlength="11" value="<?= $datamhs['npm'] ?>" required>
		</div>
		<div class="form-group">
			<label for="Nama">Nama :</label>
			<input type="text" class="form-control" id="nama" name="nama" value="<?= $datamhs['nama'] ?>" required>
		</div>
		<div class="form-group">
			<label for="semester">Semester :</label>
			<select name="semester" class="form-control"> 
				<option value=""><?= $datamhs['semester'] ?></option>
				<?php for ($i=0; $i < 11 ; $i++) { ?>
					<option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
				<?php } ?>
			</select>
		</div>
		<button type="submit" value="Submit" class="btn btn-primary float-left">Simpan</button>
	</form>
</div>