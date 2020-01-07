<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Surat_masuk extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("surat_masuk_model");
			$this->load->library('form_validation');
			$this->load->helper('download');
			$this->load->model("login_model");
			if($this->login_model->level() != "Admin"){
				redirect("login/");
			}
		}

		public function index(){
			$data["jumlah"] = $this->db->count_all_results('surat_masuk');
			$data["surat_masuk"] = $this->surat_masuk_model->getAll()->result();
			$this->load->view("admin/surat_masuk/list", $data);
		}

		public function add(){
			$surat_masuk = $this->surat_masuk_model;
			$validation = $this->form_validation;
			$validation->set_rules($surat_masuk->rules());

			if($validation->run()){
				$surat_masuk->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
			}

			$this->load->view("admin/surat_masuk/new_form");
		}

		public function edit($id = null){
			if(!isset($id)) redirect('admin/surat_masuk');

			$surat_masuk = $this->surat_masuk_model;
			$validation = $this->form_validation;
			$validation->set_rules($surat_masuk->rules());

			if($validation->run()){
				$surat_masuk->update();
				$this->session->set_flashdata('success', 'Berhasil diubah');
			}

			$data["surat_masuk"] = $surat_masuk->getById($id);
			if(!$data["surat_masuk"]) show_404();

			$this->load->view("admin/surat_masuk/edit_form", $data);
		}

		public function delete($id = null){
			if(!isset($id)) show_404();

			if($this->surat_masuk_model->delete($no)){
				redirect(site_url('admin/surat_masuk'));
			}
		}

		public function unduh($file){

			force_download('upload/surat_masuk/'.$file, null);
		}
	}

?>