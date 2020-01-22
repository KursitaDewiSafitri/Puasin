<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('ModelProduk');

  }

  function index()
  {
    $data = array(
      'title'         => "Produk",
      'body'          => 'produk/list',
      'produk'        => $this->ModelProduk->listing()->result(),
     );
    $this->load->view('index', $data);
  }

  function input()
  {
    $array = array(
      'title'       => "Produk",
      'body'        => "produk/input",
      'kategori'    => $this->ModelProduk->listKategori()->result(),
    );
    $this->load->view('index', $array);
  }

  public function insert()
  {
    // echo $this->input->post('nama');
    $patch = "desain/produk/";
    // echo $patch;
    $config['upload_path']          = "./".$patch;
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 11240;

    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar')) {
      $data = array(
        'nama_produk'     => $this->input->post('nama'),
        'harga'           => $this->input->post('harga'),
        'keterangan'      => $this->input->post('keterangan'),
        'kategori'        => $this->input->post('kategori'),
          'KodeProduk'        => $this->input->post('KodeProduk'),
        'gambar'          => $patch.$this->upload->data()['file_name']
      );
    }
    if ($this->db->insert('produk', $data)) {
      echo "data berhasil";
      redirect(base_url().'produk');
    } else {
      echo "gagal";
      redirect(base_url().'produk');

    }
  }


   function edit($id)
  {
    $array = array(
      'title'       => "produk",
      'body'        => "produk/update",
      'produk'      => $this->ModelProduk->edit($id)->row_array()
    );
    $this->load->view('index', $array);
  }

 function update()
  {
    $id = $this->input->post('id_produk');
    $patch = "desain/produk/";
    // echo $patch;
    $config['upload_path']          = "./".$patch;
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['max_size']             = 11240;

    $data = array(
      'nama_produk'     => $this->input->post('nama'),
      'harga'           => $this->input->post('harga'),
      'keterangan'      => $this->input->post('keterangan'),
      'kategori'        => $this->input->post('kategori'),
      'KodeProduk'        => $this->input->post('KodeProduk'),
    );

    if ($_FILES["gambar"]["name"] == null) {
      $this->db->where('id_produk', $id);
      if ($this->db->update('produk', $data)) {
          $this->session->set_flashdata('notifJS', $this->core->NotifSuccess("Selamat Berhasil Merubah Data produk".$this->input->post('nama')));
      }else{
          $this->session->set_flashdata('notifJS', $this->core->NotifError("Gagal Merubah Data"));
      }
    }else {
      $produk = $this->ModelProduk->edit($id)->row_array();
      unlink('./'.$produk['gambar']);
      $this->load->library('upload', $config);
      if ($this->upload->do_upload('gambar')) {
        $data['gambar'] = $patch.$this->upload->data()['file_name'];
        $this->db->where('id_produk', $id);
        if ($this->db->update('produk', $data)) {
            // $this->session->set_flashdata('notifJS', $this->core->NotifSuccess("Selamat Berhasil Merubah Data produk".$this->input->post('nama')));
            $this->Core->alert_succcess("Selamat Berhasil Merubah Data produk");

        }else{
            $this->session->set_flashdata('notifJS', $this->core->NotifError("Gagal Merubah Data"));
        }

      }else {
        $this->session->set_flashdata('notifJS', $this->core->NotifError($this->upload->display_errors()));
      }
    }
    redirect('produk');
  }


   function delete($id)
  {
    $produk = $this->ModelProduk->edit($id)->row_array();

    $this->db->where('id_produk', $id);
    if ($this->db->delete('produk')) {
      unlink('./'.$produk['gambar']);

    echo "Berhasil";
      redirect('produk');
    }else {
      // $this->session->set_flashdata('notifJS', $this->core->NotifError("Gagal Menghapus Data produk, Karena Tercatat di Transaksi"));
      echo "gagal";
      redirect('produk');
    }
  }

}
