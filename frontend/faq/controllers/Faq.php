<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends MY_Frontend
{
	public function index()
	{
		$this->setCss(['index']);
		$this->template->build('v_index');
	}
}
