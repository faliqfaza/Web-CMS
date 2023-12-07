<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $judul; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets/pato/'); ?>images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/pato/'); ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/pato/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pato/'); ?>fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pato/'); ?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/pato/'); ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/pato/'); ?>vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pato/'); ?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/pato/'); ?>vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pato/'); ?>vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pato/'); ?>vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pato/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/pato/'); ?>css/main.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					<div class="logo">
						<a href="<?= base_url(); ?>">
							<img src="<?= base_url('assets/pato/'); ?>images/icons/lutakike.png" alt="IMG-LOGO" data-logofixed="<?= base_url('assets/pato/'); ?>images/icons/lutakike2.png">
						</a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<ul class="main_menu ">
								<li><a href="<?= base_url(); ?>">Home</a></li>
								<li class="dropdown">
									<a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown"
										aria-expanded="false">
										Content
									</a>
									<div class="dropdown-menu">
										<?php foreach ($kategori as $kate) { ?>
										<a class="dropdown-item"
											href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?>
										</a>
										<?php } ?>
									</div>
								</li>
								<li><a href="<?= base_url('home/galeri') ?>">Galeri</a></li>
								<li><a href="<?= base_url('home/contact') ?>">Contact</a></li>
								<li><a href="<?= base_url('admin/home') ?>"
									class="flex-c-m size13 txt11 trans-0-4 m-l-r-auto">Login</a>
								</li>
							</ul>
						</nav>
					</div>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="<?= $konfig->facebook; ?>"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="<?= $konfig->instagram; ?>"><i class="fa fa-instagram m-l-21" aria-hidden="true"></i></a>

						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-center m-b-13">
				<a href="<?= base_url(); ?>" class="txt19">Home</a>
			</li>

			<li class="dropdown t-center m-b-13">
				<a class="nav-link dropdown-toggle txt19" href="" role="button" data-toggle="dropdown"
					aria-expanded="false">
					Konten
				</a>
				<div class="dropdown-menu">
					<?php foreach ($kategori as $kate) { ?>
					<a class="dropdown-item txt19"
						href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?>
					</a>
					<?php } ?>
				</div>
			</li>
			<li class="t-center m-b-13"><a href="<?= base_url('home/galeri') ?>" class="txt19">Galeri</a></li>
			<li class="t-center m-b-13"><a href="<?= base_url('home/contact') ?>" class="txt19">Contact</a></li>

			<li class="t-center">
				<!-- Button3 -->
				<a href="<?= base_url('admin/home') ?>" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
					Login
				</a>
			</li>
		</ul>

		<!-- - -->
	</aside>

	<!-- Content page -->
    <?= $contents; ?>

	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
			<div class="row">
				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-32">
						<?= $konfig->judul_website; ?>
					</h4>

					<ul>
						<li class="txt14">
							<?= $konfig->profil_website; ?>
						</li>

						<li class="txt14">
							<a href="<?= $konfig->facebook; ?>"><i class="fa fa-facebook text-light m-3"></i></a>
							<a href="<?= $konfig->instagram; ?>"><i class="fa fa-instagram text-light m-3"></i></a>
						</li>
					</ul>

					<h4 class="txt13 m-b-33">
						Contact Us
					</h4>

					<ul class="m-b-70">
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							<?= $konfig->alamat; ?>
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							<?= $konfig->no_wa; ?>
						</li>

						<li class="txt14 m-b-14">
							<i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i>
							<?= $konfig->email; ?>
						</li>
					</ul>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-33">
						Links
					</h4>

					<div class="m-b-25">
						<li class="bo5-b p-t-8 p-b-8"><a class="txt27 text-light" href="<?= base_url(); ?>">Home</a></li>
						<?php foreach ($kategori as $kate) { ?>
							<li class="bo5-b p-t-8 p-b-8">
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>" class="txt27 text-light">
									<?= $kate['nama_kategori'] ?>
								</a>
							</li>
						<?php } ?>
						<li class="bo5-b p-t-8 p-b-8"><a class="txt27 text-light" href="<?= base_url('home/contact') ?>">Contact</a></li>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<!-- - -->
					<h4 class="txt13 m-b-38">
						Gallery
					</h4>

					<!-- Gallery footer -->
					<div class="wrap-gallery-footer flex-w">
						<?php foreach ($galeri2 as $gd) { ?>
						<a class="item-gallery-footer wrap-pic-w" href="<?= base_url('assets/upload/galeri/'.$gd['foto']) ?>"
							data-lightbox="gallery-footer">
							<img src="<?= base_url('assets/upload/galeri/'.$gd['foto']) ?>" alt="GALLERY">
						</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<div class="end-footer bg2">
			<div class="container">
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-instagram m-l-18" aria-hidden="true"></i></a>
					</div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						Copyright &copy; 2018 All rights reserved | This template is made with <i
							class="fa fa-heart"></i> by <a>Luta</a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>



	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/animsition/js/animsition.min.js">
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/daterangepicker/daterangepicker.js">
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
		$('.parallax100').parallax100();

	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url('assets/pato/'); ?>vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('assets/pato/'); ?>js/main.js"></script>
	<script>
		$('#menghilang').delay('slow').slideDown('slow').delay(4000).slideUp(600);
		new DataTable('#example');
	</script>

</body>

</html>
