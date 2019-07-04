<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add extends CI_Controller {
	public function index()
	{
		//$this->model_keamanan->getkeamanan();
		//$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Beranda/konten_tambahbrg';
		$isi['judul'] = 'Tambah';
		$isi['Welcome'] = 'Tambah Barang';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Beranda/menu/menu_nonaktif";
		$isi['title'] = "Inventaris TIK | Add Barang";
		//$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		//$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Beranda/tampilan_beranda',$isi);
	}

}
