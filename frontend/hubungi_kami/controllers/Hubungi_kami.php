<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hubungi_kami extends MY_Frontend
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Hubungi_kami_model', 'hubungi');
	}

	public function index()
	{
		$this->setJs(['hubungi_kami']);
		$this->setCss(['index']);
		$this->template->build('v_index');
	}

	public function process()
	{
		isAjaxRequestWithPost();
		$response = $this->hubungi->save();

		echo json_encode($response);
		exit();
	}
}
