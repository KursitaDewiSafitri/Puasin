<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'body' => "home/body" ,
     );
    $this->load->view('index', $data);
  }

  function format()
  {
    $data = array(
      'body' => "home/form",
    );
    $this->load->view('index', $data);
  }

  function penduduk()
  {
    $data = array(
      'body' => "home/penduduk" ,
     );
     $this->load->view('index', $data);
  }

  function suket_kelahiran()
  {
    $data = array(
      'body' => "home/suket_kelahiran" ,
    );
    $this->load->view('index',$data);
  }

  function penduduk_list(){
    $data = array(
      'body' => "home/penduduk_list" ,

    );
    $this->load->view('index', $data);

  }




}
