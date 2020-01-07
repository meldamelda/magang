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
						Laporan Harian
					</div>
					<div class="card-body">
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_surat_masuk/index/'.date('yy-m-d')); ?>">Surat Masuk</a>
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
						<br>
					</div>
				</div>
				<div class="card mb-3">
					<div class="card-header">
						Laporan
					</div>
					<div class="card-body">
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_surat_masuk'); ?>">Surat Masuk</a>
						<br>
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_surat_keluar'); ?>">Surat Keluar</a>
						<br>
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_undangan'); ?>">Undangan</a>
						<br>
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_agenda'); ?>">Agenda</a>
						<br>
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_logactivity'); ?>">Aktifitas Log</a>
						<br>
						<a style="text-decoration: none;" href="<?php echo site_url('super_admin/lap_login'); ?>">Login</a>
						<br>
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