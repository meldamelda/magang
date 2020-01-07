  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php 
    $segment1 = str_replace("_", " ", $this->uri->segment(1));
    $segment2 = str_replace("_", " ", $this->uri->segment(2));
  ?>

  <title><?php echo SITE_NAME ." : ". ucwords($segment1) ." - ". ucwords($segment2) ?></title>

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