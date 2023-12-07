<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login </title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template') ?>/vendors/feather/feather.css">
	<link rel="stylesheet"
		href="<?= site_url('assets/staradmin/template') ?>/vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template') ?>/vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template') ?>/vendors/typicons/typicons.css">
	<link rel="stylesheet"
		href="<?= site_url('assets/staradmin/template') ?>/vendors/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template') ?>/vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= site_url('assets/staradmin/template') ?>/css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= site_url('assets/staradmin/template') ?>/images/profil2.jpeg" />
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="content-wrapper d-flex align-items-center auth px-0">
				<div class="row w-100 mx-0">
					<div class="col-lg-4 mx-auto">
						<div class="auth-form-light text-left py-5 px-4 px-sm-5">
							<div class="brand-logo"></div>
							<h2 class="fw-bold">Welcome To CMS</h2>
							<form class="pt-3" action="<?= base_url('auth/login') ?>" method="post">
								<div class="form-group">
									<input type="text" class="form-control form-control-lg" name="username"
										placeholder="Username" Required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control form-control-lg" name="password"
										placeholder="Password" Required>
								</div>
								<div class="mt-3">
									<button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit"
										>Login</button>
								</div>
								<div id="menghilang">
									<?= $this->session->flashdata('alert') ?>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?= site_url('assets/staradmin/template') ?>/vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?= site_url('assets/staradmin/template') ?>/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js">
	</script>
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= site_url('assets/staradmin/template') ?>/js/off-canvas.js"></script>
	<script src="<?= site_url('assets/staradmin/template') ?>/js/hoverable-collapse.js"></script>
	<script src="<?= site_url('assets/staradmin/template') ?>/js/template.js"></script>
	<script src="<?= site_url('assets/staradmin/template') ?>/js/settings.js"></script>
	<script src="<?= site_url('assets/staradmin/template') ?>/js/todolist.js"></script>
	<!-- endinject -->
</body>

</html>
