<?php
class Produk extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->model('m_kategori');
		$this->load->model('m_tulisan');

		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_tulisan->get_all_tulisan();
		$x['kat']=$this->m_tulisan->getData('kategori');
		$this->load->view('admin/v_tulisan',$x);
	}
	function add_tulisan(){
		$x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_add_tulisan',$x);
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_tulisan->get_tulisan_by_kode($kode);
		$x['kat']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_edit_tulisan',$x);
	}
	function simpan_tulisan(){
				$config['upload_path'] = './desain/frontend/images/'; //path folder
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
	                        $config['source_image']='./desain/frontend/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 369;
	                        $config['height']= 300;
	                        $config['new_image']= './desain/frontend/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
				$nama=strip_tags($this->input->post('xnama'));
				$harga=$this->input->post('xharga');
				$isi=$this->input->post('xisi');
				$id_kategori=strip_tags($this->input->post('xkategori'));
				$data=$this->m_kategori->get_kategori_byid($id_kategori);
				$q=$data->row_array();
				$nama_kategori=$q['nama_kategori'];

				$this->m_tulisan->simpan_tulisan($nama,$harga,$isi,$id_kategori,$nama_kategori,$gambar);
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/produk');
		}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/produk');
	                }

	            }else{
					redirect('admin/produk');
				}

	}

	function update_tulisan(){

	            $config['upload_path'] = './desain/frontend/images/'; //path folder
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
	                        $config['source_image']='./desain/frontend/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 369;
	                        $config['height']= 300;
	                        $config['new_image']= './desain/frontend/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $tulisan_id=$this->input->post('kode');
	                        $nama=strip_tags($this->input->post('xnama'));
	                        $harga=$this->input->post('xharga');
				$isi=$this->input->post('xisi');
				$id_kategori=strip_tags($this->input->post('xkategori'));
				$data=$this->m_kategori->get_kategori_byid($id_kategori);
				$q=$data->row_array();
				$nama_kategori=$q['nama_kategori'];

				$this->m_tulisan->update_tulisan($tulisan_id,$nama,$harga,$isi,$id_kategori,$nama_kategori,$gambar);
				echo $this->session->set_flashdata('msg','info');
				redirect('admin/produk');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/produk');
	                }

	            }else{
			$tulisan_id=$this->input->post('kode');
			$nama=strip_tags($this->input->post('xnama'));
			$harga=$this->input->post('xharga');
			$isi=$this->input->post('xisi');
			$id_kategori=strip_tags($this->input->post('xkategori'));
			$data=$this->m_kategori->get_kategori_byid($id_kategori);
			$q=$data->row_array();
			$nama_kategori=$q['nama_kategori'];

			$this->m_tulisan->update_tulisan_tanpa_img($tulisan_id,$nama,$harga,$isi,$id_kategori,$nama_kategori);
			echo $this->session->set_flashdata('msg','info');
			redirect('admin/produk');
	            }

	}

	function hapus_tulisan(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./desain/frontend/images/'.$gambar;
		unlink($path);
		$this->m_tulisan->hapus_tulisan($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/tulisan');
	}

}
