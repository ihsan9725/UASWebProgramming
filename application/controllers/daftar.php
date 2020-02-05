<?php 
 
class Daftar extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_data');
        $this->load->helper('url');
 
    }
 
    function index(){
        $data['nilai'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_regist',$data);
    }
 
    function tambah(){
        $this->load->view('v_tambah_nilai');
    }
 
    function tambah_aksi(){
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $pass = $this->input->post('pass');
 
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'pass' => md5($pass)
            );
        $this->m_data->input_data($data,'mahasiswa');
        redirect('validasi_daftar');
    }
}