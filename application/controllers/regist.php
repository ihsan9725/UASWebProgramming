<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regist extends CI_Controller{
	 function __construct(){
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('session');

    }
          function index(){
        $this->load->view('v_regist');
       
        
        }
    }
    
    
function regist(){
        
        if($this->input->post('register'))
        {
            $n= $this->input->post('name');
            $e= $this->input->post('email');
            $p= md5 ($this->input->post ('password')); //encrypt password ke md5
            $l = 'siswa';
            
            
            $query = $this->db->query("SELECT * FROM user WHERE email='".$e."'");
            $row = $query->num_rows();
            if($row)
            {
                $this->session->set_flashdata('error', 'Email has been registered. Error!!');
        redirect(base_url("login/regist"));
            }elseif($this != $row){
                $query = $this->db->query("INSERT INTO user VALUES('','$n','$e','$p','$l')");
                
                $this->session->set_flashdata('success', 'Account Create Succcess');
        redirect(base_url("login/regist"));
            }else{
                $this->session->set_flashdata('error', 'Something wrong. Error!!');
        redirect(base_url("login/regist"));
            }
        }
        if($this->session->userdata('status') == "login"){
            redirect(base_url("crud")); //cek session jika belum login maka...
        }else{
        $this->load->view('v_regist');
        
    }
}

?>
   
        
    
    
