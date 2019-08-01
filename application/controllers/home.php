<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index()
	{
		//$this->model_keamanan->getkeamanan();
		//$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Home/konten_home';
		$isi['judul'] = 'Home';
		$isi['Welcome'] = 'Home';
		$isi['sub_judul'] = '';
		$isi['title'] = "E-Learning TIK";
		$isi['menu'] = "Home/menu/menu_home";
		$isi['macdb'] = $this->db->query("SELECT mac_address FROM pc ORDER BY `id` ASC");
		$isi['statusdb'] = $this->db->query("SELECT status_pc FROM pc ORDER BY `id` ASC");
		$isi['pcdb'] = $this->db->query("SELECT id FROM pc ORDER BY `id` ASC");
		$this->load->view('Home/tampilan_home',$isi);
	}
}
