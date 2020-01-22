<?php
class Katalog extends CI_Controller{
	function __construct(){
		parent::__construct();
                $this->load->model('m_tulisan');
                $this->load->model('m_kategori');

	}

	function index(){
		$x['kat']=$this->m_kategori->get_all_kategori();
		$x['data']=$this->m_tulisan->get_all_tulisan();
		$this->load->view('v_katalog',$x);
	}
}
