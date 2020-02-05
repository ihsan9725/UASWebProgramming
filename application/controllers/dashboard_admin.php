<?php

class Dashboard_admin extends CI_Controller{
	function __construct(){
        parent::__construct();
        
}
 public function index(){
 		
        $this->load->view('v_dashboard_admin');
    }
}
?>