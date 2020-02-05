<?php 
 
class Crud extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_data');
        $this->load->helper('url');
 
    }
 
    function index(){
        $data['nilai'] = $this->m_data->tampil_data()->result();
        $this->load->view('v_nilai_admin',$data);
    }
 
    function tambah(){
        $this->load->view('v_tambah_nilai');
    }
 
    function tambah_aksi(){
        $namapel = $this->input->post('namapel');
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');
 
        $data = array(
            'namapel' => $namapel,
            'uts' => $uts,
            'uas' => $uas
            );
        $this->m_data->input_data($data,'nilai');
        redirect('nilai_admin');
    }
 
    function hapus_data($id){
        $where = array('id' => $id);
        $this->m_data->hapus_data($where,'nilai');
       redirect('nilai_admin');
    }

    function edit($id){
        $where = array('id' => $id);
        $data['nilai'] = $this->m_data->edit_data($where,'nilai')->result();
        $this->load->view('v_edit_nilai',$data);
    }
    function update(){
        $id = $this->input->post('id');
        $namapel = $this->input->post('namapel');
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');

        $data = array(
            'namapel' => $namapel,
            'uts' => $uts,
            'uas' => $uas);

        $where = array('id' => $id);

        $this->m_data->edit_data($where,$data,'nilai');
        redirect('v_nilai_admin');

    }
      function edit_mahasiswa($id){
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->m_data_mahasiswa->edit_data($where,'mahasiswa')->result();
        $this->load->view('v_edit_mahasiswa',$data);
}   
 function update_mahasiswa(){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $pass = $this->input->post('pass');
        
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'pass' => $pass);

        $where = array('nim' => $nim);

        $this->m_data_mahasiswa->edit_data($where,$data,'mahasiswa');
        redirect('v_data_mahasiswa');
}
  function hapus_data_mahasiswa($nim){
        $where = array('nim' => $nim);
        $this->m_data->hapus_data($where,'mahasiswa');
       redirect('data_mahasiswa');
   }
    function tambah_aksi_mahasiswa(){
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $pass = $this->input->post('pass');
 
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'pass' => md5($pass)
            );
        $this->m_data->input_data($data,'mahasiswa');
        redirect('data_mahasiswa');
}
     function tambah_matkul(){
        $this->load->view('v_tambah_matkul');
}

    function tambah_aksi_matkul(){
        $senin = $this->input->post('senin');
        $selasa = $this->input->post('selasa');
        $rabu = $this->input->post('rabu');
        $kamis = $this->input->post('kamis');
        $jumat = $this->input->post('jumat');

 
        $data = array(
            'senin' => $senin,
            'selasa' => $selasa,
            'rabu' => $rabu,
            'kamis' => $kamis,
            'jumat' => $jumat
            );
        $this->m_data->input_data($data,'pelajaran');
        redirect('kelas1_admin');
    }
     function hapus_data_matkul($id){
        $where = array('id' => $id);
        $this->m_data->hapus_data($where,'pelajaran');
       redirect('kelas1_admin');
   }
}