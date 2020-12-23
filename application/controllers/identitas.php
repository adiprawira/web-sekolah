<?php

class identitas extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'Identitas',
      'isi' => 'v_identitas'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
