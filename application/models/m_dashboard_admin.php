<?php
/**
 * 
 */
class M_dashboard_admin extends CI_Model{
	public function tampil_nilai(){
		return $this->db->get('nilai');
	}
}