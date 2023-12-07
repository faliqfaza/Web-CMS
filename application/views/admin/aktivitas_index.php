<div id="menghilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 grid-margin stretch-card">
	<div class="card">
		<div class="card-header">
			<a href="<?= base_url('admin/aktivitas/hapussemua'); ?>"
				onclick="return confirm('Apakah anda yakin menghapus Semua Saran ini?')"
				class="btn btn-danger m-2">Hapus Semua
			</a>
		</div>
		<div class="card-body">
			<h4 class="card-title">Data Pengguna</h4>
			<div class="table-responsive">
				<table class="table table-striped" id="example" style="width:100%">
					<thead>
						<tr class="fw-bold">
							<th>No</th>
							<th>Username</th>
							<th>Tanggal</th>
							<th>Keterangan</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($aktivitas as $ak) { ?>
						<tr>
							<td><?= $no; ?></td>
							<td><?= $ak['username'] ?></td>
							<td><?= $ak['tanggal'] ?></td>
							<td><?= $ak['keterangan'] ?></td>
							<td class="text-center">
								<a href="<?php echo site_url('admin/aktivitas/hapus/'.$ak['id_recent_login']); ?>"
									onclick="return confirm('Apakah anda yakin menghapus Saran User ini?')"
									class="btn btn-sm btn-danger m-2"><i class="mdi mdi-comment-remove-outline"></i>
								</a>
							</td>
						</tr>
						<?php $no++;} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
