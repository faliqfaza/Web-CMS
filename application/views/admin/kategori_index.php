<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title fw-bold" id="exampleModalLabel">Tambah Kategori</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
				<div class="modal-body">
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label fw-bold">Nama Kategori</label>
						<input type="text" class="form-control" placeholder="Nama" name="nama_kategori" Required>
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
				Tambah Kategori
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
							<th>Nama Kategori Konten</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($kategori as $aa) { ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $aa['nama_kategori'] ?></td>
							<td class="text-center">
								<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']); ?>"
									onclick="return confirm('Apakah anda yakin menghapus data ini?')"
									class="btn btn-sm btn-danger m-2"><i class="mdi mdi-delete"></i>
								</a>
								<a class="btn btn-sm btn-primary m-2" data-bs-toggle="modal"
									data-bs-target="#edit<?= $aa['id_kategori'] ?>">
									<i class="mdi mdi-auto-fix"></i>
								</a>
								<div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-md">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title fw-bold" id="exampleModalLabel">Perbarui Kategori</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<form action="<?= base_url('admin/kategori/update') ?>" method="post">
                                            <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
												<div class="modal-body">
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label fw-bold">Nama Kategori Konten</label>
														<input type="text" class="form-control" value="<?= $aa['nama_kategori'] ?>"
															name="nama_kategori">
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
