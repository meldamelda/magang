<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("super_admin/_partial/head.php") ?>
</head>
<body id="page-top">

	<?php $this->load->view("super_admin/_partial/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("super_admin/_partial/sidebar.php") ?>
		<div id="content-wrapper">
			<div class="container-fluid">
				<?php $this->load->view("super_admin/_partial/breadcrumb.php") ?>

				<?php if($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success') ?>
				</div>
				<?php endif; ?>
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('super_admin/pengguna/') ?>">
							<i class="fas fa-arrow-left"></i>
							Kembali
						</a>
					</div>
					<!-- card-header -->
					<div class="card-body">
						<form action="<?php base_url('super_admin/pengguna/add') ?>" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="no">No*</label>
								<input class="form-control <?php echo form_error('no') ? 'is-invalid':''?>" type="text" name="no" placeholder="Nomor">
								<div class="invalid-feedback">
									<?php echo form_error('no') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="username">Username*</label>
								<input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>" type="text" name="username" placeholder="Username">
								<div class="invalid-feedback">
									<?php echo form_error('username') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="nama">Nama*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" type="text" name="nama" placeholder="Nama">
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="password">Password*</label>
								<input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>" type="text" name="password" placeholder="Password">
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="level">Level*</label>
								<!--<input class="form-control <?php echo form_error('level') ? 'is-invalid':'' ?>" type="text" name="level" placeholder="Pilih"> -->
								<?php 
								$style0='class="form-control"';
								echo form_dropdown('level', $level, '', $style0);
								?>
								
								<div class="invalid-feedback">
									<?php echo form_error('level') ?>
								</div>
							</div>
							<input class="btn btn-melda3" type="submit" name="btn" value="SIMPAN">
						</form>
					</div>
					<!-- card-body -->
				</div>
				<!-- card mb-3 -->
				<div class="card card-footer small text-muted">
					* Required fields
				</div>
			</div>
			<!-- containeer-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("super_admin/_partial/footer.php") ?>
		</div>
		<!-- /.container-wrapper -->
	</div>
	<!-- /.wrapper -->
	<?php $this->load->view("super_admin/_partial/scrolltop.php") ?>
	<?php $this->load->view("super_admin/_partial/modal.php") ?>

	<?php $this->load->view("super_admin/_partial/js.php") ?>
</body>
</html>