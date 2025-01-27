<?php
class Pembelian_model extends CI_Model
{
  private $table = "tbl_pembelian";

  public function insertPembelian($data)
  {
    return $this->db->insert($this->table, $data);
  }
}
