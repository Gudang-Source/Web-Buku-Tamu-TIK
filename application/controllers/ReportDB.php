<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ReportDB extends CI_Controller {
    public function index()
	{
        $isi['title'] = "Update Report";
        $isi['pcdb'] = $this->db->query("SELECT id FROM pc ORDER BY `id` ASC");
		$isi['macdb'] = $this->db->query("SELECT mac_address FROM pc ORDER BY `id` ASC");
		$isi['checkmacdb'] = $this->db->query("SELECT mac_address FROM record ORDER BY `id` ASC");
		$isi['checknamadb'] = $this->db->query("SELECT nama FROM record ORDER BY `id` ASC");
		$isi['checknomorpcdb'] = $this->db->query("SELECT nomor_pc FROM record ORDER BY `id` ASC");
		$isi['checkipdb'] = $this->db->query("SELECT ip FROM record ORDER BY `id` ASC");
		$isi['checkiddb'] = $this->db->query("SELECT id FROM record ORDER BY `id` ASC");
		$isi['jumlah_id'] = $this->db->query("SELECT id FROM record ORDER BY `id` ASC")->num_rows();
		$this->load->view('update_report', $isi);
    }
}
