<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Undangan extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("undangan_model");
			$this->load->library('form_validation');
			$this->load->helper('download');
			$this->load->model("login_model");
			if($this->login_model->level() != "Super Admin"){
				redirect("login/");
			}
		}

		public function index(){
			$data["undangan"] = $this->undangan_model->getAll()->result();
			$data["jumlah"] = $this->undangan_model->getAll()->num_rows();
			$this->load->view("super_admin/undangan/list", $data);
		}

		public function add(){
			$undangan = $this->undangan_model;
			$validation = $this->form_validation;
			$validation->set_rules($undangan->rules());

			if($validation->run()){
				$undangan->save();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
			}

			$this->load->view("super_admin/undangan/new_form");
		}

		public function edit($id = null){
			if(!isset($id)) redirect('super_admin/undangan');

			$undangan = $this->undangan_model;
			$validation = $this->form_validation;
			$validation->set_rules($undangan->rules());

			if($validation->run()){
				$undangan->update();
				$this->session->set_flashdata('success', 'Berhasil diubah');
			}

			$data["undangan"] = $undangan->getById($id);
			if(!$data["undangan"]) show_404();

			$this->load->view("super_admin/undangan/edit_form", $data);
		}

		public function delete($id = null){
			if(!isset($id)) show_404();

			if($this->undangan_model->delete($no)){
				redirect(site_url('super_admin/undangan'));
			}
		}

		public function unduh($file){
			
			force_download('upload/undangan/'.$file, null);
		}
	}

?>