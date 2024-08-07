<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends MY_Owner
{
	protected $titlePage;
	protected $header_table;

	public function __construct()
	{
		$this->_function_except = ['show', 'process', 'status', 'paging', 'detail_menu', 'process_menu'];
		parent::__construct();
		$this->titlePage = 'Data User';
		$this->header_table = ['no', 'fullname', 'email', 'status', "action"];
	}

	public function index()
	{
		$this->template->title($this->titlePage);
		$this->setTitlePage($this->titlePage);
		$this->assetsBuild(['datatables']);
		$this->setJs('users');

		$this->setTable($this->header_table, true);
		$this->template->build('v_show');
	}

	public function show()
	{
		isAjaxRequestWithPost();
		$this->function_access('view');
		echo $this->users_model->show();
	}

	public function insert()
	{
		isAjaxRequestWithPost();
		$checked['checked'] = 'enabled';

		$data = array(
			'title_modal' => 'Tambah User',
			'url_form' => base_url() . "users/process",
			'form' => $this->load->view('v_form', $checked, true),
		);
		$html = $this->load->view($this->_v_form_modal, $data, true);

		echo json_encode(array('html' => $html));
		exit();
	}

	public function process()
	{
		isAjaxRequestWithPost();
		if (!empty($this->input->post('id'))) {
			$this->function_access('update');
		} else {
			$this->function_access('insert');
		}

		$response = $this->users_model->save();
		echo json_encode($response);
		exit();
	}

	public function process_menu()
	{
		isAjaxRequestWithPost();
		$this->function_access('insert');

		$response = $this->users_model->save_menu();
		echo json_encode($response);
		exit();
	}

	public function update($id)
	{
		isAjaxRequestWithPost();
		try {
			if ($id == null) {
				throw new Exception("Failed to request Edit", 1);
			}

			$dataItems = $this->users_model->getItems($id);

			if (!is_array($dataItems)) {
				throw new Exception($dataItems, 1);
			}

			$data = array(
				'title_modal' => 'Edit User Admin',
				'url_form' => base_url() . "users/process",
				'form' => $this->load->view('v_form', $dataItems, true),
			);

			$html = $this->load->view($this->_v_form_modal, $data, true);

			$response['html'] = $html;
			echo json_encode($response);
			exit();
		} catch (Exception $e) {
			$response['failed'] = true;
			$response['message'] = $e->getMessage();
			echo json_encode($response);
			exit();
		}
	}

	public function detail_menu($id)
	{
		isAjaxRequestWithPost();
		try {
			if ($id == null) {
				throw new Exception("Failed to request Edit", 1);
			}

			$content = array(
				'url_form' => base_url() . "users/process_menu",
				'list_menu' => $this->users_model->listMenu(),
				'user_id' => $id
			);

			if (!empty($this->users_model->getMenu($id))) {
				$content['data'] = $this->users_model->getMenu($id);
			}

			$data = array(
				'title_modal' => 'Edit Access User',
				'content' => $this->load->view($this->_v_form_permission, $content, true),
			);

			$html = $this->load->view($this->_v_modal, $data, true);

			$response['html'] = $html;
			echo json_encode($response);
			exit();
		} catch (Exception $e) {
			$response['failed'] = true;
			$response['message'] = $e->getMessage();
			echo json_encode($response);
			exit();
		}
	}
}
