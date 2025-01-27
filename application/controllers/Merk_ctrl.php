<?php
class Merk_ctrl extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Merk_model');
  }

  public function getMerkByCode()
  {
    $code = $this->input->get('codeMerk');
    echo json_encode($this->Merk_model->get_merk_byCode($code));
  }
}
