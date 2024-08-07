<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Success extends MY_Frontend
{
	public function index()
	{
		if (!$this->input->get('notif')) {
			header("HTTP/1.1 401 Unauthorized");
			exit;
		}

		$getNotif = decrypt_value($this->input->get('notif'));
		$data = json_decode($getNotif, true);

		if ($data['success'] != 1 || $data['validate'] != 1 || empty($data['success']) || empty($data['validate'])) {
			header("HTTP/1.1 401 Unauthorized");
			exit;
		}

		$datas = [
			'title' => $data['messages']['title'],
			'message' => $data['messages']['message']
		];

		$this->setCss(['index']);
		$this->template->build('v_index', $datas);
	}
}
