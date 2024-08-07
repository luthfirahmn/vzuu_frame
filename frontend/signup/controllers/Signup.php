<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends MY_Frontend
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Signup_model', 'signupmodel');
    }

    public function index()
    {
        $this->setCss(['index']);
        $this->setJs(['signup']);
        $this->template->build('v_index');
    }

    public function process()
    {
        isAjaxRequestWithPost();
        $response = $this->signupmodel->save();

        echo json_encode($response);
        exit();
    }
}
