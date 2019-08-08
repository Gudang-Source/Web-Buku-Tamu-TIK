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
		$isi['pcdb'] = $this->db->query("SELECT id FROM pc ORDER BY `id` ASC");
		$isi['macdb'] = $this->db->query("SELECT mac_address FROM pc ORDER BY `id` ASC");
		$isi['checkmacdb'] = $this->db->query("SELECT mac_address FROM record ORDER BY `id` ASC");
		$isi['checknamadb'] = $this->db->query("SELECT nama FROM record ORDER BY `id` ASC");
		$isi['checknomorpcdb'] = $this->db->query("SELECT nomor_pc FROM record ORDER BY `id` ASC");
		$isi['checkipdb'] = $this->db->query("SELECT ip FROM record ORDER BY `id` ASC");
		$isi['checkiddb'] = $this->db->query("SELECT id FROM record ORDER BY `id` ASC");
		$isi['jumlah_id'] = $this->db->query("SELECT id FROM record ORDER BY `id` ASC")->num_rows();
		$this->load->view('Beranda/tampilan_beranda',$isi);
	}

	public function viewreport()
	{
		$isi['konten'] = 'Beranda/konten_report_view';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Report';
		$isi['sub_judul'] = 'Report';
		$isi['menu'] = "Beranda/menu/menu_nonaktif";
		$isi['title'] = "E-Learning TIK | Laporan";
		$this->load->model('model_report');
		$tanggalpilih = $this->input->post('tgl_report');
		$isi['data']		= $this->model_report->viewreport($tanggalpilih);
		$this->load->view('Beranda/tampilan_beranda',$isi);
	}

}
