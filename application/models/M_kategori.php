<?php
class M_kategori extends CI_Model{

	function get_all_kategori(){
		$hsl=$this->db->query("select * from kategori");
		return $hsl;
	}
	function simpan_kategori($kategori){
		$hsl=$this->db->query("insert into kategori(nama_kategori) values('$kategori')");
		return $hsl;
	}
	function update_kategori($kode,$kategori){
		$hsl=$this->db->query("update kategori set nama_kategori='$kategori' where id_kategori='$kode'");
		return $hsl;
	}
	function hapus_kategori($kode){
		$hsl=$this->db->query("delete from kategori where id_kategori='$kode'");
		return $hsl;
	}

	function get_kategori_byid($id_kategori){
		$hsl=$this->db->query("select * from kategori where id_kategori='$id_kategori'");
		return $hsl;
	}

}
