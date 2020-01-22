<?php
class M_artikel extends CI_Model{

	function get_all_artikel(){
		$hsl=$this->db->query("SELECT artikel.*,DATE_FORMAT(artikel_tanggal,'%d %M %Y') AS tanggal FROM artikel ORDER BY artikel_id DESC");
		return $hsl;
	}

	function simpan_artikel($judul,$isi,$gambar){
		$hsl=$this->db->query("INSERT INTO artikel (artikel_judul,artikel_deskripsi,artikel_image) VALUES ('$judul','$isi','$gambar')");
		return $hsl;
	}

	function get_artikel_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM artikel WHERE artikel_id='$kode'");
		return $hsl;
	}

	function update_artikel($artikel_id,$judul,$isi,$gambar){
		$hsl=$this->db->query("UPDATE artikel SET artikel_judul='$judul',artikel_deskripsi='$isi',artikel_image='$gambar' WHERE artikel_id='$artikel_id'");
		return $hsl;
	}

	function update_artikel_tanpa_img($artikel_id,$judul,$isi){
		$hsl=$this->db->query("UPDATE artikel SET artikel_judul='$judul',artikel_deskripsi='$isi' WHERE artikel_id='$artikel_id'");
		return $hsl;
	}

	function hapus_artikel($kode){
		$hsl=$this->db->query("DELETE FROM artikel WHERE artikel_id='$kode'");
		return $hsl;
	}


	//Frontend
	function get_artikel(){
		$hsl=$this->db->query("SELECT artikel.*,DATE_FORMAT(artikel_tanggal,'%d %M %Y') AS tanggal FROM artikel ORDER BY artikel_id DESC");
		return $hsl;
	}

}
