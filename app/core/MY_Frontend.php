<?php defined('BASEPATH') or exit('No direct script access allowed');

abstract class MY_Frontend extends MX_Controller
{
    protected $_session_email;
    protected $_session_id;

    public function __construct()
    {
        $this->_session_email = $this->session->userdata('email_admin');
        $this->_session_id    = $this->session->userdata('session_id_admin');
        parent::__construct();
        $this->config->load('assets');
        $this->template->set_layout(LAYOUT, LANDING_PAGE);
        $this->template->set_partial(HEADER_FRONTEND, LANDING_PAGE . '/' . HEADER_FRONTEND);
        $this->template->set_partial(FOOTER_FRONTEND, LANDING_PAGE . '/' . FOOTER_FRONTEND);
    }

    protected function check_session()
    {
        if (!empty($this->_session_id) && !empty($this->_session_email)) {
            redirect(base_url('dashboard'));
        }
    }

    protected function setJs($names = [])
    {
        if (empty($names)) {
            $names = [strtolower($this->router->class . '_' . $this->router->method)];
        }

        $jsFiles = [];
        foreach ($names as $name) {
            $jsFiles[] = JS_CORE . '/' . strtolower(get_class($this)) . '/' . $name . '.js';
        }

        $this->template->set('js', $jsFiles);
    }

    protected function setCss($css = [])
    {
        $cssFiles = [];
        foreach ($css as $assets) {
            $cssFiles[] = $assets . '.css';
        }
        $this->template->set('css', $cssFiles);
    }
}
