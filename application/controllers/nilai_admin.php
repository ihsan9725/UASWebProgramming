<?php
	class Nilai_admin extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_nilai_admin');
			$this->load->helper('url');

		}
	
	function index(){

		$data['nilai'] = $this->m_nilai_admin->tampil_nilai()->result();
		$this->load->view('v_nilai_admin',$data);
		
	}


}

?>