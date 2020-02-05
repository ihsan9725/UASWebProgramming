<?php
	class Data_mahasiswa extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_data_mahasiswa');
			$this->load->helper('url');

		}
	
	function index(){

		$data['mahasiswa'] = $this->m_data_mahasiswa->tampil_nilai()->result();
		$this->load->view('v_data_mahasiswa',$data);
		
	}


}

?>