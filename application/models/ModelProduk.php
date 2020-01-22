<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelProduk extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function listing()
  {
    return $this->db->get('produk');
  }

  public function edit($id)
  {
    $this->db->where('id_produk', $id);
    return $this->db->get('produk');
  }

  public function listKategori()
  {
    return $this->db->get('kategori');
  }

  function showKategori()
  {
    $this->db->group_by('kategori');
    return $this->db->get('produk');
  }

  public function getData($rowno,$rowperpage, $like = null, $nama=null ) {

    $this->db->select('*');
    if ($like!=null) {
      $this->db->like('kategori', $like);
    }
    if ($nama!=null) {
      $this->db->like('nama_produk', $nama);
    }
    $this->db->from('produk');
    $this->db->limit($rowperpage, $rowno);
    $this->db->order_by('nama_produk', 'ASC');
    $query = $this->db->get();

    return $query->result_array();
  }

  // Select total records
  public function getrecordCount($like = null, $nama=null) {

    $this->db->select('count(*) as allcount');
    if ($like!=null) {
      $this->db->like('kategori', $like);
    }
    if ($nama!=null) {
      $this->db->like('nama_produk', $nama);
    }
    $this->db->from('produk');
    $query = $this->db->get();
    $result = $query->result_array();

    return $result[0]['allcount'];
  }


}
