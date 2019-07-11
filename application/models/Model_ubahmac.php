<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ubahmac extends CI_model {
    public function updatemac($id,$mac_baru) {
		$hasil=$this->db->query("UPDATE `pc` SET `mac-addres` = '$mac_baru' WHERE `pc`.`id` = $id");
		return $hasil;
	}
}