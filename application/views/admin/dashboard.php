<marquee class="fw-bold">Selamat datang di halaman, dashboard "<?= $this->session->userdata('nama'); ?>"</marquee>
<div class="row mt-3">
	<div class="col-xl-3 col-md-6 mb-2">
		<div class="card card-rounded">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<div>
								<h4 class="card-title card-title-dash">Konten</h4>
							</div>
						</div>
						<div class="mt-3">
							<div class="wrapper d-flex align-items-center justify-content-between py-2">
								<div class="d-flex">
									<div class="wrapper ms-3">
										<h2 class="ms-1 mb-1 fw-bold"><?= $konten; ?></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-2">
		<div class="card card-rounded">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<div>
								<h4 class="card-title card-title-dash">Galeri</h4>
							</div>
						</div>
						<div class="mt-3">
							<div class="wrapper d-flex align-items-center justify-content-between py-2">
								<div class="d-flex">
									<div class="wrapper ms-3">
										<h2 class="ms-1 mb-1 fw-bold"><?= $galeri; ?></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-2">
		<div class="card card-rounded">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<div>
								<h4 class="card-title card-title-dash">Saran</h4>
							</div>
						</div>
						<div class="mt-3">
							<div class="wrapper d-flex align-items-center justify-content-between py-2">
								<div class="d-flex">
									<div class="wrapper ms-3">
										<h2 class="ms-1 mb-1 fw-bold"><?= $saran; ?></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6 mb-2">
		<div class="card card-rounded">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<div>
								<h4 class="card-title card-title-dash">User</h4>
							</div>
						</div>
						<div class="mt-3">
							<div class="wrapper d-flex align-items-center justify-content-between py-2">
								<div class="d-flex">
									<div class="wrapper ms-3">
										<h2 class="ms-1 mb-1 fw-bold"><?= $usere; ?></h2>
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
<div class="row mt-3">
	<div class="col-xl-6 col-md-6 mb-2">
		<div class="card card-rounded">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<div>
								<h4 class="card-title card-title-dash">Kategori Konten</h4>
							</div>
						</div>
						<div class="mt-3">
                            <table class="table table-borderless table-thead-border">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-right">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($jumlah_konten as  $value) : ?>
                                        <tr>
                                            <td class="text-dark font-weight-bold"><?= $value->nama_kategori; ?></td>
                                            <td class="text-right"><?= $value->jumlah_konten; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot class="border-top">
                                    <tr>
                                        <td><a href="<?= base_url('admin/kategori'); ?>" class="btn btn-primary text-white">See All</a>
                                    </tr>
                                </tfoot>
                            </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
