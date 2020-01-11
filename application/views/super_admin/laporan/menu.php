<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view("super_admin/_partial/head.php") ?>
</head>
<body>
	<?php $this->load->view("super_admin/_partial/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("super_admin/_partial/sidebar.php") ?>
		<div id="content-wrapper">
			<div class="container-fluid">
				<?php $this->load->view("super_admin/_partial/breadcrumb.php") ?>
				<div class="card mb-3">
					<div class="card-header">
						Cetak Laporan
					</div>
					<div class="card-body">
						<label for="pilih">Pilih Laporan</label>
						<select class="form-control <?php echo form_error('awal') ? 'is-invalid':''?>" name="pilih">
							<option value="surat_masuk">Surat Masuk</option>
							<option value="surat_keluar">Surat Keluar</option>
							<option value="undangan">Undangan</option>
							<option value="agenda">Agenda</option>
							<option value="logactivity">Log Aktifitas</option>
							<option value="login">Login</option>
						</select>
						<div class="invalid-feedback">
							<?php echo form_error('pilih') ?>
						</div>
						<br>
						<label for="awal">Dari</label>
						<input class="form-control <?php echo form_error('awal') ? 'is-invalid':''?>" type="date" name="awal">
						<div class="invalid-feedback">
							<?php echo form_error('awal') ?>
						</div>
						<br>
						<label for="akhir">Ke</label>
						<input class="form-control <?php echo form_error('akhir') ? 'is-invalid':''?>" type="date" name="akhir">
						<div class="invalid-feedback">
							<?php echo form_error('akhir') ?>
						</div>
						<br>
						<a class="btn btn-melda3" href="<?php echo site_url() ?>">CETAK</a>
						<!--<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_surat_masuk/index/'.date('yy-m-d')); ?>">Surat Masuk</a>
						<br>
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_surat_keluar/index/'.date('yy-m-d')); ?>">Surat Keluar</a>
						<br>
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_undangan/index/'.date('yy-m-d')); ?>">Undangan</a>
						<br>
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_agenda/index/'.date('yy-m-d')); ?>">Agenda</a>
						<br>
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_logactivity/index/'.date('yy-m-d')); ?>">Log Aktifitas</a>
						<br>
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_login/index/'.date('yy-m-d')); ?>">Login</a>
						<br>-->
					</div>
				</div>
			</div>
			<?php $this->load->view("super_admin/_partial/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("super_admin/_partial/scrolltop.php") ?>
	<?php $this->load->view("super_admin/_partial/modal.php") ?>

	<?php $this->load->view("super_admin/_partial/js.php") ?>
</body>
</html>