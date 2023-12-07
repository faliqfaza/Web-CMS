<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title fw-bold" id="exampleModalLabel">Tambah User</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="<?= base_url('admin/user/simpan') ?>" method="post">
				<div class="modal-body">
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label fw-bold">Nama</label>
						<input type="text" class="form-control" placeholder="Nama" name="nama" Required>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label fw-bold">Username</label>
						<input type="text" class="form-control" placeholder="Username" name="username" Required>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label fw-bold">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password" Required>
					</div>
					<div class="row mb-3">
						<label class="col-sm-2 col-form-label fw-bold">Level</label>
						<select name="level" class="form-control">
							<option value="Admin">Admin</option>
							<option value="Kontributor">Kontributor</option>
						</select>
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
			<i class="fw-bold">
				Tambah User
			</i>
		</a>
		</div>
		<div class="card-body">
			<h4 class="card-title">Data Pengguna</h4>
			<div class="table-responsive">
				<table class="table table-striped" id="example" style="width:100%">
					<thead>
						<tr class="fw-bold">
							<th>Username</th>
							<th>Nama</th>
							<th>Level</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($user as $aa) { ?>
						<tr>
							<td><?= $aa['username'] ?></td>
							<td><?= $aa['nama'] ?></td>
							<td><?= $aa['level'] ?></td>
							<td class="text-center">
								<a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']); ?>"
									onclick="return confirm('Apakah anda yakin menghapus data User ini?')"
									class="btn btn-sm btn-danger m-2"><i class="mdi mdi-account-minus"></i>
								</a>
								<a class="btn btn-sm btn-primary m-2" data-bs-toggle="modal"
									data-bs-target="#edit<?= $aa['id_user'] ?>">
									<i class="mdi mdi-account-settings"></i>
								</a>
								<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-md">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title fw-bold" id="exampleModalLabel">Perbarui Nama User</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<form action="<?= base_url('admin/user/update') ?>" method="post">
                                            <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
												<div class="modal-body">
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label fw-bold">Nama</label>
														<input type="text" class="form-control" value="<?= $aa['nama'] ?>"
															name="nama">
													</div>
													<div class="row mb-3">
														<label class="col-sm-2 col-form-label fw-bold">Username</label>
														<input type="text" class="form-control" value="<?= $aa['username'] ?>"
															name="username" readonly>
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
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
