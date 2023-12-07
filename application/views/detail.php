<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
	style="background-image: url(<?= base_url('assets/pato/'); ?>images/background-detail.jpeg);">
	<h2 class="tit6 t-center">
		<?= $konten->judul; ?>
	</h2>
</section>

<!-- Content page -->
<section>
	<div class="bread-crumb bo5-b p-t-17 p-b-17">
		<div class="container">
			<a href="<?= base_url(); ?>" class="txt27">
				Home
			</a>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-9">
				<div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
					<!-- Block4 -->
					<div class="blo4 p-b-63">
						<!-- - -->
						<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
							<a href="#">
								<img src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>" alt="IMG-BLOG">
							</a>
						</div>

						<!-- - -->
						<div class="text-blo4 p-t-33">
							<h4 class="p-b-16">
								<a href="blog-detail.html" class="tit9"><?= $konten->judul; ?></a>
							</h4>

							<div class="txt32 flex-w p-b-24">
								<span>
									by <?= $konten->nama; ?>
									<span class="m-r-6 m-l-4">|</span>
								</span>

								<span>
									<?= $konten->tanggal; ?></a>
									<span class="m-r-6 m-l-4">|</span>
								</span>

								<span>
									Categories : <?= $konten->nama_kategori; ?>
									<span class="m-r-6 m-l-4">|</span>
								</span>
							</div>

							<p>
								<?= $konten->keterangan; ?>
							</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-lg-3">
				<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
					<!-- Search -->

					<!-- Categories -->
					<div class="categories">
						<h4 class="txt33 bo5-b p-b-35 p-t-20">
							Categories
						</h4>

						<ul>
							<?php foreach ($kategori as $kate) { ?>
							<li class="bo5-b p-t-8 p-b-8">
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>" class="txt27">
									<?= $kate['nama_kategori'] ?>
								</a>
							</li>
							<?php } ?>
						</ul>
					</div>

					<!-- Most Popular -->
					<div class="popular">
						<h4 class="txt33 p-b-35 p-t-58">
							Last News
						</h4>

						<ul>
							<?php foreach ($recent as $nt) { ?>
							<li class="flex-w m-b-25">
								<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
									<a href="#">
										<img src="<?= base_url('assets/upload/konten/'.$nt['foto']); ?>" alt="">
									</a>
								</div>

								<div class="size28">
									<a href="<?= base_url('home/artikel/'.$nt['slug']); ?>"
										class="dis-block txt28 m-b-8">
										<?= $nt['judul'] ?>
									</a>

									<span class="txt14">
										<?= $nt['tanggal'] ?>
									</span>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
