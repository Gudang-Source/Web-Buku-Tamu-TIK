<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ReportDB extends CI_Controller {
    function update_record() {
        $this->load->model('get_record');
		$this->get_record->update_record();
    }
}
