<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo SITE_NAME ?></title>

	<!-- Bootstrap core css-->
	<link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<!-- Custom fonts this template-->
	<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

	<!-- page level plugin css-->
	<link href="<?php echo base_url('assets/datatables.bootstrap4.css') ?>" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo base_url('css/sb-admin.css') ?>">

	<!-- Style Sendiri -->
	<link rel="stylesheet" href="<?php echo base_url('css/meldamelda.css') ?>">
</head>
<body class="bg-dark">
	<div class="container">
		<div class="card card-login bg-dark mx-auto mt-5">
			<div class="card-header bg-melda1">
				<img class="logo2" src="<?php echo base_url('/images/logo2.png') ?>">
			</div>
			<div class="card-body bg-melda1 mt-2">
				<h5 class="putih" align="center">SIGN IN</h5>
				<?php if(isset($error)) { echo $error; }; ?>
				<br>
				<form method="POST" action="<?php echo base_url() ?>index.php">
					<div class="form-group">
						<div class="form-label-group">
							<input type="text" id="inputEmail" name="username" class="form-control" placeholder="Nama Pengguna" required="required" autofocus="autofocus">
              				<label for="inputEmail">Nama Pengguna</label>
							<?php echo form_error('username') ?>
						</div>
					</div>
					<div class="form-group">
						<div class="form-label-group">
							<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              				<label for="inputPassword">Password</label>
							<?php echo form_error('password') ?>
						</div>
					</div>
					<button class="btn btn-success btn-block" name="btn-login" id="btn-login" type="submit">LOGIN</button>
					<div id="error" style="margin-top: 10px"></div>
				</form>
			</div>
		</div>
	</div>

	  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
  <script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>
</body>
</html>