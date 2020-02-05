<?php
/**
 * 
 */
class M_data_dosen extends CI_Model{
	public function tampil_nilai(){
		return $this->db->get('dosen');
	}
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
}

