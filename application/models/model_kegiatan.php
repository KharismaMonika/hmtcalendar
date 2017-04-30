<?php

class Model_kegiatan extends CI_Model{

	function event_today(){
		$curr_date = date("Y-m-d");
		//ambil data event dari tabel DEvent
		$listevent = $this->db->query("select nama_event, tanggal_mulai, jam_mulai, tanggal_selesai, jam_selesai, tempat from kegiatan where tanggal_mulai = '$curr_date'");
		return $listevent->result();
	}

}