<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hubungi_kami_model extends MY_Model
{
    use MY_Tables;

    public function __construct()
    {
        parent::__construct();
    }

    private function _validate()
    {
        $response = array('success' => false, 'validate' => true, 'messages' => []);
        $response['type'] = !empty($this->input->post('id')) ? 'update' : 'insert';

        $rule = array('trim', 'required', 'xss_clean');

        $this->form_validation->set_rules('nama', 'Nama', $rule);
        $this->form_validation->set_rules('email', 'Email', ['trim', 'required', 'xss_clean', 'valid_email']);
        $this->form_validation->set_rules('pesan', 'Pesan', $rule);

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

            $nama = clearInput($this->input->post('nama'));
            $email = clearInput($this->input->post('email'));
            $pesan = clearInput($this->input->post('pesan'));

            $data_array = [
                'id' => uuid(),
                'nama' => $nama,
                'email' => $email,
                'pesan' => $pesan
            ];

            $process = $this->db->insert($this->_table_contact_us, $data_array);

            if (!$process) {
                $response['messages'] = 'Failed insert data blog';
                throw new Exception;
            }

            $response['messages'] = [
                'title' => 'Terimakasih,Pesan Anda Sudah Kami Terima',
                'message' => 'Admin Kami Akan Segera Menghubungi Anda Kembali'
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
