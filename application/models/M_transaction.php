<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaction extends CI_Model {

  protected $transaction = 'transactions';

  public function listTransaction()
  {
    return $this->db->get($this->transaction);
  }

  public function listTransactionById($id)
  {
    return $this->db->get_where($this->transaction, ['id' => $id]);
  }

  public function saveTransaction($data)
  {
    return $this->db->insert($this->transaction, $data);
  }

  public function updateTransaction($id, $data)
  {
    return $this->db->update($this->transaction, $data, ['id' => $id]);
  }

  public function deleteTransaction($id)
  {
    return $this->db->delete($this->transaction, ['id' => $id]);
  }

  public function getSaldo()
  {
    return $this->db->select('SUM(jumlah) saldo')->from($this->transaction)->get();
  }
}