<?php 
 
class Daftar_dosen extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_data');
        $this->load->helper('url');
 
    }
 
    function index(){
        $data['nilai'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_daftar_dosen',$data);
    }
 
    function tambah(){
        $this->load->view('v_tambah_nilai');
    }
 
    function tambah_aksi(){
        $nama = $this->input->post('nama');
        $nip = $this->input->post('nip');
        $pass = $this->input->post('pass');
 
        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'pass' => md5($pass)
            );
        $this->m_data->input_data($data,'dosen');
        redirect('validasi_daftar');
    }
}