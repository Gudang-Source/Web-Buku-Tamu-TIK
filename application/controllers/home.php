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
		//$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		/*$isi['data']		= $this->db->query("SELECT * FROM mahasiswa
                                                INNER JOIN tugas_akhir ON tugas_akhir.Email = mahasiswa.Email
                                                INNER JOIN dosen ON tugas_akhir.EmailDosen = dosen.EmailDosen
                                                WHERE mahasiswa.Email='$email_login'");
	 $isi['cek_kondisi'] = $this->db->query("SELECT id_ta FROM tugas_akhir WHERE Email = '$email_login'")->num_rows();*/
		$this->load->view('Home/tampilan_home',$isi);
	}
}
