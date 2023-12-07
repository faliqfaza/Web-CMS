<!-- Title Page -->
<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
			<?php $no=1; foreach ($caraousel as $aa){ ?>
			<div class="item-slick1 item1-slick1"
				style="background-image: url(<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>);">
				<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
						<?= $aa['judul']; ?>
					</h2>
				</div>
			</div>
			<?php $no++; } ?>

		</div>

		<div class="wrap-slick1-dots"></div>
	</div>
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

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<?php $no=1; foreach ($konten2 as $uu){ ?>
						<div class="p-t-80 col-12 col-lg-5 m-3">
						<!-- Block4 -->
						<div class="blo4">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>">
									<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>" alt="IMG-BLOG">
								</a>
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>" class="tit9"><?= $uu['judul'] ?></a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by <?= $uu['nama'] ?>
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										<?= $uu['tanggal'] ?></a>
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Categories : <?= $uu['nama_kategori'] ?>
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>"
										class="dis-block txt4 m-t-30">
										baca selengkapnya
										<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
									</a>
								</div>

							</div>
						</div>

					</div>
					<?php } ?>

				</div>
				<!-- Pagination -->
				<div class="pagination justify-content-center m-b-50">
					<?= $this->pagination->create_links(); ?>
				</div>
			</div>

			<div class="col-12 col-lg-4">
				<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
					<!-- Search -->
					<form action="<?= base_url('home'); ?>" method="post">
						<div class="search-sidebar2 size12 bo2 pos-relative">
							<input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" class="form-control"
								name="keyword" placeholder="Search" autocomplete="off">
							<input class="btn-search-sidebar2 btn btn-light" type="submit" name="submit"
								value="Search"></input>
						</div>
					</form>

					<!-- Categories -->
					<div class="categories">
						<h4 class="txt33 bo5-b p-b-35 p-t-58">
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
<!-- <div class="col-md-8 col-lg-6 m-l-r-auto">
	
	<?php $no=1; foreach ($konten2 as $uu){ ?>
	<div class="blo3 flex-w flex-col-l-sm m-b-30">
		<div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
			<a href="#"><img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>" alt=""></a>
		</div>

		<div class="text-blo3 size21 flex-col-l-m">
			<a class="txt21 m-b-3">
				<?= $uu['judul'] ?>
			</a>

			<span>
				by <?= $uu['nama'] ?>
				<span class="m-r-6 m-l-4">|</span>
			</span>

			<span>
				<?= $uu['tanggal'] ?></a>
				<span class="m-r-6 m-l-4">|</span>
			</span>

			<span>
				Categories : <?= $uu['nama_kategori'] ?>
				<span class="m-r-6 m-l-4">|</span>
			</span>

			<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>" class="dis-block txt4 m-t-30">
				baca selengkapnya
				<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<?php } ?>
</div> -->
