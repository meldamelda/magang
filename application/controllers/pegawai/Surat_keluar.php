<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Surat_keluar extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("surat_keluar_model");
			$this->load->library('form_validation');
			$this->load->helper('download');
			$this->load->model("login_model");
			if($this->login_model->level() != "Pegawai"){
				redirect("login/");
			}
		}

		public function index(){
			$data["surat_keluar"] = $this->surat_keluar_model->getAll()->result();
			$data["jumlah"] = $this->surat_keluar_model->getAll()->num_rows();
			$this->load->view("pegawai/surat_keluar/list", $data);
		}

		public function add(){
			$surat_keluar = $this->surat_keluar_model;
			$validation = $this->form_validation;
			$validation->set_rules($surat_keluar->rules());

			if($validation->run()){
				$surat_keluar->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
			}

			$this->load->view("pegawai/surat_keluar/new_form");
		}

		public function unduh($file){
			
			force_download('upload/surat_keluar/'.$file, null);
		}
	}

?>