<?php
class Jenis_ctrl extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Jenis_model');
  }

  public function getJenisByCode()
  {
    $code = $this->input->get('jenisCode');
    echo json_encode($this->Jenis_model->get_jenis_byCode($code));
  }
}
