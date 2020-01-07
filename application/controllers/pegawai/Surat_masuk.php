<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Surat_masuk extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("surat_masuk_model");
			$this->load->library('form_validation');
			$this->load->helper('download');
			$this->load->model("login_model");
			if($this->login_model->level() != "Pegawai"){
				redirect("login/");
			}
		}

		public function index(){
			$data["surat_masuk"] = $this->surat_masuk_model->getAll()->result();
			$data["jumlah"] = $this->surat_masuk_model->getAll()->num_rows();
			$this->load->view("pegawai/surat_masuk/list", $data);
		}

		public function unduh($file){

			force_download('upload/surat_masuk/'.$file, null);
		}
	}

?>