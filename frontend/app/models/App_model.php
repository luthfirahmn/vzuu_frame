<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App_model extends MY_Model
{
    use MY_Tables;

    public function __construct()
    {
        $this->_tabel = $this->_table_users;
        parent::__construct();
    }

    public function _check_data_user($email, $remember_token = null)
    {
        try {
            $this->db->select("a.email,a.status");
            $this->db->where(["a.email" => $email, "a.status" => 1]);

            if ($remember_token != null) {
                $this->db->where(['a.remember_token' => $remember_token]);
            }

            $check = $this->db->get("{$this->_tabel} a")->row();
            if (!$check) {
                throw new Exception("Error Processing Request", 1);
            }

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function createSession($email)
    {
        $response = [
            'success' => false,
            'validate' => true
        ];
        $check = $this->get(array('email' => $email));

        try {

            if (!$check) {
                $response['messages'] = 'Invalid Email or Password';
                throw new Exception("Error Processing Request", 1);
            }

            //create session_id
            $remember_token = generateCode();

            //process update
            $data = array(
                'remember_token' => $remember_token,
            );
            $where = array(
                'email' => $email,
            );
            $update = $this->update($where, $data);
            if (!$update) {
                $response['messages'] = 'Invalid Email or Password';
                throw new Exception("Error Processing Request", 1);
            }

            //create session
            $session = array(
                'email_admin'      => $email,
                'session_id_admin' => $remember_token,
                'x-id-user' => $check->id,
            );
            $this->session->set_userdata($session);

            $response['email'] = $email;
            $response['success'] = true;
            $response['menu_first'] = 'dashboard';
            $response['messages'] = 'success';
            return $response;
        } catch (Exception $e) {
            return $response;
        }
    }
}
