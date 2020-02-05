<?php
/**
 * 
 */
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
}
function index(){
        $this->load->view('v_login');
}
function aksi_login(){
        $nim = $this->input->post('nim');
        $pass = $this->input->post('pass');
        $where = array(
            'nim' => $nim,
           
            'pass' => md5($pass)

            );
        $cek = $this->m_login->cek_login("mahasiswa",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nim' => $nim,
                'nama' => $nama,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect(base_url("dashboard"));
 
        }else{
            echo "Nim atau password salah !";
        }
    }

        }

    
    
    
