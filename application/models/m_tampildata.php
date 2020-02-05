<?php 
 
class M_Tampildata extends CI_Model{
	
	function tampil_data(){
		return $this->db->get('nilai');
	}
}
public function getAll(){
	return $this->db->get($this->$_table)->result();

}