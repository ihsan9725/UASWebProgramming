<?php
	class Nilai extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_nilai');
			$this->load->helper('url');

		}
	
	function index(){

		$data['nilai'] = $this->m_nilai->tampil_nilai()->result();
		$this->load->view('v_nilai',$data);
		
	}


}

?>