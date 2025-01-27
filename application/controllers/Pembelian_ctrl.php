<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian_ctrl extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model("Pembelian_model");
  }

  public function index()
  {
    $this->load->view('pembelian/pembelian_view');
  }

  public function insert()
  {
    $data = [
      'no_pembelian' => $this->input->post('noPembelian'),
      'tgl_pembelian' => $this->input->post('tglPembelian'),
      'nama_pelanggan' => $this->input->post('namaPelanggan'),
      'code_merk' => $this->input->post('codeMerk'),
      'code_jenis' => $this->input->post('codeJenis'),
      'jml_beli' => $this->input->post('jmlPembelian')
    ];

    $this->Pembelian_model->insertPembelian($data);
    echo json_encode(['status' => 'success']);
  }
}
