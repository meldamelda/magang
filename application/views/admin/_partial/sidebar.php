  <ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?> ">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Overview</span>
        </a>
      </li>
      <li class="nav-item mt-3 mb-2 ">
        <span>
          <a class="ml-3 <?php echo $this->uri->segment(2) == 'surat_masuk' ? 'active': '' ?>" href="<?php echo site_url('admin/surat_masuk') ?>" id="" role="" data-toggle="" aria-haspopup="" aria-expanded="">
            <i class="fas fa-fw fa-folder"></i>
            <span>Surat Masuk</span>
          </a>
        </span>
        <span>
          <a href="<?php echo site_url('admin/surat_masuk/add') ?>">
            <i class="fas fa-fw fa-plus ml-5 <?php echo $this->uri->segment(2) == 'surat_masuk' ? 'active': '' ?>" ></i>
          </a>
        </span>
      </li>
      <li class="nav-item mt-3 mb-2">
        <span>
          <a class="ml-3 <?php echo $this->uri->segment(2) == 'surat_keluar' ? 'active': '' ?>" href="<?php echo site_url('admin/surat_keluar') ?>" id="" role="" data-toggle="" aria-haspopup="" aria-expanded="">
            <i class="fas fa-fw fa-folder"></i>
            <span>Surat Keluar</span>
          </a>
        </span>
        <span>
          <a href="<?php echo site_url('admin/surat_keluar/add') ?>">
            <i class="fas fa-fw fa-plus ml-5 <?php echo $this->uri->segment(2) == 'surat_keluar' ? 'active': '' ?>" ></i>
          </a>
        </span>
      </li>
      <li class="nav-item mt-3 mb-2">
        <span>
          <a class="ml-3 mr-3 <?php echo $this->uri->segment(2) == 'undangan' ? 'active': '' ?>" href="<?php echo site_url('admin/undangan') ?>" id="" role="" data-toggle="" aria-haspopup="" aria-expanded="">
            <i class="fas fa-fw fa-folder "></i>
            <span>Undangan</span>
          </a>
        </span>
        <span>
          <a href="<?php echo site_url('admin/undangan/add') ?>">
            <i class="fas fa-fw fa-plus ml-5 <?php echo $this->uri->segment(2) == 'undangan' ? 'active': '' ?>" ></i>
          </a>
        </span>
      </li>
      <li class="nav-item <?php echo $this->uri->segment(2) == 'laporan' ? 'active': '' ?> ">
        <a class="nav-link" href="<?php echo site_url('admin/laporan') ?>" >
          <i class="fas fa-fw fa-user"></i>
          <span>Laporan</span>
        </a>
      </li>
    </ul>