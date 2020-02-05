<?php
	class Data_dosen extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_data_dosen');
			$this->load->helper('url');

		}
	
	function index(){

		$data['dosen'] = $this->m_data_dosen->tampil_nilai()->result();
		$this->load->view('v_data_dosen',$data);
		
	}


}

?>