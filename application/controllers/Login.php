<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		//$Email = $this->session->userdata('Email');
		$data['title'] = "Inventaris TIK | Masuk";
		$this->load->view('tampilan_login', $data);
	}

	public function getlogin()
	{
		$u = $this->input->post('Email');
		$p = $this->input->post('password');
		$this->load->model('model_login');
		$this->model_login->getlogin($u,$p);
	}
}
