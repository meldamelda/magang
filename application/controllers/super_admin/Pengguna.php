<?php defined('BASEPATH') OR exit('No direct access script allowed');

	class Pengguna extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model("pengguna_model");
			$this->load->library('form_validation');
			$this->load->model("login_model");
			if($this->login_model->level() != "Super Admin"){
				redirect("login/");
			}
		}

		public function index(){
			$data["jumlah"] = $this->db->count_all_results('pengguna');
			$data["pengguna"] = $this->pengguna_model->getAll();
			$this->load->view("super_admin/pengguna/list", $data);
		}

		public function add(){
			$pengguna = $this->pengguna_model;
			$validation = $this->form_validation;
			$validation->set_rules($pengguna->rules());
			$data["level"] = $this->db->anggota_enum('pengguna','level');

			if($validation->run()){
				$pengguna->save();
				$this->session->set_flashdata('success','berhasil disimpan');
			}
			$this->load->view("super_admin/pengguna/new_form", $data);
		}

		public function edit($no = null){
			if(!isset($no)) redirect('super_admin/pengguna');

			$pengguna = $this->pengguna_model;
			$validation = $this->form_validation;
			$validation->set_rules($pengguna->rules());

			if($validation->run()){
				$pengguna->update();
				$this->session->set_flashdata('success', 'Berhasil diubah');
			}

			$data["pengguna"] = $pengguna->getById($no);
			$data["level"] = $this->db->anggota_enum('pengguna','level');
			if(!isset($no)) show_404();

			$this->load->view("super_admin/pengguna/edit_form", $data);
		}

		public function delete($no = null){
			if(!isset($no)) show_404();

			if($this->$pengguna_model->delete($no)){
				redirect(site_url('super_admin/pengguna'));
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}
	}	
?>