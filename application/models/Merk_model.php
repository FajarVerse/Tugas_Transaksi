<?php
class Merk_model extends CI_Model
{
  private $table = 'tbl_merk';

  public function get_merk_byCode($code)
  {
    return $this->db->get_where($this->table, ['code_merk' => $code])->row_array();
  }
}
