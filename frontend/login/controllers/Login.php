<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Frontend
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'loginmodel');
    }

    public function index()
    {
        $this->setCss(['index']);
        $this->setJs(['login']);
        $this->template->build('v_index');
    }

    public function auth()
    {
        isAjaxRequestWithPost();
        $response = $this->loginmodel->_check();

        echo json_encode($response);
        exit();
    }
}
