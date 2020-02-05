<?php
/**
 * 
 */
class Login_dosen extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login_dosen');
}
function index(){
        $this->load->view('v_login_dosen');
}
function aksi_login(){
        $nip = $this->input->post('nip');
        $pass = $this->input->post('pass');
        $where = array(
            'nip' => $nip,
            'pass' => md5($pass)
            );
        $cek = $this->m_login_dosen->cek_login("dosen",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nip' => $nip,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("dashboard_admin"));
 
        }else{
            echo "NIP atau password salah !";
        }
    }

        }

    
    
    
