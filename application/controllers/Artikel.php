<?php
class Artikel extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_artikel');
	}
	function index(){

		$x['data']=$this->m_artikel->get_artikel();
		$this->load->view('v_artikel',$x);
	}

}
