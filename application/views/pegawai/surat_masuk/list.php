<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("pegawai/_partial/head.php") ?>
</head>
<body id="page-top">
	<?php $this->load->view("pegawai/_partial/navbar.php") ?>
	<div id="wrapper">
		<?php $this->load->view("pegawai/_partial/sidebar.php") ?>
		<div id="content-wrapper">
			<div class="container-fluid">
				<?php $this->load->view("pegawai/_partial/breadcrumb.php") ?>
				<!-- datatables -->
				<div class="card mb-3">
					<div class="card-header">
						<!--<a href="<?php echo site_url('pegawai/surat_masuk/add') ?>">
							<i class="fas fa-plus"></i>
							Tambah Baru
						</a> -->
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Pengirim</th>
										<th>Tanggal</th>
										<th>Nomor Surat</th>
										<th>Perihal</th>
										<th>Disposisi</th>
										<th>File</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php foreach($surat_masuk as $surat_masuk): ?>
										<tr>
											<td width="5%"><?php echo $i++ ?></td>
											<td width="10%"><?php echo $surat_masuk->pengirim ?></td>
											<td width="10%"><?php echo tanggal_indo($surat_masuk->tanggal); ?></td>
											<td width="15%"><?php echo $surat_masuk->nomor_surat ?></td>
											<td width="27%"><?php echo $surat_masuk->perihal ?></td>
											<td width="10%"><?php echo $surat_masuk->disposisi ?></td>
											<td width="10%">
												<a href="<?php echo site_url('pegawai/surat_masuk/unduh/'.$surat_masuk->file) ?>" class="btn btn-small text-info">
													<i class="fas fa-download"></i>
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- end card-body -->
				</div>
				<!-- end card mb-3 -->
			</div>
			<!-- end container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("pegawai/_partial/footer.php") ?>
		</div>
		<!-- end content-wrapper -->
	</div>
	<!-- end wrapper -->
	<?php $this->load->view("pegawai/_partial/scrolltop.php") ?>
	<?php $this->load->view("pegawai/_partial/modal.php") ?>

	<?php $this->load->view("pegawai/_partial/js.php") ?>

	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
	</script>
</body>
</html>