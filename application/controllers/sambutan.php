<?php

class sambutan extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'Sambutan',
      'isi' => 'v_sambutan'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
