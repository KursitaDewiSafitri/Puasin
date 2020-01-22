<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Kategori extends CI_Controller{

    public $data_kategori = array();

    public function __construct()
    {
      parent::__construct();
      $this->data_kategori = array(
        'nama_kategori'     => $this->input->post('nama_kategori'),
      );
      $this->load->model("ModelKategori");
        }

    function index()
    {
      $data = array(
        'body' => 'kategori/list',
        'kategori'=> $this->ModelKategori->get_data(),
       );

       $this->load->view('index', $data);
    }

    function input()
    {
      $data = array(
        'form' => 'kategori/form',
        'body' => 'kategori/input',
       );
      $this->load->view('index', $data);
    }

    public function insert()
    {

      if ($this->db->insert('kategori_produk', $this->data_kategori)) {
        echo "data berhasil";
        redirect(base_url().'kategori');
      } else {
        echo "gagal";
        redirect(base_url().'kategori');
      }
    }

    public function edit()
    {
      $id = $this->uri->segment(3);
      $data = array(
        'form' => 'kategori/form',
        'body' => 'kategori/edit',
        'kategori' => $this->ModelKategori->get_data_edit($id),
       );
      $this->load->view('index', $data);

    }

    public function update()
    {
      $id_skel = $this->input->post('idkategori_produk_produk_produk');
      $this->db->where('idkategori_produk',$id_skel);
      if ($this->db->update('kategori', $this->data_kategori)) {
        echo "berhasil";
        redirect(base_url().'kategori');
      } else {
        echo "gagal";
        redirect(base_url().'kategori');

      }

    }

      function delete()
      {
        $id = $this->input->post("id");
        $this->db->where_in('idkategori_produk', $id);
        $delete = $this->db->delete('kategori_produk');
        if ($delete == true) {
            redirect(base_url().'kategori');
        }else {
            echo "gagal";
        };

      }

  }
?>
