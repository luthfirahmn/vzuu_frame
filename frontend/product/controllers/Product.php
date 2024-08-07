<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends MY_Frontend
{
	public function index()
	{
		$this->setJs(['product', 'cart']);
		$this->setCss(['index', 'cart']);
		$this->template->build('v_index');
	}

	public function detail()
	{
		$this->setJs(['product_detail', 'cart']);
		$this->setCss(['index', 'cart']);
		$this->template->build('v_detail');
	}
}
