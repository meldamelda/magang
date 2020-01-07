<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Surat_keluar_model extends CI_Model{
		private $_table = "surat_keluar";

		public $id;
		public $no;
		public $kode;
		public $tujuan;
		public $tanggal;
		public $perihal;
		public $file;
		public $id_pengguna;
		public $tgl_waktu;

		public function rules(){
			return [
				['field' => 'no',
				'label' => 'No',
				'rules' => 'required'],

				['field' => 'kode',
				'label' => 'Kode',
				'rules' => 'required'],

				['field' => 'tujuan',
				'label' => 'Tujuan',
				'rules' => 'required'],

				['field' => 'tanggal',
				'label' => 'Tanggal',
				'rules' => 'required'],

				['field' => 'perihal',
				'label' => 'Perihal',
				'rules' => 'required']				
			];
		}

		public function getAll(){
			$this->db->select('*');
			$this->db->from($this->_table);
			$this->db->like('tanggal', date('yy'));
			$this->db->order_by('tanggal', 'ASC');
			return $this->db->get();
		}

		public function getById($id){
			return $this->db->get_where($this->_table, ["id" => $id])->row();
		}

		public function getAllByDate(){
			$this->db->select('*');
			$this->db->from($this->_table);
			$this->db->like('tanggal', date('yy-m-d'));
			$this->db->order_by('tanggal', 'ASC');
			return $this->db->get();
		}

		public function save(){
			$post = $this->input->post();
			$this->id = uniqid();
			$this->no = $post["no"];
			$this->kode = $post["kode"];
			$this->tujuan = $post["tujuan"];
			$this->tanggal = $post["tanggal"];
			$this->perihal = $post["perihal"];
			$this->file = $this->_uploadPdf();
			$this->id_pengguna = $this->session->userdata("no");
			$this->tgl_waktu = date('Y-m-d H:i:s');
			$this->db->insert($this->_table, $this);
		}

		public function update(){
			$post = $this->input->post();
			$this->id = $post["id"];
			$this->no = $post["no"];
			$this->kode = $post["kode"];
			$this->tujuan = $post["tujuan"];
			$this->tanggal = $post["tanggal"];
			$this->perihal = $post["perihal"];

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
			$config['upload_path']		= './upload/surat_keluar/';
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
			$surat_keluar = $this->getById($id);
			if($surat_keluar->file != "default.pdf"){
				$filename = explode(".", $surat_keluar->file)[0];
				return array_map('unlink', glob(FCPATH. "upload/surat_keluar/$filename.*"));
			}			
		}
	}
?>