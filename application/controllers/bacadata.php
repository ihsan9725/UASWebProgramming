<?php

class Bacadata extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tampildata');
		$this->load->helper('url');
	}
	function index(){
		$data['data'] = $this->m_tampildata->getAll();
		$this->load->view('v_dashboard',$data);
	}
