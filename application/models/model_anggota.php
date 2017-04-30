<?php

/**
* 
*/
class Model_anggota extends CI_Model
{
	
	function login($cek)
	{
		$cek_ada = $this->db->get_where('anggota', $cek);
		return $cek_ada;
	}

}