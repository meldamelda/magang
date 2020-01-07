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

        <?php //$this->load->view("admin/_partial/breadcrumb.php") ?>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-melda2 o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-arrow-alt-circle-down"></i>
                </div>
                <div class="mr-5"><?php echo $surat_masuk ?> Surat Masuk!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-melda4 o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-arrow-alt-circle-up"></i>
                </div>
                <div class="mr-5"><?php echo $surat_keluar ?> Surat Keluar!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-melda1 o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-calendar-plus"></i>
                </div>
                <div class="mr-5"><?php echo $undangan ?> Undangan Masuk!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-melda3 o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-calendar-day"></i>
                </div>
                <div class="mr-5"><?php echo $agenda ?> Agenda Hari ini!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-calendar-alt"></i>
            Area Chart Example</div>
          <div class="card-body">
            <div class="agenda">
                    <span class="hari">Minggu</span>
                    <span class="hari">Senin</span>
                    <span class="hari">Selasa</span>
                    <span class="hari">Rabu</span>
                    <span class="hari">Kamis</span>
                    <span class="hari">Jumat</span>
                    <span class="hari">Sabtu</span>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php $this->load->view("admin/_partial/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("admin/_partial/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_partial/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("admin/_partial/js.php") ?>

</body>

</html>
