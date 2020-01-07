<?php //defined('BASEPATH') OR exit('No direct script access allowed');

	class Lap_surat_keluar extends CI_Controller{
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
			$pdf->AddPage();
			$pdf->Header($date, "surat_keluar");
			$pdf->SetMargins(15,0);
			$pdf->SetTopMargin(30);
			if($date!=null){
				$this->db->order_by('tanggal', 'ASC');
				$surat_keluar = $this->db->get_where('surat_keluar', ["tanggal" => $date])->result();
			}else{
				$this->db->order_by('tanggal', 'ASC');
				$surat_keluar = $this->db->get('surat_keluar')->result();
			}
			$pdf->SetWidths(array(10,25,35,35,75));
			$i = 1;
			$pdf->SetX(15);
			foreach($surat_keluar as $baris){
				$pdf->SetFont('Arial','',10);
				$pdf->Row(array(
									$i++,
									$baris->kode,
									$baris->tujuan,
									tanggal_indo($baris->tanggal),
									$baris->perihal
								));
			}
			$pdf->SetTitle('Surat Keluar');
			$pdf->Output();
		}
	}

?>