<?php //defined('BASEPATH') OR exit('No direct script access allowed');

	class Lap_agenda extends CI_Controller{
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
			$pdf->Header($date, "agenda");
			$pdf->SetMargins(15,0);
			$pdf->SetTopMargin(30);
			if($date!=null){
				$this->db->order_by('tgl_acara', 'ASC');
				$this->db->select('*');
				$this->db->from('v_agenda');
				$this->db->like('tgl_acara', $date);
				$agenda = $this->db->get()->result();
			}else{
				$this->db->order_by('tgl_acara', 'ASC');
				$agenda = $this->db->get('v_agenda')->result();
			}
			$pdf->SetWidths(array(10,50,50,70));
			$i = 1;
			$pdf->SetX(15);
			foreach($agenda as $baris){
				$pdf->SetFont('Arial','',10);
				$pdf->Row(array(
									$i++,
									longdatetime_indo($baris->tgl_acara),
									$baris->tempat,
									$baris->acara
								));
			}
			$pdf->SetTitle('Agenda');
			$pdf->Output();
		}

	}

?>