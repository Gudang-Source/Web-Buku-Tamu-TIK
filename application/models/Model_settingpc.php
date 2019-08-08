<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_settingpc extends CI_model {
    public function updatemac($id,$mac_baru) {
		$hasil=$this->db->query("UPDATE `pc` SET `mac_address` = '$mac_baru' WHERE `pc`.`id` = $id");
		return $hasil;
	}

	public function updatepcrusak($id,$status) {
		$hasil=$this->db->query("UPDATE `pc` SET `status_pc` = '$status' WHERE `pc`.`id` = $id");
		return $hasil;
	}
}