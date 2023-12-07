<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
	<div class="col-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Konfigurasi</h4>
				<form class="forms-sample">
					<div class="form-group">
						<label for="exampleInputName1">Judul Website</label>
						<input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail3">Profil</label>
						<textarea class="form-control" name="profil_website"><?= $konfig->profil_website; ?></textarea>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail3">Facebook</label>
						<input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail3">Instagram</label>
						<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail3">Email</label>
						<input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail3">Alamat</label>
						<input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail3">Whatsapp</label>
						<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>">
					</div>
					<button type="submit" class="btn btn-primary me-2">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</form>
