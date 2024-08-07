<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends MY_Model
{
    use MY_Tables;

    public function getDetailData()
    {
        $this->db->select('t0.email, t1.*');
        $this->db->from('users t0');
        $this->db->join('users_detail t1', 't1.users_id = t0.id', 'inner');
        $query = $this->db->get();

        return $query;
    }

    private function _validate()
    {
        $response = array('success' => false, 'validate' => true, 'messages' => []);
        $response['type'] = !empty($this->input->post('id')) ? 'update' : 'insert';

        $rule = array('trim', 'required', 'xss_clean');

        $this->form_validation->set_rules('title_indonesia', 'Title Indonesia', $rule);
        $this->form_validation->set_rules('desc_indonesia', 'Description Indonesia', $rule);
        $this->form_validation->set_rules('title_english', 'Title English', $rule);
        $this->form_validation->set_rules('desc_english', 'Description English', $rule);

        $this->form_validation->set_error_delimiters('<div class="' . VALIDATION_MESSAGE_FORM . '">', '</div>');

        if ($this->form_validation->run() === false) {
            $response['validate'] = false;
            foreach ($this->input->post() as $key => $value) {
                $response['messages'][$key] = form_error($key);
            }
        }

        return $response;
    }

    public function update_information()
    {
        $this->db->trans_begin();
        try {
            // $response = self::_validate();

            // if (!$response['validate']) {
            //     throw new Exception("Error Processing Request", 1);
            // }

            $nama_depan = clearInput($this->input->post('firstName'));
            $nama_belakang = clearInput($this->input->post('lastName'));
            $gender = clearInput($this->input->post('gender'));
            $tgl_lahir = clearInput($this->input->post('dob'));
            $no_hp = clearInput($this->input->post('phone'));
            // $email = clearInput($this->input->post('email'));
            // $password = clearInput($this->input->post('password'));

            $data_users_detail = [
                'nama_depan' => $nama_depan,
                'nama_belakang' => $nama_belakang,
                'gender' => $gender,
                'tgl_lahir' => $tgl_lahir,
                'no_hp' => $no_hp,
                'updated_by' => $this->_user_id,
                'updated_at' => time_now_convert()
            ];

            $this->db->where('users_id', $this->_user_id);
            $process = $this->db->update($this->_table_users_detail, $data_users_detail);

            if (!$process) {
                $response['messages'] = 'Failed update';
                throw new Exception;
            }

            $response['messages'] = "Successfully update";

            $this->db->trans_commit();
            $response['success'] = true;
            return $response;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return $response;
        }
    }
}
