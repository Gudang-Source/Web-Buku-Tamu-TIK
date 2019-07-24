<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Beranda extends CI_Controller {
	public function index()
	{
		//$this->model_keamanan->getkeamanan();
		//$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Beranda/konten_beranda';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Beranda';
		$isi['sub_judul'] = '';
		$isi['title'] = "E-Learning TIK | Dashboard";
		$isi['menu'] = "Beranda/menu/menu_beranda";
		$isi['data'] = $this->db->query("SELECT mac_address FROM pc ORDER BY `id` ASC");
		$this->load->view('Beranda/tampilan_beranda',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
