<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pcstatus extends CI_model {
    public function pcstatus1(){
        $mikrotik = array("01", "02", "03");
		$this->db->where('id',$id);
		$this->db->where('mac-address',$mac);
		$query = $this->db->get('pc');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $macactive)
			{
				/* $sess = array('Email'	=> $row->Email,
							  'password'	=> $row->password);
				$this->session->set_userdata($sess);
				redirect('BerandaMhs'); */

				if ($pc1 == 0) {
					//PC Rusak
				} else {
					//PC Aktif atau Tidak aktif
				}
				
			}
		}
    }
}