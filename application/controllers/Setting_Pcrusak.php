<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting_Pcrusak extends CI_Controller {
	public function index()
	{
		//$this->model_keamanan->getkeamanan();
		//$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Beranda/konten_setting_pcrusak';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Configuration PC';
		$isi['sub_judul'] = 'Setting PC Error';
		$isi['menu'] = "Beranda/menu/menu_setting";
		$isi['title'] = "E-Learning TIK | Konfigurasi";
		//$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		//$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Beranda/tampilan_beranda',$isi);
	}

	function updatepcrusak() {
		$id = $this->input->post('inputPCNumb');
		$status = $this->input->post('inputStatus');
		$this->load->model('model_settingpc');
		$this->model_settingpc->updatepcrusak($id,$status);
		echo "<script>window.alert('Perubahan data berhasil')</script>";
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/Bukutamu-TIK/setting_pcrusak'>";
	}
}
