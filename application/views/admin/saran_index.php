<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-header">
			<?php if($this->session->userdata('level')=='Admin'){ ?>
			<a href="<?= base_url('admin/saran/hapussemua'); ?>"
				onclick="return confirm('Apakah anda yakin menghapus Semua Saran ini?')"
				class="btn btn-danger m-2">Hapus Semua
			</a>
			<?php } else { ?>
			<a class="btn btn-secondary m-2">
				Hapus Semua
			</a>
			<?php } ?>
		</div>
		<div class="card-body">
			<h4 class="card-title">Data Pengguna</h4>
			<div class="table-responsive">
				<table class="table table-striped" id="example" style="width:100%">
					<thead>
						<tr class="fw-bold">
							<th>No</th>
							<th>Tanggal</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Pesan</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($pesan as $sa) { ?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $sa['tanggal'] ?></td>
							<td><?= $sa['nama'] ?></td>
							<td><?= $sa['email'] ?></td>
							<td>
								<a class="btn btn-sm btn-warning" type="button" data-bs-toggle="modal"
									data-bs-target="#basicModal<?= $sa['id_saran'] ?>">
									<i class="mdi mdi-comment-outline"></i>
								</a>
								<div class="col-lg-6">
									<!-- Basic Modal -->
									<div class="modal fade" id="basicModal<?= $sa['id_saran'] ?>" tabindex="-1"
										style="display: none;" aria-hidden="true">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="card">
													<div class="modal-body">
														<h5 class="card-title">Saran</h5>
														<div class="card">
															<div class="card-body">
																<!-- General Form Elements -->
																<div class="row mt-2">
																	<div class="col-sm">
																		<?= $sa['isi_saran'] ?>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</td>
							<td class="text-center">
								<?php if($this->session->userdata('level')=='Admin'){ ?>
								<a href="<?php echo site_url('admin/saran/hapus/'.$sa['id_saran']); ?>"
									onclick="return confirm('Apakah anda yakin menghapus Saran User ini?')"
									class="btn btn-sm btn-danger m-2"><i class="mdi mdi-comment-remove-outline"></i>
								</a>
								<?php } else { ?>
									<a class="btn btn-sm btn-secondary m-2">
										<i class="mdi mdi-comment-remove-outline"></i>
									</a>
								<?php } ?>
							</td>
						</tr>
						<?php $no++;} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
