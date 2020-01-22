<?php
class Saran extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('m_saran');
	}

	function index(){
		$this->load->view('v_saran');
	}

	function kirim_saran(){
		$nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
		$email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$pesan=htmlspecialchars(trim($this->input->post('pesan',TRUE)),ENT_QUOTES);
		$this->m_saran->kirim_saran($nama,$email,$pesan);
		echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah menghubungi kami.</div>");
		redirect('saran');
	}
}
