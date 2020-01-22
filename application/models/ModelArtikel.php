<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelArtikel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_data(){
    $this->db->order_by("id_artikel","DESC");
    return $this->db->get('artikel')->result();
  }

  public function get_data_edit($id)
  {
    return $this->db->get_where('artikel', array('id_artikel' => $id));
  }


}
