<?php

class program extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'Program Keahlian',
      'isi' => 'v_programkeahlian'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
