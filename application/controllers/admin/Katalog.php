<?php
class Katalog extends CI_Controller{
    function __construct(){
        parent:: __construct();

        $this->load->model('m_kategori');
        $this->load->model('m_katalog');
        $this->load->library('upload');
    }

    function index(){
        $x['data']=$this->m_katalog->get_all_katalog();
        $this->load->view('admin/v_katalog',$x);
    }
    function add_katalog(){
        $x['kat']=$this->m_kategori->get_all_kategori();
        $this->load->view('admin/v_add_katalog',$x);
    }
    function get_edit(){
        $kode=$this->uri->segment(4);
        $x['data']=$this->m_katalog->get_katalog_by_kode($kode);
        $x['kat']=$this->m_kategori->get_all_kategori();
        $this->load->view('admin/v_edit_katalog',$x);
    }
    function simpan_katalog(){
        $config['upload_path'] = '.desain/frontend/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name']))
        {
            if ($this->upload->do_upload('filefoto'))
            {
                    $gbr = $this->upload->data();
                    //Compress Image
                    $config['image_library']='gd2';
                    $config['source_image']='.desain/frontend/images/'.$gbr['file_name'];
                    $config['create_thumb']= FALSE;
                    $config['maintain_ratio']= FALSE;
                    $config['quality']= '60%';
                    $config['width']= 369;
                    $config['height']= 300;
                    $config['new_image']= '.desain/frontend/images/'.$gbr['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $gambar=$gbr['file_name'];
                    $nama=strip_tags($this->input->post('xnama'));
                    $harga=$this->input->post('xharga');
                    $deskripsi=$this->input->post('xisi');
                    $kategori_id=strip_tags($this->input->post('xkategori'));
                    $data=$this->m_kategori->get_kategori_byid($kategori_id);
                    $q=$data->row_array();
                    $nama_kategori=$q['nama_kategori'];
                    $this->m_katalog->simpan_katalog($nama,$harga,$deskripsi,$id_kategori,$nama_kategori,$gambar);
                    echo $this->session->set_flashdata('msg','success');
                    redirect('admin/katalog');
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/katalog');
            }

        }else{
            redirect('admin/katalog');
        }
    }
    function update_katalog(){
        $config['upload_path'] = '.desain/frontend/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='.desain/frontend/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 369;
	                        $config['height']= 300;
	                        $config['new_image']= '.desain/frontend/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $id_produk=$this->input->post('kode');
                            $nama=strip_tags($this->input->post('xnama'));
                            $harga=$this->input->post('xharga');
							$deskripsi=$this->input->post('xisi');
							$id_kategori=strip_tags($this->input->post('xkategori'));
							$data=$this->m_kategori->get_kategori_byid($id_kategori);
							$q=$data->row_array();
							$nama_kategori=$q['nama_kategori'];
							$this->m_katalog->update_katalog($id_produk,$nama,$harga,$isi,$id_kategori,$nama_kategori,$gambar);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/katalog');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/katalog');
	                }

	            }else{
							$id_produk=$this->input->post('kode');
							$nama=strip_tags($this->input->post('xnama'));
							$harga=strip_tags($this->input->post('xharga'));
							$deskripsi=$this->input->post('xisi');
							$id_kategori=strip_tags($this->input->post('xkategori'));
							$data=$this->m_kategori->get_kategori_byid($id_kategori);
							$q=$data->row_array();
							$nama_kategori=$q['nama_kategori'];
							$this->m_katalog->update_katalog_tanpa_img($id_produk,$nama,$harga,$isi,$id_kategori,$nama_kategori);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/katalog');
	            }


    }
    function hapus_katalog(){
        $kode=$this->input->post('kode');
        $gambar=$this->input->post('gambar');
        $path='./desain/frontend/images/'.$gambar;
        unlink($path);
        $this->m_katalog->hapus_katalog($kode);
        echo $this->session->set_flashdata('msg','success-hapus');
        redirect('admin/katalog');
    }
}
