<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_report extends CI_model {
    public function viewreport($tanggalpilih){
        $hasil=$this->db->query("SELECT * FROM record WHERE tanggal='$tanggalpilih'");
        return $hasil;
    }
}