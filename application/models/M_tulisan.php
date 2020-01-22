<?php
class M_tulisan extends CI_Model{

	function get_all_tulisan(){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC");
		return $hsl;
	}
	function simpan_tulisan($nama,$harga,$isi,$id_kategori,$nama_kategori,$gambar){
		$hsl=$this->db->query("insert into tbl_tulisan(tulisan_nama,tulisan_harga,tulisan_isi,tulisan_id_kategori,tulisan_nama_kategori,tulisan_gambar) values ('$nama','$harga','$isi','$id_kategori','$nama_kategori','$gambar')");
		return $hsl;
	}
	function get_tulisan_by_kode($kode){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}
	function update_tulisan($tulisan_id,$nama,$harga,$isi,$id_kategori,$nama_kategori,$gambar){
		$hsl=$this->db->query("update tbl_tulisan set tulisan_nama='$nama',tulisan_harga='$harga',tulisan_isi='$isi',tulisan_id_kategori='$id_kategori',tulisan_nama_kategori='$nama_kategori',tulisan_gambar='$gambar' where tulisan_id='$tulisan_id'");
		return $hsl;
	}
	function update_tulisan_tanpa_img($tulisan_id,$nama,$harga,$isi,$id_kategori,$nama_kategori){
		$hsl=$this->db->query("update tbl_tulisan set tulisan_nama='$nama',tulisan_harga='$harga',tulisan_isi='$isi',tulisan_id_kategori='$id_kategori',tulisan_nama_kategori='$nama_kategori' where tulisan_id='$tulisan_id'");
		return $hsl;
	}
	function hapus_tulisan($kode){
		$hsl=$this->db->query("delete from tbl_tulisan where tulisan_id='$kode'");
		return $hsl;
	}
	function getData($tabel){
		$this->db->select();
		$this->db->from($tabel);

		return $this->db->get()->result();
	}

	//Front-End

	function get_post_home(){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d %M %Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC limit 3");
		return $hsl;
	}
	function get_tulisan_by_kategori($id_kategori){
		$hsl=$this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id_kategori='$id_kategori'");
		return $hsl;
	}
}    
