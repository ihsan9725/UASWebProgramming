<?php
	class Kelas1 extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('m_kelas1');
			$this->load->helper('url');

		}
	
	function index(){

		$data['pelajaran'] = $this->m_kelas1->tampil_pelajaran()->result();
		$this->load->view('v_kelas1',$data);
		
	}


}

?>