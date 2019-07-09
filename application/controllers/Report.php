<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Report extends CI_Controller {
	public function index()
	{
		//$this->model_keamanan->getkeamanan();
		//$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Beranda/konten_report';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Report';
		$isi['sub_judul'] = 'Report';
		$isi['menu'] = "Beranda/menu/menu_report";
		$isi['title'] = "E-Learning TIK | Laporan";
		//$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		//$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Beranda/tampilan_beranda',$isi);
	}
}
