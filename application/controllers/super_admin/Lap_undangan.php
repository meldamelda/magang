<?php //defined('BASEPATH') OR exit('No direct script access allowed');

	class Lap_undangan extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->library('pdf');
			$this->load->model("login_model");
			if($this->login_model->level() != "Super Admin"){
				redirect("login/");
			}
		}

		
		function index($date = null){
			$pdf = new FPDF('P','mm','A4');
			$pdf->AliasNbPages();
			$pdf->AddPage();
			$pdf->Header($date, "undangan");
			$pdf->SetMargins(15,0);
			$pdf->SetTopMargin(30);
			if($date!=null){
				$pdf->SetFont('Arial','B',12);
				$pdf->Cell(180,7,longdate_indo($date),0,1,'C');
				$this->db->order_by('tgl_diterima', 'ASC');
				$undangan = $this->db->get_where('undangan', ["tgl_diterima" => $date])->result();
			}else{
				$this->db->order_by('tgl_diterima', 'ASC');
				$undangan = $this->db->get('undangan')->result();
			}
			$pdf->SetWidths(array(10,30,25,35,40,40));
			$i = 1;
			$pdf->SetX(15);
			foreach($undangan as $baris){
				$pdf->SetFont('Arial','',10);
				$pdf->Row(array(
									$i++,
									tanggal_indo($baris->tgl_diterima),
									$baris->pengirim,
									longdatetime_indo($baris->tgl_acara),
									$baris->tempat,
									$baris->acara
								));
			}
			$pdf->SetTitle('Undangan');
			$pdf->Output();
		}
	}

?>