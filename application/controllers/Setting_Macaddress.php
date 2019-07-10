<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setting_Macaddress extends CI_Controller {
	public function index()
	{
		//$this->model_keamanan->getkeamanan();
		//$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Beranda/konten_setting_macaddress';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Configuration PC';
		$isi['sub_judul'] = 'Setting Mac-address';
		$isi['menu'] = "Beranda/menu/menu_setting";
		$isi['title'] = "E-Learning TIK | Konfigurasi";
		//$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		//$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Beranda/tampilan_beranda',$isi);
	}

	function updatesandi() {
		$id = $this->session->userdata('inputMac');
		$mac_lama = $this->input->post('inputOldMac');
		$mac_baru = $this->input->post('inputNewMac');
		$this->load->model('model_ubahmac');
		$this->model_ubahmac->updatemac($id,$mac_lama,$mac_baru);
		echo "<script>window.alert('Mac-address Berhasil diubah dengan Mac-address baru')</script>";
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/Bukutamu-TIK/setting_macaddress'>";
	}
}
