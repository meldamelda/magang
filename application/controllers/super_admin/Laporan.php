<?php defined('BASEPATH')OR exit('No direct access script allowed');

	class Laporan extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("login_model");
			if($this->login_model->level() != "Super Admin"){
				redirect("login/");
			}
		}

		public function index(){
			$this->load->view("super_admin/laporan/menu");
		}
	}


?>