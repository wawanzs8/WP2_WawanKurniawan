<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Model_Dlemas extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  // menyimpan data hasiswa
  public function simpan_data($data)
  {
    $this->db->insert('dlemas', $data);
    return $this->db->insert_id();
  }
}
?>