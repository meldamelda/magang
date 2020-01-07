<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	if(!function_exists('tanggal_indo')){
		function tanggal_indo($tgl){
			$ubah = gmdate($tgl,time()+60*60*8);
			$pecah = explode("-", $ubah);
			$tanggal = $pecah[2];
			$bulan = bulan($pecah[1]);
			$tahun = $pecah[0];

			return $tanggal.' '.$bulan.' '.$tahun;
		}
	}

	if(!function_exists('bulan')){
		function bulan($bln){
			switch($bln){
				case 1:
					return "Januari";
					break;
				case 2:
					return "Februari";
					break;
				case 3:
					return "Maret";
					break;
				case 4:
					return "April";
					break;
				case 5:
					return "Mei";
					break;
				case 6:
					return "Juni";
					break;
				case 7:
					return "Juli";
					break;
				case 8:
					return "Agustus";
					break;
				case 9:
					return "September";
					break;
				case 10:
					return "Oktober";
					break;
				case 11:
					return "November";
					break;
				case 12:
					return "Desember";
					break;
			}
		}
	}

	//format shortdate
	if(!function_exists('shortdate_indo')){
		function shortdate_indo($tgl){
			$ubah = gmdate($tgl,time()+60*60*8);
			$pecah = explode("-", $ubah);
			$tanggal = $pecah[2];
			$bulan = short_bulan($pecah[1]);
			$tahun = $pecah[0];

			return $tanggal.'/'.$bulan.'/'.$tahun;
		}
	}

	if(!function_exists('short_bulan')){
		function short_bulan($bln){
			switch($bln){
				case 1:
					return "01";
					break;
				case 2:
					return "02";
					break;
				case 3:
					return "03";
					break;
				case 4:
					return "04";
					break;
				case 5:
					return "05";
					break;
				case 6:
					return "06";
					break;
				case 7:
					return "07";
					break;
				case 8:
					return "08";
					break;
				case 9:
					return "09";
					break;
				case 10:
					return "10";
					break;
				case 11:
					return "11";
					break;
				case 12:
					return "12";
					break;
			}
		}
	}

	//format mediumdate
	if(!function_exists('mediumdate_indo')){
		function mediumdate_indo($tgl){
			$ubah = gmdate($tgl,time()+60*60*8);
			$pecah = explode("-", $ubah);
			$tanggal = $pecah[2];
			$bulan = medium_bulan($pecah[1]);
			$tahun = $pecah[0];

			return $tanggal.'-'.$bulan.'-'.$tahun;
		}
	}

	if(!function_exists('medium_bulan')){
		function medium_bulan($bln){
			switch($bln){
				case 1:
					return "Jan";
					break;
				case 2:
					return "Feb";
					break;
				case 3:
					return "Mar";
					break;
				case 4:
					return "Apr";
					break;
				case 5:
					return "Mei";
					break;
				case 6:
					return "Jun";
					break;
				case 7:
					return "Jul";
					break;
				case 8:
					return "Ags";
					break;
				case 9:
					return "Sep";
					break;
				case 10:
					return "Okt";
					break;
				case 11:
					return "Nov";
					break;
				case 12:
					return "Des";
					break;
			}
		}
	}

	//format longdate
	if(!function_exists('longdate_indo')){
		function longdate_indo($tgl){
			$ubah = gmdate($tgl,time()+60*60*8);
			$pecah = explode("-", $ubah);
			$tanggal = $pecah[2];
			$bulan = $pecah[1];
			$tahun = $pecah[0];
			$bln =bulan($pecah[1]);

			$nama = date("l", mktime(0,0,0,$bulan,$tanggal,$tahun));
			$nama_hari = "";
			if($nama == "Sunday"){$nama_hari = "Minggu";}
			else if($nama == "Monday"){$nama_hari = "Senin";}
			else if($nama == "Tuesday"){$nama_hari = "Selasa";}
			else if($nama == "Wednesday"){$nama_hari = "Rabu";}
			else if($nama == "Thursday"){$nama_hari = "Kamis";}
			else if($nama == "Friday"){$nama_hari = "Jumat";}
			else if($nama == "Saturday"){$nama_hari = "Sabtu";}

			return $nama_hari.', '.$tanggal.' '.$bln.' '.$tahun;
		}
	}

	//format longdate + time
	if(!function_exists('longdatetime_indo')){
		function longdatetime_indo($tgl){
			$ubah = gmdate($tgl,time()+60*60*8);
			$pecah = explode("-", $ubah);
			$tahun = $pecah[0];
			$bulan = $pecah[1];
			$sisa = $pecah[2];
			$ubah2 = explode(" ", $sisa);
			$tanggal = $ubah2[0];
			$sisa2 = $ubah2[1];
			$ubah3 = explode(":", $sisa2);
			$jam = $ubah3[0];
			$menit = $ubah3[1];
			$detik = $ubah3[2];
			$bln = bulan($pecah[1]);

			$nama = date("l", mktime(0,0,0,$bulan,$tanggal,$tahun));
			$nama_hari = "";
			if($nama == "Sunday"){$nama_hari = "Minggu";}
			else if($nama == "Monday"){$nama_hari = "Senin";}
			else if($nama == "Tuesday"){$nama_hari = "Selasa";}
			else if($nama == "Wednesday"){$nama_hari = "Rabu";}
			else if($nama == "Thursday"){$nama_hari = "Kamis";}
			else if($nama == "Friday"){$nama_hari = "Jumat";}
			else if($nama == "Saturday"){$nama_hari = "Sabtu";}

			return $nama_hari.', '.$tanggal.' '.$bln.' '.$tahun.' '.$jam.':'.$menit;
		}
	}

	
?>