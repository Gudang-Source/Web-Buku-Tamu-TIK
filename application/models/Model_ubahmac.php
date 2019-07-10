<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_ubahmac extends CI_model {
    public function updatemac($id,$mac_lama,$mac_baru) {
		$this->db->where('id',$id);
		$this->db->where('mac-addres',$mac_lama);
		$query = $this->db->get('pc');
		if($query->num_rows()>0)
		{
				if ($mac_lama == $mac_baru) {
					$this->session->set_flashdata('info',
							'<div class="alert alert-danger alert-dismissible">
							                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
							                Mac-address tidak boleh sama
							              </div>');
					redirect('Setting_Macaddress');
				}
				else {
						$hasil=$this->db->query("UPDATE `pc` SET `mac-address` = '$mac_baru' WHERE `pc`.`id` = '$id'");
						return $hasil;
				}
		}
		else {
			$this->session->set_flashdata('info',
					'<div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
					                Mac-address Lama Salah
					              </div>');
			redirect('Setting_Macaddress');
		}
	}
}