<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Frontend
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model', 'home');
	}

	public function index()
	{
		$this->setCss(['index']);
		$this->setJs(['home']);
		$this->template->build('v_index');
	}

	public function show()
	{
		isAjaxRequestWithPost();

		$response = $this->home->menuList();
		echo json_encode($response);
		exit();
	}
}
