<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perawatan extends MY_Frontend
{
	public function index()
	{
		$this->setJs(['perawatan']);
		$this->setCss(['index']);
		$this->template->build('v_index');
	}

	public function detail()
	{
		$this->setCss(['index']);
		$this->template->build('v_detail');
	}
}
