<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terms_condition extends MY_Frontend
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Terms_condition_model', 'condition');
	}

	public function index()
	{
		$this->setCss(['index']);
		$this->template->build('v_index');
	}

	public function show()
	{
		isAjaxRequestWithPost();

		$response = $this->condition->showData();
		echo json_encode($response);
		exit();
	}
}
