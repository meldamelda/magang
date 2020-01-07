<?php //defined('BASEPATH') OR exit('No direct script access allowed');

	//define('FPDF',APPPATH . 'third_party/fpdf.php');
	//require(APPPATH . 'third_party/fpdf.php');

	class Lap_logactivity extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('pdf');
			$this->load->model("login_model");
			if($this->login_model->level() != "Super Admin"){
				redirect("login/");
			}
		}
		function index($date=null){
			$pdf = new FPDF('P','mm','A4');
			$pdf->AliasNbPages();
			$lap = "logactivity";
			$pdf->AddPage();
			$pdf->Header($date, "logactivity");
			$pdf->SetMargins(15,0);
			$pdf->SetTopMargin(30);
			if($date!=null){
				$this->db->order_by('tgl_waktu', 'ASC');
				$this->db->select('*');
				$this->db->from('v_logactivity');
				$this->db->like('tgl_waktu', $date);
				$log = $this->db->get()->result();
			}else{
				$this->db->order_by('tgl_waktu', 'ASC');
				$log = $this->db->get('v_logactivity')->result();
			}
			$pdf->SetWidths(array(10,25,25,30,30,50));
			$i = 1;
			$pdf->SetX(15);
			foreach($log as $baris){
				$pdf->SetFont('Arial','',10);
				$pdf->Row(array(
									$i++,
									$baris->action,
									$baris->tabel,
									$baris->id,
									$baris->nama,
									$baris->tgl_waktu
								));
			}
			$pdf->SetTitle('Log Aktifitas');
			$pdf->Output();
		}

	}

?>