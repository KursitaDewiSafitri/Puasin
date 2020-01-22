<?php
class Artikel extends CI_Controller{
	function __construct(){
		parent::__construct();


		$this->load->model('m_artikel');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_artikel->get_all_artikel();
		$this->load->view('admin/v_artikel',$x);
	}
	function add_artikel(){
		$this->load->view('admin/v_add_artikel');
	}
	function get_edit(){
		$kode=$this->uri->segment(4);
		$x['data']=$this->m_artikel->get_artikel_by_kode($kode);
		$this->load->view('admin/v_edit_artikel',$x);
	}
	function simpan_artikel(){
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
	                        $config['width']= 710;
	                        $config['height']= 455;
	                        $config['new_image']= './desain/frontend/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
							$judul=strip_tags($this->input->post('xjudul'));
							$isi=$this->input->post('xisi');

							$this->m_artikel->simpan_artikel($judul,$isi,$gambar);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/artikel');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/artikel');
	                }

	            }else{
					redirect('admin/artikel');
				}

	}

	function update_artikel(){

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
	                        $config['width']= 710;
	                        $config['height']= 455;
	                        $config['new_image']= './desain/frontend/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $artikel_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$isi=$this->input->post('xisi');

							$this->m_artikel->update_artikel($artikel_id,$judul,$isi,$gambar);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/artikel');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/artikel');
	                }

	            }else{
							$artikel_id=$this->input->post('kode');
	                        $judul=strip_tags($this->input->post('xjudul'));
							$isi=$this->input->post('xisi');

							$this->m_artikel->update_artikel_tanpa_img($artikel_id,$judul,$isi);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/artikel');
	            }

	}

	function hapus_artikel(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./desain/frontend/images/'.$gambar;
		unlink($path);
		$this->m_artikel->hapus_artikel($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/artikel');
	}

}
