<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partial/head.php") ?>
</head>
<body id="page-top">

	<?php $this->load->view("admin/_partial/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("admin/_partial/sidebar.php") ?>
		<div id="content-wrapper">
			<div class="container-fluid">
				<?php $this->load->view("admin/_partial/breadcrumb.php") ?>

				<?php if($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success') ?>
				</div>
				<?php endif; ?>
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/surat_keluar/') ?>">
							<i class="fas fa-arrow-left"></i>
							Kembali
						</a>
					</div>
					<!-- card-header -->
					<div class="card-body">
						<form action="<?php base_url('admin/surat_keluar/edit') ?>" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $surat_keluar->id ?>"/>
							<div class="form-group">
								<label for="no">No*</label>
								<input class="form-control <?php echo form_error('no') ? 'is-invalid':''?>" type="text" name="no" placeholder="Nomor" value="<?php echo $surat_keluar->no ?>">
								<div class="invalid-feedback">
									<?php echo form_error('no') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="kode">Kode*</label>
								<input class="form-control <?php echo form_error('kode') ? 'is-invalid':'' ?>" type="text" name="kode" placeholder="Kode" value="<?php echo $surat_keluar->kode ?>">
								<div class="invalid-feedback">
									<?php echo form_error('kode') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="tujuan">Tujuan*</label>
								<input class="form-control <?php echo form_error('tujuan') ? 'is-invalid':'' ?>" type="text" name="tujuan" placeholder="Tujuan" value="<?php echo $surat_keluar->tujuan ?>">
								<div class="invalid-feedback">
									<?php echo form_error('tujuan') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="tanggal">Tanggal*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>" type="date" name="tanggal" placeholder="Tanggal" value="<?php echo $surat_keluar->tanggal ?>">
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="perihal">Perihal*</label>
								<textarea class="form-control <?php echo form_error('perihal') ? 'is-invalid':'' ?>" type="text" name="perihal" placeholder="Perihal"><?php echo $surat_keluar->perihal ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('perihal') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="file">File</label>
								<input class="form-control-file <?php echo form_error('file') ? 'is-invalid':'' ?>" type="file" name="file">
								<input type="hidden" name="old_pdf" value="<?php echo $surat_keluar->file ?>">
								<div class="invalid-feedback">
									<?php echo form_error('file') ?>
								</div>
							</div>
							<input class="btn btn-melda1" type="submit" name="btn" value="SIMPAN">
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
			<?php $this->load->view("admin/_partial/footer.php") ?>
		</div>
		<!-- /.container-wrapper -->
	</div>
	<!-- /.wrapper -->
	<?php $this->load->view("admin/_partial/scrolltop.php") ?>
	<?php $this->load->view("admin/_partial/modal.php") ?>

	<?php $this->load->view("admin/_partial/js.php") ?>
</body>
</html>