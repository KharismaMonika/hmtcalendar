<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	function login_cek()
	{
		
			//BACA INPUTAN
			$nrp = $this->input->post('NRP');
			$password = $this->input->post('PASSWORD');
			$cek=array('NRP'=>$nrp, 'PASSWORD'=>$password);
			$hitung = $this->Model_anggota->login($cek)->num_rows();
			if($hitung >0){
				$data = $this->Model_anggota->login($cek)->result();
				foreach ($data as $row) {
					$role= $row->role;
				}
				if ($role== 1) {
					$this->session->set_userdata(array('ID' => $nrp, 'id_role'=>$role));
					redirect(base_url("admin"));
				}
				elseif ($role==2) {
					$this->session->set_userdata(array('ID' => $nrp, 'id_role'=>$role));
					redirect(base_url("user"));
				}
			}
			else{
				echo "<script> 
				alert('Password atau username salah');
				window.location.href='index';
				</script>";
			}		
	}
}
