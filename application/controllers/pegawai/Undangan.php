<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Undangan extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("undangan_model");
			$this->load->library('form_validation');
			$this->load->helper('download');
			$this->load->model("login_model");
			if($this->login_model->level() != "Pegawai"){
				redirect("login/");
			}
		}

		public function index(){
			$data["undangan"] = $this->undangan_model->getAll()->result();
			$data["jumlah"] = $this->undangan_model->getAll()->num_rows();
			$this->load->view("pegawai/undangan/list", $data);
		}

		public function unduh($file){
			
			force_download('upload/undangan/'.$file, null);
		}
	}

?>