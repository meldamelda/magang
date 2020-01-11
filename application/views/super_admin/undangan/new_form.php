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
						<a href="<?php echo site_url('super_admin/undangan/') ?>">
							<i class="fas fa-arrow-left"></i>
							Kembali
						</a>
					</div>
					<!-- card-header -->
					<div class="card-body">
						<form action="<?php base_url('super_admin/undangan/add') ?>" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<?php $i = $jumlah+1; ?>
								<label for="no">No*</label>
								<input class="form-control <?php echo form_error('no') ? 'is-invalid':''?>" type="text" name="no" placeholder="Nomor" value="<?php echo $i; ?>">
								<div class="invalid-feedback">
									<?php echo form_error('no') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="tgl_diterima">Tanggal diterima*</label>
								<input class="form-control <?php echo form_error('tgl_diterima') ? 'is-invalid':'' ?>" type="date" name="tgl_diterima" placeholder="Tanggal diterima">
								<div class="invalid-feedback">
									<?php echo form_error('tgl_diterima') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="pengirim">Pengirim*</label>
								<input class="form-control <?php echo form_error('pengirim') ? 'is-invalid':'' ?>" type="text" name="pengirim" placeholder="Pengirim">
								<div class="invalid-feedback">
									<?php echo form_error('pengirim') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="tgl_acara">Tanggal Acara*</label>
								<input class="form-control <?php echo form_error('tgl_acara') ? 'is-invalid':'' ?>" type="datetime-local" name="tgl_acara" placeholder="Tanggal Acara">
								<div class="invalid-feedback">
									<?php echo form_error('tgl_acara') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="tempat">Tempat*</label>
								<textarea class="form-control <?php echo form_error('tempat') ? 'is-invalid':'' ?>" type="text" name="tempat" placeholder="Tempat"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('tempat') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="acara">Acara*</label>
								<textarea class="form-control <?php echo form_error('acara') ? 'is-invalid':'' ?>" type="text" name="acara" placeholder="Acara"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('acara') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="yg_hadir">Yang Menghadiri*</label>
								<input class="form-control <?php echo form_error('yg_hadir') ? 'is-invalid':'' ?>" type="text" name="yg_hadir" placeholder="Yang Menghadiri">
								<div class="invalid-feedback">
									<?php echo form_error('yg_hadir') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="file">File*</label>
								<input class="form-control file <?php echo form_error('file') ? 'is-invalid':'' ?>" type="file" name="file">
								<div class="invalid-feedback">
									<?php echo form_error('file') ?>
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