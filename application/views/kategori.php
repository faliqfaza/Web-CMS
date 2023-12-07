<!-- Title Page -->
<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
	style="background-image: url(<?= base_url('assets/pato/'); ?>images/background-kategori.jpeg);">
	<h2 class="tit6 t-center">
		<?= $nama_kategori; ?>
	</h2>
</section>


<!-- Content page -->
<section class="section-blog bg-white p-t-115 p-b-123">
	<div class="bread-crumb bo5-b p-t-17 p-b-17">
		<div class="container">
			<a href="<?= base_url(); ?>" class="txt27">
				Home
			</a>

			<span class="txt29 m-l-10 m-r-10">/</span>

			<span class="txt29">
				categories
			</span>

			<span class="txt29 m-l-10 m-r-10">/</span>

			<span class="txt29">
				<?= $nama_kategori; ?>
			</span>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php $no=1; foreach ($konten as $uu){ ?>
			<div class="col-md-4 p-t-30">
				<!-- Block1 -->
				<div class="blo1">
					<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
						<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>"><img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>"
								alt=""></a>

						<div class="time-blog">
							<?= $uu['tanggal'] ?>
						</div>
					</div>

					<div class="wrap-text-blo1 p-t-35">
						<a href="blog-detail.html">
							<h4 class="txt5 color0-hov trans-0-4 m-b-13">
								<?= $uu['judul'] ?>
							</h4>
						</a>

						<p class="m-b-20">
						</p>

						<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>" class="txt4">
							Continue Reading
							<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
