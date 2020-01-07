<?php //defined('BASEPATH') OR exit('No direct script access allowed');

	class Lap_login extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('pdf');
			$this->load->library('tabelpdf');
			$this->load->model("login_model");
			if($this->login_model->level() != "Super Admin"){
				redirect("login/");
			}
		}

		
		function index($date=null){
			$pdf = new Tabelpdf('P','mm','A4');
			$pdf->AliasNbPages();
			$pdf->AddPage();
			$pdf->Header($date, "login");
			$pdf->SetMargins(15,0);
			$pdf->SetTopMargin(30);
			if($date!=null){
				$this->db->order_by('tgl_waktu', 'ASC');
				$this->db->select('*');
				$this->db->from('v_login');
				$this->db->like('tgl_waktu', $date);
				$login = $this->db->get()->result();
			}else{
				$this->db->order_by('tgl_waktu', 'ASC');
				$login = $this->db->get('v_login')->result();
			}
			$pdf->SetWidths(array(10,50,70));
			$i = 1;
			$pdf->SetX(15);
			foreach($login as $baris){
				$pdf->SetFont('Arial','',10);
				$pdf->Row(array(
									$i++,
									$baris->nama,
									$baris->tgl_waktu
								));
			}
			$pdf->SetTitle('Login');
			$pdf->Output();
		}
	}

?>