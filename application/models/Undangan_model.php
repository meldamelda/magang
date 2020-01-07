<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Undangan_model extends CI_Model{
		private $_table = "undangan";

		public $id;
		public $no;
		public $tgl_diterima;
		public $pengirim;
		public $tgl_acara;
		public $tempat;
		public $acara;
		public $yg_hadir;
		public $file;
		public $id_pengguna;
		public $tgl_waktu;

		public function rules(){
			return [
				['field' => 'no',
				'label' => 'No',
				'rules' => 'required'],

				['field' => 'tgl_diterima',
				'label' => 'Tanggal diterima',
				'rules' => 'required'],

				['field' => 'pengirim',
				'label' => 'Pengirim',
				'rules' => 'required'],

				['field' => 'tgl_acara',
				'label' => 'Tanggal Acara',
				'rules' => 'required'],

				['field' => 'tempat',
				'label' => 'Tempat',
				'rules' => 'required'],

				['field' => 'acara',
				'label' => 'Acara',
				'rules' => 'required'],

				['field' => 'yg_hadir',
				'label' => 'Yang Menghadiri',
				'rules' => 'required']
			];
		}

		public function getAll(){
			$this->db->select('*');
			$this->db->from($this->_table);
			$this->db->like('tgl_diterima', date('yy'));
			$this->db->order_by('tgl_diterima', 'ASC');
			return $this->db->get();
		}

		public function getById($id){
			return $this->db->get_where($this->_table, ["id" => $id])->row();
		}

		public function getAllByDate(){
			$this->db->select('*');
			$this->db->from($this->_table);
			$this->db->like('tgl_diterima', date('yy-m-d'));
			$this->db->order_by('tgl_diterima', 'ASC');
			return $this->db->get();
		}

		public function save(){
			$post = $this->input->post();
			$this->id = uniqid();
			$this->no = $post["no"];
			$this->tgl_diterima = $post["tgl_diterima"];
			$this->pengirim = $post["pengirim"];
			$this->tgl_acara = $post["tgl_acara"];
			$this->tempat = $post["tempat"];
			$this->acara = $post["acara"];
			$this->yg_hadir = $post["yg_hadir"];
			$this->file = $this->_uploadPdf();
			$this->id_pengguna = $this->session->userdata("no");
			$this->tgl_waktu = date('Y-m-d H:i:s');
			$this->db->insert($this->_table, $this);
		}

		public function update(){
			$post = $this->input->post();
			$this->id = $post["id"];
			$this->no = $post["no"];
			$this->tgl_diterima = $post["tgl_diterima"];
			$this->pengirim = $post["pengirim"];
			$this->tgl_acara = $post["tgl_acara"];
			$this->tempat = $post["tempat"];
			$this->acara = $post["acara"];
			$this->yg_hadir = $post["yg_hadir"];
			if(!empty($_FILES["file"]["name"])){
				$this->file = $this->_uploadPdf();
			}else{
				$this->file = $post["old_pdf"];
			}

			$this->id_pengguna = $this->session->userdata("no");
			$this->tgl_waktu = date('Y-m-d H:i:s');
			$this->db->update($this->_table, $this, array('id' => $post['id']));
		}

		public function delete($id){
			$this->_deletePdf($id);
			return $this->db->delete($this->_table, array("id" => $id));
		}

		private function _uploadPdf(){
			$config['upload_path']		= './upload/undangan/';
			$config['allowed_types']	= 'pdf';
			$config['file_name']		= $this->id;
			$config['overwrite']		= true;

			$this->load->library('upload', $config);

			if($this->upload->do_upload('file')){
				return $this->upload->data("file_name");
			}

			return "default.pdf";
		}

		private function _deletePdf($id){
			$undangan = $this->getById($id);
			if($undangan->file != "default.pdf"){
				$filename = explode(".", $undangan->file)[0];
				return array_map('unlink', glob(FCPATH. "upload/undangan/$filename.*"));
			}			
		}
	}

?>