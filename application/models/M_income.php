<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_income extends CI_Model {

  protected $income = 'income';

  public function listIncome()
  {
    return $this->db->get($this->income);
  }

  public function listIncomeById($id)
  {
    return $this->db->get_where($this->income, ['id' => $id]);
  }

  public function saveIncome($data)
  {
    return $this->db->insert($this->income, $data);
  }

  public function updateIncome($id, $data)
  {
    return $this->db->update($this->income, $data, ['id' => $id]);
  }

  public function deleteIncome($id)
  {
    return $this->db->delete($this->income, ['id' => $id]);
  }

}