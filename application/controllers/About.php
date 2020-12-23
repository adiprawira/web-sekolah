<?php

class about extends CI_Controller
{

  public function index()
  {
    $data = array(
      'title' => 'About',
      'isi' => 'v_about'
    );

    $this->load->view('layout/v_wrapper', $data, false);
  }
}
