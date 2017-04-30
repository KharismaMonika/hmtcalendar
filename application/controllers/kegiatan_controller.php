<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kegiatan_controller extends CI_Controller {

	function list_event_today(){
		$data['listevent'] 	= $this->Model_kegiatan->event_today();
		#print_r($data);
		$this->load->view('admin/dashboard', $data);
	}

}
