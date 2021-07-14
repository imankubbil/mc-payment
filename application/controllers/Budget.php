<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Budget extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_income', 'income');
    $this->load->model('m_transaction', 'transaction');
  }

  public function index()
  {
    $this->load->view('budget/index');
  }

  public function income()
  {
    $data['income'] = $this->income->listIncome()->result();
    $this->load->view('budget/income/index', $data);
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

  public function byIncome()
  {
    $id = $this->uri->segment(3);
    
    $data['income'] = $this->income->listIncomeById($id)->row();
    $this->load->view('budget/income/edit', $data);
  }

  public function updateIncome()
  {
    $id = $this->input->post('id');

    $update = [
      'jumlah'      => $this->input->post('jumlah'),
      'tanggal'     => $this->input->post('tanggal'),
      'keterangan'  => $this->input->post('keterangan'),
    ];

    $resultDb = $this->income->updateIncome($id, $update);
    if( $resultDb !== false ) {
      $message['message'] = 'Anda Berhasil Ubah Data Pemasukan';
    } else {
      $message['message'] = 'Anda Gagal Ubah Data Pemasukan';
    }
    $this->load->view('message', $message);
  }

  public function deleteIncome()
  {
    $id = $this->input->post('id');

    $resultDb = $this->income->deleteIncome($id);
    if( $resultDb !== false ) {
      $message['message'] = 'Anda Berhasil Delete Data Pemasukan';
    } else {
      $message['message'] = 'Anda Gagal Delete Data Pemasukan';
    }
    $this->load->view('message', $message);
  }

  public function transactions()
  {
    $data['saldo_income']      = $this->income->getSaldo()->row();
    $data['saldo_transaction'] = $this->transaction->getSaldo()->row();
    $data['transaction']  = $this->transaction->listTransaction()->result();
    $this->load->view('budget/transaction/index', $data);
  }

  public function saveTransaction()
  {
    $data = [
      'jumlah'     => $this->input->post('jumlah'),
      'tanggal'    => $this->input->post('tanggal'),
      'keterangan' => $this->input->post('keterangan')
    ];
    
    $resultDb = $this->transaction->saveTransaction($data);
    if( $resultDb !== false ) {
      $message['message'] = 'Anda Berhasil Simpan Data Pengeluaran';
    } else {
      $message['message'] = 'Anda Gagal Simpan Data Pengeluaran';
    }
    $this->load->view('message', $message);
  }

  public function byTransaction()
  {
    $id = $this->uri->segment(3);
    
    $data['transaction'] = $this->transaction->listTransactionById($id)->row();
    $this->load->view('budget/transaction/edit', $data);
  }

  public function updateTransaction()
  {
    $id = $this->input->post('id');

    $update = [
      'jumlah'      => $this->input->post('jumlah'),
      'tanggal'     => $this->input->post('tanggal'),
      'keterangan'  => $this->input->post('keterangan'),
    ];

    $resultDb = $this->transaction->updateTransaction($id, $update);
    if( $resultDb !== false ) {
      $message['message'] = 'Anda Berhasil Ubah Data Pengeluaran';
    } else {
      $message['message'] = 'Anda Gagal Ubah Data Pengeluaran';
    }
    $this->load->view('message', $message);
  }

  public function deleteTransaction()
  {
    $id = $this->input->post('id');

    $resultDb = $this->transaction->deleteTransaction($id);
    if( $resultDb !== false ) {
      $message['message'] = 'Anda Berhasil Delete Data Pengeluaran';
    } else {
      $message['message'] = 'Anda Gagal Delete Data Pengeluaran';
    }
    $this->load->view('message', $message);
  }

}


/* End of file Budget.php */
/* Location: ./application/controllers/Budget.php */