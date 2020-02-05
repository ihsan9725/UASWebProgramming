<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_materi');
        $this->load->library('session');
        
    }


    
    function index(){
    	$data["list_materi"] = $this->m_materi->getAll();
    	$this->load->view("v_tampil", $data);
        // $this->load->view('v_tampil');
        // if($this->session->userdata('status') == "login"){
        //     redirect(base_url("crud")); //cek session jika belum login maka...    
    }
    
   }
   ?>
