<?php
class Jenis_model extends CI_Model
{
  private $table = 'tbl_jenis';

  public function  get_jenis_byCode($code)
  {
    return $this->db->get_where($this->table, ['code_jenis' => $code])->row_array();
  }
}
