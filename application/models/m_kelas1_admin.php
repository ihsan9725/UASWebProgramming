<?php
/**
 * 
 */
class M_kelas1_admin extends CI_Model{
	public function tampil_pelajaran(){
		return $this->db->get('pelajaran');
	}
}