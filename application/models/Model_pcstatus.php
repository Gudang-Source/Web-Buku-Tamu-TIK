<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pcstatus extends CI_model {
    public function pcstatus1(){
        $mikrotik = array("01", "02", "03");
        $id = 1;
		$this->db->where('id',$id);
		$this->db->where('mac-address',$mac);
		$query = $this->db->get('pc');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sess = array('Email'	=> $row->Email,
							  'password'	=> $row->password);
				$this->session->set_userdata($sess);
				redirect('BerandaMhs');
			}
		}
    }
}