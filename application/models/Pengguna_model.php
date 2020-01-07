<?php defined('BASEPATH') OR exit('No direct access script allowed');
	
	class Pengguna_model extends CI_Model{
		private $_table = "pengguna";

		public $no;
		public $username;
		public $nama;
		public $password;
		public $level;
		
		public function rules(){
			return [
				['field' => 'no',
				'label' => 'No',
				'rules' => 'required'],

				['field' => 'username',
				'label' => 'Username',
				'rules' => 'required'],
		
				['field' => 'nama',
				'label' => 'Nama',
				'rules' => 'required'],
		
				['field' => 'password',
				'label' => 'Password',
				'rules' => 'required'],
				
				['field' => 'level',
				'label' => 'Level',
				'rules' => 'required']
			];
		}

		public function getAll(){
			return $this->db->get($this->_table)->result();
		}

		public function getById($no){
			return $this->db->get_where($this->_table, ["no" => $no])->row();
		}

		public function save(){
			$post = $this->input->post();
			$this->no = $post["no"];
			$this->username = $post["username"];
			$this->nama = $post["nama"];
			$this->password = md5($post["password"]);
			$this->level = $post["level"];
			$this->db->insert($this->_table, $this);
		}

		public function update(){
			$post = $this->input->post();
			$this->no = $post["no"];
			$this->username = $post["username"];
			$this->nama = $post["nama"];
			$this->password = md5($post["password"]);
			$this->level = $post["level"];
			$this->db->update($this->_table, $this, array('no' => $post['no']));
		}

		public function delete($no){
			return $this->db->delete($this->_table, array("no" => $no));
		}
	}
?>