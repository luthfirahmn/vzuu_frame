<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup_model extends MY_Model
{
    use MY_Tables;

    public function __construct()
    {
        parent::__construct();
    }

    public function _validate()
    {
        $response = array('success' => false, 'validate' => true, 'messages' => array());

        $emailCheck = ['trim,required,valid_email,xss_clean'];

        $check_email_exists = [
            'check_email_exists',
            function ($email) {
                $this->db->where('email', $email);
                $query = $this->db->get($this->_table_users);

                if ($query->num_rows() > 0) {
                    $this->form_validation->set_message('check_email_exists', 'The {field} has already been registered');
                    return FALSE;
                }
                return TRUE;
            }
        ];

        array_push($emailCheck, $check_email_exists);

        $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'trim|required|xss_clean');
        $this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean');
        $this->form_validation->set_rules('birthdate', 'Tanggal Lahir', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', $emailCheck);
        $this->form_validation->set_rules('no_hp', 'No Handphone', 'trim|required|xss_clean');
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

    public function save()
    {
        $this->db->trans_begin();
        try {
            $response = self::_validate();

            if (!$response['validate']) {
                throw new Exception("Error Processing Request", 1);
            }

            $nama_depan = clearInput($this->input->post('nama_depan'));
            $nama_belakang = clearInput($this->input->post('nama_belakang'));
            $gender = clearInput($this->input->post('gender'));
            $tgl_lahir = clearInput($this->input->post('birthdate'));
            $email = clearInput($this->input->post('email'));
            $no_hp = clearInput($this->input->post('no_hp'));
            $password = clearInput($this->input->post('password'));

            $data_users = [
                'fullname' => $nama_depan . ' ' . $nama_belakang,
                'email' => $email,
                'status' => 1,
                'remember_token' => generateCode(),
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $this->db->insert($this->_table_users, $data_users);
            $user_id = $this->db->insert_id();

            $data_users_detail = [
                'id' => uuid(),
                'users_id' => $user_id,
                'nama_depan' => $nama_depan,
                'nama_belakang' => $nama_belakang,
                'gender' => $gender,
                'tgl_lahir' => $tgl_lahir,
                'no_hp' => $no_hp,
                'created_at' => time_now_convert()
            ];

            $process = $this->db->insert($this->_table_users_detail, $data_users_detail);

            if (!$process) {
                $response['messages'] = 'Failed insert data blog';
                throw new Exception;
            }

            $response['messages'] = [
                'title' => 'Akun Anda Telah Terdaftar',
                'message' => 'Harap aktifkan akun Anda dengan mengklik tautan<br>
		                        yang telah kami kirim ke email<br>'
            ];

            $this->db->trans_commit();
            $response['success'] = true;
            return $response;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return $response;
        }
    }
}
