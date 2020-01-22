<?php
class Saran extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_saran');
	}

	function index(){
		$this->m_saran->update_status_saran();
		$x['data']=$this->m_saran->get_all_saran();
		$this->load->view('admin/v_inbox',$x);
	}

	function hapus_saran(){
		$kode=$this->input->post('kode');
		$this->m_saran->hapus_saran($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/saran');
	}
}
