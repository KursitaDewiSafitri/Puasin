<?php
class M_saran extends CI_Model{

	function kirim_saran($nama,$email,$pesan){
		$hsl=$this->db->query("INSERT INTO saran(saran_nama,saran_email,saran_pesan) VALUES ('$nama','$email','$pesan')");
		return $hsl;
	}

	function get_all_saran(){
		$hsl=$this->db->query("SELECT saran.*,DATE_FORMAT(saran_tanggal,'%d %M %Y') AS tanggal FROM saran ORDER BY saran_id DESC");
		return $hsl;
	}

	function hapus_saran($kode){
		$hsl=$this->db->query("DELETE FROM saran WHERE saran_id='$kode'");
		return $hsl;
	}

	function update_status_saran(){
		$hsl=$this->db->query("UPDATE saran SET saran_status='0'");
		return $hsl;
	}
}
