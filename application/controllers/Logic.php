<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logic extends CI_Controller
{

  public function index()
  {
    $this->load->view('logic/index');
  }

  function findTarget(array $arr, int $target)
  {
    foreach($arr as $i => $val)
    {
      unset($arr[$i]);

      $findKey = array_search(($target - $val), $arr);
      if($findKey) return [$i, $findKey];
    }

    return [];

  }

  public function example1()
  {
    $example = [ 2, 7, 11, 15 ];
    $target  = 13;

    $data['data'] = $this->findTarget($example, $target);

    $this->load->view('logic/example1/index', $data);
  }

  public function example2()
  {
    $example = [ 3, 2, 4 ];
    $target  = 6;

    $data['data'] = $this->findTarget($example, $target);

    $this->load->view('logic/example2/index', $data);
  }

  public function example3()
  {
    $example = [ 3, 3 ];
    $target  = 6;

    $data['data'] = $this->findTarget($example, $target);

    $this->load->view('logic/example2/index', $data);
  }

}