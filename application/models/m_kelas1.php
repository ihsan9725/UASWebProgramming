<?php
/**
 * 
 */
class M_kelas1 extends CI_Model{
	public function tampil_pelajaran(){
		return $this->db->get('pelajaran');
	}
}