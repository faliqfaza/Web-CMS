<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $judul_halaman ?> </title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template/') ?>vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template/') ?>vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template/') ?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template/') ?>vendors/typicons/typicons.css">
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template/') ?>vendors/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template/') ?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template/') ?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template/') ?>js/select.dataTables.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template/') ?>css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= site_url('assets/staradmin/template') ?>/images/profil2.jpeg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
	<script src="https://cdn.tiny.cloud/1/hvqbbz19mc0fjix8yu7ze1rbotdgi1rs748ha5k92ulnqpr4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
	<div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark selected"></div>
            <div class="tiles default"></div>
          </div>
        </div>
    </div>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
				<div class="me-3">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button"
						data-bs-toggle="minimize">
						<span class="icon-menu"></span>
					</button>
				</div>
				<div>
					<a class="navbar-brand brand-logo" href="<?= base_url(); ?>">
						<h4>Admin</h4>
					</a>
					<a class="navbar-brand brand-logo-mini" href="<?= base_url(); ?>">
						<img src="<?= site_url('assets/staradmin/template') ?>/images/logo-mini.svg" alt="logo">
					</a>
				</div>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-top">
				<ul class="navbar-nav">
					<li class="nav-item font-weight-semibold d-none d-lg-block ms-0" >
						<h3 class="fw-bold"><?= $judul_halaman ?></h3>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto">
					<li class="nav-item dropdown d-none d-lg-block user-dropdown">
						<a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
							<img class="img-xs rounded-circle"
								src="<?= site_url('assets/staradmin/template') ?>/images/faces/face8.jpg"
								alt="Profile image"> </a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
							<div class="dropdown-header text-center">
								<img class="img-md rounded-circle"
									src="<?= site_url('assets/staradmin/template') ?>/images/faces/face8.jpg"
									alt="Profile image">
								<p class="mb-1 mt-3 font-weight-semibold"><?= $this->session->userdata('nama') ?></p>
								<p class="fw-light text-muted mb-2"><?= $this->session->userdata('level') ?></p>
							</div>
							<a class="dropdown-item"><i
									class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>
								Password</a>
							<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
								<i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Logout</a>
						</div>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          			<span class="mdi mdi-menu"></span>
        		</button>
			</div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_settings-panel.html -->
			<!-- partial -->
			<!-- partial:partials/_sidebar.html -->
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/home') ?>">
							<i class="mdi mdi-home menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/konten') ?>">
							<i class="mdi mdi mdi-code-equal menu-icon"></i>
							<span class="menu-title">Konten</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/galeri') ?>">
							<i class="mdi mdi-image menu-icon"></i>
							<span class="menu-title">Galeri</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/saran') ?>">
							<i class="mdi mdi-comment-multiple-outline menu-icon"></i>
							<span class="menu-title">Saran & Pesan</span>
						</a>
					</li>
					<?php if($this->session->userdata('level')=='Admin'){ ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/user') ?>">
							<i class="mdi mdi-account menu-icon"></i>
							<span class="menu-title">User</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/caraousel') ?>">
							<i class="mdi mdi-crown menu-icon"></i>
							<span class="menu-title">Caraousel</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/kategori') ?>">
							<i class="mdi mdi-collage menu-icon"></i>
							<span class="menu-title">Katagori Konten</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/konfigurasi') ?>">
							<i class="mdi mdi-lead-pencil menu-icon"></i>
							<span class="menu-title">Konfigurasi</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('admin/aktivitas') ?>">
							<i class="mdi mdi mdi-account-convert menu-icon"></i>
							<span class="menu-title">Aktivitas Login</span>
						</a>
					</li>
					<?php } ?>
				</ul>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="container-xx1 flex-grow-1 container-p-y">
						<?= $contents; ?>
					</div>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<footer class="footer">
					<div class="d-sm-flex justify-content-center justify-content-sm-between">
						<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">hwehehe</span>
						<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Lutakike.</span>
					</div>
				</footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

	<!-- plugins:js -->
	<script src="<?= site_url('assets/staradmin/template') ?>/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?= site_url('assets/staradmin/template') ?>/vendors/chart.js/Chart.min.js"></script>
	<script src="<?= site_url('assets/staradmin/template') ?>/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js">
	</script>
	<script src="<?= site_url('assets/staradmin/template') ?>/vendors/progressbar.js/progressbar.min.js"></script>

	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= site_url('assets/staradmin/template') ?>/js/off-canvas.js"></script>
	<script src="<?= site_url('assets/staradmin/template') ?>/js/hoverable-collapse.js"></script>
	<script src="<?= site_url('assets/staradmin/template') ?>/js/template.js"></script>
	<script src="<?= site_url('assets/staradmin/template') ?>/js/settings.js"></script>
	<script src="<?= site_url('assets/staradmin/template') ?>/js/todolist.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="<?= site_url('assets/staradmin/template') ?>/js/dashboard.js"></script>
	<script src="<?= site_url('assets/staradmin/template') ?>/js/Chart.roundedBarCharts.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$('#menghilang').delay('slow').slideDown('slow').delay(4000).slideUp(600);
		new DataTable('#example');

	</script>
	<!-- End custom js for this page-->
	<script>
	tinymce.init({
		selector: 'textarea',
		plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
		toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
	});
	</script>
</body>

</html>
