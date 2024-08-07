<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends MY_Frontend
{
	public function index()
	{
		$this->setCss(['index']);
		$this->template->build('v_index');
	}

	public function detail()
	{
		$this->setCss(['index']);
		$this->template->build('v_detail');
	}
}
