<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPemesanan extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_data(){
    $this->db->select('pemesanan.*, customer.nama');
    $this->db->join('customer', 'customer.id_customer = pemesanan.id_customer');
    $this->db->order_by("id_pemesanan","DESC");
    return $this->db->get('pemesanan')->result();
  }

  public function get_data_edit($id)
  {
    $this->db->select('pemesanan.*, customer.nama');
    $this->db->join('customer', 'customer.id_customer = pemesanan.id_customer');
    return $this->db->get_where('pemesanan', array('id_pemesanan' => $id));
  }

  function detail_pemesanan($id_pemesanan)
  {
    $this->db->select('detail_pemesanan.harga, detail_pemesanan.jumlah, detail_pemesanan.subtotal, produk.nama_produk, produk.kategori');
    $this->db->where('pemesanan_id', $id_pemesanan);
    $this->db->join('produk','produk.id_produk = detail_pemesanan.produk_id');
    return $this->db->get('detail_pemesanan');
  }

  public function filter_pemesanan($start, $end){
    $this->db->select('pemesanan.*, customer.nama');
    $this->db->join('customer', 'customer.id_customer = pemesanan.id_customer');
    $this->db->where('LEFT(pemesanan.waktu_kirim,10) BETWEEN "'. date('Y-m-d', strtotime($start)). '" and "'. date('Y-m-d', strtotime($end)).'"');
    $this->db->order_by("id_pemesanan","DESC");
    return $this->db->get('pemesanan');
  }


}
