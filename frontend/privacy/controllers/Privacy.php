<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Privacy extends MY_Frontend
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('privacy_model', 'privacy');
	}

	public function index()
	{
		$this->setCss(['index']);
		$this->template->build('v_index');
	}

	public function show()
	{
		isAjaxRequestWithPost();

		$response = $this->privacy->showData();
		echo json_encode($response);
		exit();
	}
}
