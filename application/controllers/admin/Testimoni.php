<?php
class Testimoni extends CI_Controller{
	function __construct(){
		parent::__construct();


		$this->load->model('m_galeri');

		$this->load->library('upload');
	}


	function index(){

		$x['data']=$this->m_galeri->get_all_galeri();

		$this->load->view('admin/v_galeri',$x);
	}

	function simpan_galeri(){
				$config['upload_path'] = './desain/frontend/images/testi/'; //path folder
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
	                        $config['source_image']='./desain/frontend/images/testi/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 914;
	                        $config['height']= 682;
	                        $config['new_image']= './desain/frontend/images/testi/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $judul=strip_tags($this->input->post('xjudul'));

							$this->m_galeri->simpan_galeri($judul,$gambar);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/testimoni');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/testimoni');
	                }

	            }else{
					redirect('admin/testimoni');
				}

	}

	function update_galeri(){

	            $config['upload_path'] = './desain/frontend/images/testi/'; //path folder
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
	                        $config['source_image']='./desain/frontend/images/testi/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 500;
	                        $config['height']= 400;
	                        $config['new_image']= './desain/frontend/images/testi/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $galeri_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));

							$images=$this->input->post('gambar');
							$path='./desain/frontend/images/testi/'.$images;
							unlink($path);

							$this->m_galeri->update_galeri($galeri_id,$judul);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/testimoni');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/testimoni');
	                }

	            }else{
							$galeri_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));

							$this->m_galeri->update_galeri_tanpa_img($galeri_id,$judul);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/testimoni');
	            }

	}

	function hapus_galeri(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./desain/frontend/images/testi/'.$gambar;
		unlink($path);
		$this->m_galeri->hapus_galeri($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/testimoni');
	}

}
