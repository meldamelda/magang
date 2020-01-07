<?php defined('BASEPATH') OR exit('No direct access script allowed');

	class Login_model extends CI_Model{

		public function logged_in(){
			return $this->session->userdata('no');
		}

		public function level(){
			return $this->session->userdata('level');
		}

		public function cek_login($kunci1, $kunci2){
			$this->db->select('*');
            $this->db->from('pengguna');
            $this->db->where('username', $kunci1);
            $this->db->where('password', $kunci2);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 0) {
                return FALSE;
            } else {
                $this->_terakhirLogin($kunci1);
                return $query->result();
            }
		}

        private function _terakhirLogin($no){
            $sql = "UPDATE pengguna SET terakhir_login = now() WHERE username = '".$no."'";
            $this->db->query($sql);
        }
	}
/* 
	function is_logged_in()
    {
        return $this->session->userdata('user_id');
    }

    //fungsi cek level
    function is_role()
    {
        return $this->session->userdata('role');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }
*/
?>
