<?php
	class Overview extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model("surat_masuk_model");
			$this->load->model("surat_keluar_model");
			$this->load->model("undangan_model");
			$this->load->model("login_model");
			if($this->login_model->level() != "Pegawai"){
				redirect("login/");
			}
		}

		public function index(){
			$data["surat_masuk"] = $this->surat_masuk_model->getAllByDate()->num_rows();
			$data["surat_keluar"] = $this->surat_keluar_model->getAllByDate()->num_rows();
			$data["undangan"] = $this->undangan_model->getAllByDate()->num_rows();
			$this->db->select('*');
			$this->db->from("v_agenda");
			$this->db->like('tgl_acara', date('yy-m-d'));
			$this->db->order_by('tgl_acara', 'ASC');
			$agenda = $this->db->get();
			$data["agenda"] = $agenda->num_rows();
			$this->load->view("pegawai/overview", $data);
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}
	}
?>