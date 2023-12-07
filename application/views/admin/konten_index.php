<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title fw-bold" id="exampleModalLabel">Tambah Konten</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
				<div class="modal-body">
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label fw-bold">Judul</label>
						<input type="text" class="form-control" placeholder="Nama " name="judul" Required>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label fw-bold">Kategori</label>
						<select name="id_kategori" class="form-control">
							<?php foreach($kategori as $aa) { ?>
							<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label fw-bold">Keterangan</label>
						<textarea name="keterangan" cols="30" rows="10"></textarea>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label fw-bold">Foto</label>
						<input type="file" name="foto" accept="image/png, image/jpeg">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-header">
		<a class="btn btn-outline-primary m-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<i class="fa fa-print fw-bold">
				Tambah Konten
			</i>
		</a>
		</div>
		<div class="card-body">
			<h4 class="card-title">Kategori Konten</h4>
			<div class="table-responsive">
				<table class="table table-striped" id="example" style="width:100%">
					<thead>
						<tr class="fw-bold">
							<th>No</th>
							<th>Judul</th>
							<th>Kategori Konten</th>
							<th>Tanggal</th>
							<th>Kreator</th>
							<th>Foto</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($konten as $aa) { ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $aa['judul'] ?></td>
							<td><?= $aa['nama_kategori'] ?></td>
							<td><?= $aa['tanggal'] ?></td>
							<td><?= $aa['nama'] ?></td>
							<td><a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank">
									<img src="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" alt=""></td>
							</a>
							<td class="text-center">
								<a href="<?php echo site_url('admin/konten/delete_data/'.$aa['foto']); ?>"
									onclick="return confirm('Apakah anda yakin menghapus data ini?')"
									class="btn btn-sm btn-danger m-2"><i class="mdi mdi-delete"></i>
								</a>
								<a class="btn btn-sm btn-primary m-2" data-bs-toggle="modal"
									data-bs-target="#konten<?= $no ?>">
									<i class="mdi mdi-auto-fix"></i>
								</a>
								<div class="modal fade" id="konten<?= $no ?>" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<form action="<?= base_url('admin/konten/update') ?>" method="post"
											enctype='multipart/form-data'>
											<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title fw-bold" id="exampleModalLabel">
														<?= $aa['judul'] ?>
													</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label fw-bold">Judul</label>
														<input type="text" class="form-control"
															value="<?= $aa['judul'] ?>" name="judul">
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label fw-bold">Kategori</label>
														<select name="id_kategori" class="form-control">
															<?php foreach($kategori as $uu) { ?>
															<option
																<?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected"; } ?>
																value="<?= $uu['id_kategori'] ?>">
																<?= $uu['nama_kategori'] ?></option>
															<?php } ?>
														</select>
													</div>
													<div class="row mb-3">
														<label
															class="col-sm-2 col-form-label fw-bold">Keterangan</label>
														<textarea name="keterangan" cols="30"
															rows="10"><?= $aa['keterangan'] ?></textarea>
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label fw-bold">Foto</label>
														<input type="file" name="foto" accept="image/png, image/jpeg">
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary"
														data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Simpan</button>
												</div>
										</form>
									</div>
								</div>
							</div>
							</td>
						</tr>
						<?php $no++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
