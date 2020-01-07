<?php //defined('BASEPATH') OR exit('No direct script access allowed');

	class Lap_surat_masuk extends CI_Controller{
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
			$pdf->Header($date, "surat_masuk");
			$pdf->SetMargins(15,0);
			$pdf->SetTopMargin(30);
			if($date!=null){
				$this->db->order_by('tanggal', 'ASC');
				$surat_masuk = $this->db->get_where('surat_masuk', ["tanggal" => $date])->result();
			}else{
				$this->db->order_by('tanggal', 'ASC');
				$surat_masuk = $this->db->get('surat_masuk')->result();
			}
			$pdf->SetWidths(array(10,25,30,35,45,35));
			$i = 1;
			$pdf->SetX(15);
			foreach($surat_masuk as $baris){
				$pdf->SetFont('Arial','',10);
				$pdf->Row(array(
									$i++,
									$baris->pengirim,
									tanggal_indo($baris->tanggal),
									$baris->nomor_surat,
									$baris->perihal,
									$baris->disposisi
								));
			}
			$pdf->SetTitle('Surat Masuk');
			$pdf->Output();
		}
	}

?>