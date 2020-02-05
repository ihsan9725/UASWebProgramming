<?php
	class Kelas1_admin extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_kelas1_admin');
			$this->load->helper('url');

		}
	
	function index(){

		$data['pelajaran'] = $this->m_kelas1_admin->tampil_pelajaran()->result();
		$this->load->view('v_kelas1_admin',$data);
		
	}


}

?>