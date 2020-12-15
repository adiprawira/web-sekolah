<?php

class Login extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_ruleS('username', 'Username', 'required');
        $this->form_validation->set_ruleS('password', 'Password', 'required');

        if ($this->form_validation->run() == True) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->user_login->login($username, $password);
        }

        $data = array(
            'title' => 'Login',
        );

        $this->load->view('v_login', $data, false);
    }

    public function logout()
    {
        $this->user_login->logout();
    }
}
