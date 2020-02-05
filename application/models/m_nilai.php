<?php
/**
 * 
 */
class M_nilai extends CI_Model{
	public function tampil_nilai(){
		return $this->db->get('nilai');
	}
}

