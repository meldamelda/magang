<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model("login_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		if($this->login_model->logged_in()){
			if($this->login_model->level() =="Super Admin"){
				redirect("super_admin/overview");
			}else if($this->login_model->level() == "Admin"){
				redirect("admin/overview");
			}else{
				redirect("pegawai/overview");
			}
		}else{
			$validation = $this->form_validation;
			$validation->set_rules('username', 'Username', 'required');
			$validation->set_rules('password', 'Password', 'required');

			$validation->set_message('required', '<div class="alert alert-danger mt-3">
				<div class="header"><b><i class="a fa-exclamation-circle"></i> {field}</b> harus diisi</div></div> ');

			if($validation->run() == TRUE){
				$username = $this->input->post("username", TRUE);
				$password = MD5($this->input->post('password', TRUE));
				

				$login = $this->login_model;
				$checking = $login->cek_login($username, $password);
				if($checking != FALSE){
					foreach($checking as $datauser){
						$session_data = array(
							'no' => $datauser->no,
							'username' => $datauser->username,
							'nama' => $datauser->nama,
							'password' => $datauser->password,
							'level' => $datauser->level
						);
						$this->session->set_userdata($session_data);

						if($this->session->userdata("level") == "Super Admin"){
							redirect('super_admin/overview');
						}else if($this->session->userdata("level") == "Admin"){
							redirect('admin/overview');
						}else{
							redirect('pegawai/overview');
						}

					}				
				}else{
					$data["error"] = '<div class="alert alert-danger mt-3">
						<div class="header"><b><i class="fa fa-exclamation-circle"></i>Error</b> username atau password salah!</div></div>';
					$this->load->view('login', $data);
				}
			}else{
				$this->load->view('login');
			}
		}
	}

}

?>