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
						<a href="<?php echo site_url('super_admin/surat_masuk/') ?>">
							<i class="fas fa-arrow-left"></i>
							Kembali
						</a>
					</div>
					<!-- card-header -->
					<div class="card-body">
						<form action="<?php base_url('super_admin/surat_masuk/edit') ?>" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $surat_masuk->id ?>"/>
							<div class="form-group">
								<label for="no">No*</label>
								<input class="form-control <?php echo form_error('no') ? 'is-invalid':''?>" type="text" name="no" placeholder="Nomor" value="<?php echo $surat_masuk->no ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('no') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="pengirim">Pengirim*</label>
								<input class="form-control <?php echo form_error('pengirim') ? 'is-invalid':'' ?>" type="text" name="pengirim" placeholder="Pengirim" value="<?php echo $surat_masuk->pengirim ?>">
								<div class="invalid-feedback">
									<?php echo form_error('pengirim') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="tanggal">Tanggal*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>" type="date" name="tanggal" placeholder="Tanggal" value="<?php echo $surat_masuk->tanggal ?>">
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="nomor_surat">Nomor Surat*</label>
								<input class="form-control <?php echo form_error('nomor_surat') ? 'is-invalid':'' ?>" type="text" name="nomor_surat" placeholder="Nomor Surat" value="<?php echo $surat_masuk->nomor_surat ?>">
								<div class="invalid-feedback">
									<?php echo form_error('nomor_surat') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="perihal">Perihal*</label>
								<textarea class="form-control <?php echo form_error('perihal') ? 'is-invalid':'' ?>" type="text" name="perihal" placeholder="Perihal"><?php echo $surat_masuk->perihal ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('perihal') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="disposisi">Disposisi</label>
								<input class="form-control <?php echo form_error('disposisi') ? 'is-invalid':'' ?>" type="text" name="disposisi" placeholder="Disposisi" value="<?php echo $surat_masuk->disposisi ?>">
								<div class="invalid-feedback">
									<?php echo form_error('disposisi') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="file">File</label>
								<input class="form-control file <?php echo form_error('file') ? 'is-invalid':'' ?>" type="file" name="file">
								<input type="hidden" name="old_pdf" value="<?php echo $surat_masuk->file ?>">
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