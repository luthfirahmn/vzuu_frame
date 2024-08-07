<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Users
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model', 'dashboard');
	}

	public function index()
	{

		$this->setCss(['index', 'cart']);
		$this->setJs(['dashboard', 'cart']);

		$datas = [
			'detail' => json_encode($this->dashboard->getDetailData()->row())
		];

		$this->template->build('v_index', $datas);
	}

	public function update_information()
	{
		isAjaxRequestWithPost();
		$response = $this->dashboard->update_information();

		echo json_encode($response);
		exit();
	}
}
