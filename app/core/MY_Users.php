<?php defined('BASEPATH') or exit('No direct script access allowed');

abstract class MY_Users extends MY_Template_Frontend
{

	protected $_session_email;
	protected $_session_id;
	protected $_menu;
	protected $_menu_active;
	protected $_controller_except = '';
	protected $_function_except   = [];

	public function __construct()
	{
		$this->_session_email = $this->session->userdata('email_admin');
		$this->_session_id    = $this->session->userdata('session_id_admin');

		$this->_check_session();
		$this->_logout_url = base_url() . "logout";
		parent::__construct();
		$this->load->model($this->router->class . '_model', strtolower($this->router->class) . '_model');
	}

	protected function setCss($css = [])
	{
		$cssFiles = [];
		foreach ($css as $assets) {
			$cssFiles[] = $assets . '.css';
		}
		$this->template->set('css', $cssFiles);
	}

	private function _check_session()
	{
		$email      = $this->_session_email;
		$session_id = $this->_session_id;
		try {
			if ($email == null || $session_id == null) {
				throw new Exception("Session not found", 1);
			}

			$this->load->model('app/App_model', 'app_model');

			$check = $this->app_model->_check_data_user($email, $session_id);

			if (!$check) {
				throw new Exception("This Account has been suspended", 1);
			}
		} catch (Exception $e) {

			if ($this->input->is_ajax_request()) {
				header("HTTP/1.1 401 Unauthorized");
				exit;
			}
			redirect(base_url('login'), 'location');
		}
	}

	protected function function_access($function = null)
	{
		try {
			if ($function === null) {
				throw new Exception;
			}

			if ($this->_menu_active !== false && isset($this->_menu_active->{$function})) {
				if ((int)$this->_menu_active->{$function} === 0) {
					throw new Exception;
				}
			}
			return true;
		} catch (Exception $e) {
			pageError();
		}
	}

	protected function setButtonHeader()
	{
		$custom = [];
		if (is_array($this->_custom_button_header) && count($this->_custom_button_header) > 0) {
			$custom = $this->_custom_button_header;
		}
		$this->buttonHeader($this->_menu_active, $custom);
	}

	protected function setTable($array = [], $buttonHeader = false)
	{
		if (!$this->checkThereIsButtonDatatables()) {
			array_pop($array);
		}

		$this->setTemplateTable($array);
		if ($buttonHeader) {
			$this->setButtonHeader();
		} else {
			$this->buttonHeader();
		}
	}

	protected function setButtonOnTable()
	{
		return $this->buttonOnTable($this->_menu_active);
	}

	protected function checkThereIsButtonDatatables()
	{
		$update = $this->_menu_active->update;
		$delete = $this->_menu_active->delete;
		$import = $this->_menu_active->import;
		$export = $this->_menu_active->export;

		if ($update == 0 && $delete == 0 && $import == 0 && $export == 0) {
			return false;
		}
		return true;
	}

	public function paging()
	{
		$this->function_access('view');
		isAjaxRequestWithPost();
		echo json_encode(array('paging' => generatePaging()));
		exit();
	}
}
