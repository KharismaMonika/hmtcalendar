<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kepengurusan_controller extends CI_Controller {

	public function input()
	{
		$this->load->view('admin/tambah_kepengurusan');
	}

	public function input_kepengurusan()
	{
		$data_kepengurusan = array(
			'nama_kepengurusan'=> $this->input->post('nama_kepengurusan'),
			'tahun_mulai'   => $this->input->post('tahun_mulai'),
			'tahun_berakhir'  => $this->input->post('tahun_berakhir')

			); 
		$this->db->insert('kepengurusan', $data_kepengurusan);
	//nama_k = $this->input->post('nama_kepengurusan');
	//tahun_m = $this->input->post('tahun_mulai');
	//tahun_b = $this->input->post('tahun_berakhir');
	}

	

}

