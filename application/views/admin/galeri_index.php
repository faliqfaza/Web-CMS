<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-xl-12">
	<div class="card">
		<form action="<?= base_url('admin/galeri/simpan') ?>" method="post" enctype='multipart/form-data'>
			<div class="card-body">
				<h4 class="card-title">File Input</h4>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label fw-bold">Judul</label>
					<input type="text" class="form-control" placeholder="Judul foto " name="judul" Required>
				</div>
				<div class="mb-3">
					<label for="formfile" class="col-sm-2 col-form-label fw-bold">Pilih Foto</label>
					<input class="form-control" type="file" name="foto">
				</div>
			</div>
			<div class="card-footer">
				<button type="submit" class="btn btn-primary me-2">Simpan</button>
			</div>
		</form>
	</div>
</div>
<?php foreach($galeri as $aa) { ?>
<div class="col-md-12 mb-3  mt-3">
	<div class="card h-100">
		<img class="card-img-top" src="<?= base_url('assets/upload/galeri/'.$aa['foto']) ?>">
		<div class="card-body">
			<h5 class="card-title"><?= $aa['judul'] ?></h5>
			<a href="<?php echo site_url('admin/galeri/hapus/'.$aa['foto']); ?>"
				onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-sm btn-danger m-2"><i
					class="mdi mdi-delete"></i>
			</a>
		</div>
	</div>
</div>
<?php } ?>