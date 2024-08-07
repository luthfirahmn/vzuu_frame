<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends MY_Model
{
    use MY_Tables;

    public function __construct()
    {
        $this->_tabel = $this->_table_users;
        parent::__construct();
    }

    public function _validate()
    {
        $response = array('success' => false, 'validate' => true, 'messages' => array());

        $decrypted_email = $this->decrypt_value($this->input->post('email'));
        $_POST['email'] = $decrypted_email;
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[50]|xss_clean');
        $this->form_validation->set_error_delimiters('<div class="' . VALIDATION_MESSAGE_FORM . '">', '</div>');

        if ($this->form_validation->run() === false) {
            $response['validate'] = false;
            foreach ($this->input->post() as $key => $value) {
                $response['messages'][$key] = form_error($key);
            }
        }

        return $response;
    }

    function decrypt_value($encrypted_value)
    {
        // Extract the salt (first 8 characters)
        $salt = substr($encrypted_value, 0, 8);

        // Extract the reversed base64 encoded value
        $reversed_base64_value = substr($encrypted_value, 8);

        // Reverse the base64 string back to normal
        $base64_value = strrev($reversed_base64_value);

        // Decode the base64 string
        $salted_value = base64_decode($base64_value);

        // Remove the salt from the value
        $value = str_replace($salt, '', $salted_value);
        return $value;
    }

    public function _check_email($email, $password)
    {
        $get = $this->get(array('email' => $email));

        try {

            if (!$get) {
                throw new Exception("Error Processing Request", 1);
            }

            if (!password_verify($password, $get->password)) {
                throw new Exception("Error Processing Request", 1);
            }

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function _check()
    {
        $email = clearInput($this->input->post('email'));
        $password = clearInput($this->input->post('password'));

        $email_convert = $this->decrypt_value($email);
        $pass_convert = $this->decrypt_value($password);

        try {
            $response = $this->_validate();
            if ($response['validate'] === false) {
                throw new Exception();
            }

            $check = $this->_check_email($email_convert, $pass_convert);
            if ($check === false) {
                $response['email'] = $email_convert;
                $response['password'] = $pass_convert;
                throw new Exception("Error Processing Request", 1);
            }

            $this->load->model('app/App_model', 'app_model');

            $check = $this->app_model->_check_data_user($email_convert);
            if ($check === false) {
                $response['email'] = $email_convert;
                $response['password'] = $pass_convert;
                throw new Exception("Error Processing Request", 1);
            }

            $response = $this->app_model->createSession($email_convert);

            return $response;
        } catch (Exception $e) {
            return $response;
        }
    }
}
