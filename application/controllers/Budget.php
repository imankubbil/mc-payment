<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Budget extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('budget/index');
  }

  public function income()
  {
    $this->load->view('budget/income/index');
  }

  public function saveIncome()
  {
    $data = [
      'jumlah'     => $this->input->post('jumlah'),
      'tanggal'    => $this->input->post('tanggal'),
      'keterangan' => $this->input->post('keterangan')
    ];
    
    $resultDb = $this->income->saveIncome($data);
    if( $resultDb !== false ) {
      $message['message'] = 'Anda Berhasil Simpan Data Pemasukan';
    } else {
      $message['message'] = 'Anda Gagal Simpan Data Pemasukan';
    }
    $this->load->view('message', $message);
  }

}


/* End of file Budget.php */
/* Location: ./application/controllers/Budget.php */