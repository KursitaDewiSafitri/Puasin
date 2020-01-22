<?php
class M_galeri extends CI_Model{

	function get_all_galeri(){
		$hsl=$this->db->query("SELECT galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal FROM galeri ORDER BY galeri_id DESC");
		return $hsl;
	}
	function simpan_galeri($judul,$gambar){
		$this->db->trans_start();
            $this->db->query("insert into galeri(galeri_judul,galeri_gambar) values ('$judul','$gambar')");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}

	function update_galeri($galeri_id,$judul,$gambar){
		$hsl=$this->db->query("update galeri set galeri_judul='$judul',galeri_gambar='$gambar' where galeri_id='$galeri_id'");
		return $hsl;
	}
	function update_galeri_tanpa_img($galeri_id,$judul){
		$hsl=$this->db->query("update galeri set galeri_judul='$judul',where galeri_id='$galeri_id'");
		return $hsl;
	}
	function hapus_galeri($kode){
		$this->db->trans_start();
            $this->db->query("delete from galeri where galeri_id='$kode'");

        $this->db->trans_complete();
        if($this->db->trans_status()==true)
        return true;
        else
        return false;
	}

	//Front-End
	function get_galeri_home(){
		$hsl=$this->db->query("SELECT galeri.*,DATE_FORMAT(galeri_tanggal,'%d/%m/%Y') AS tanggal FROM galeri ORDER BY galeri_id DESC limit 4");
		return $hsl;
	}



}
