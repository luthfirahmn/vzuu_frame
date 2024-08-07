<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends MY_Model
{
    use MY_Tables;

    public function __construct()
    {
        $this->_tabel = $this->_table_blog;
        parent::__construct();
    }

    public function show()
    {
        $this->datatables->select("
            id,
            title,
            body,
            status", false);

        $this->datatables->from("{$this->_table_blog}");
        $this->datatables->order_by('created_at desc');

        $button = "<button style=\"font-size: xx-small;background-color: #54D723;\" class=\"btn btn-icon hover-scale btn-sm btnEdit\" data-type=\"modal\" data-fullscreenmodal=\"0\" data-url=\"" . base_url("users/update/$1") . "\" data-id =\"$1\">
                        <i class=\"fa-solid fa-edit fs-4 text-white\"></i>
                    </button>";
        $button .= "&nbsp;&nbsp;";
        $button .= "<button style=\"font-size: xx-small;background-color: #BF3B11;\" class=\"btn btn-icon hover-scale btn-sm btn-list-menu\" data-title=\"Data\" data-type=\"modal\" data-fullscreenmodal=\"0\" data-url=\"" . base_url("users/detail_menu/$1") . "\" data-id =\"$1\">
                    <i class=\"fa-solid fa-trash fs-4 text-white\"></i>
                </button>";

        $this->datatables->add_column('action', $button, 'id');
        return $this->datatables->generate();
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

    public function save()
    {
        $this->db->trans_begin();
        try {
            $response = self::_validate();

            if (!$response['validate']) {
                throw new Exception("Error Processing Request", 1);
            }

            $id = clearInput($this->input->post('id'));
            $title_indonesia = clearInput($this->input->post('title_indonesia'));
            $desc_indonesia = clearInput($this->input->post('desc_indonesia'));
            $title_english = clearInput($this->input->post('title_english'));
            $desc_english = clearInput($this->input->post('desc_english'));
            $status = clearInput($this->input->post('status'));

            if (isset($_FILES['image_file']['name'])) {
                $upload_dir = FCPATH . 'assets/uploads/blog/';

                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }

                $original_file_name = $_FILES['image_file']['name'];
                $tmp_file = $_FILES['image_file']['tmp_name'];
                $full_path = $upload_dir . '/' . $original_file_name;
                move_uploaded_file($tmp_file, $full_path);
            }

            $data_array = [
                'title' => $title_indonesia,
                'body' => $desc_indonesia,
                'title_en' => $title_english,
                'body_en' => $desc_english,
                'status' => isset($status) ? 'published' : 'inactive',
                'image' => $original_file_name ?? null,
            ];

            if (empty($id)) {
                $data_array['id'] = uuid();
                $data_array['created_by'] = $this->_user_id;
                $data_array['created_at'] = time_now_convert();

                $process = $this->db->insert($this->_tabel, $data_array);

                if (!$process) {
                    $response['messages'] = 'Failed insert data blog';
                    throw new Exception;
                }

                $response['messages'] = "Successfully insert data blog";
            } else {
                // $data = $this->get(array('id' => $id));

                // if (!$data) {
                //     $response['messages'] = 'Data update invalid';
                //     throw new Exception;
                // }

                // if (strlen($password) < 8) {
                //     unset($data_array['password']);
                // } else {
                //     $data_array['password'] = password_hash($password, PASSWORD_DEFAULT);
                // }

                // $process = $this->update(array('id' => $id), $data_array);

                // if (!$process) {
                //     $response['messages'] = 'Failed update data user';
                //     throw new Exception;
                // }

                // $response['messages'] = 'Successfully update data user';
            }
            $this->db->trans_commit();
            $response['success'] = true;
            return $response;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return $response;
        }
    }

    public function getItems($id)
    {
        try {
            $get = $this->get(array('id' => $id));

            if (!$get) {
                throw new Exception("Data not Register", 1);
            }

            $table = array(
                'id' => $get->id,
                'fullname' => $get->fullname,
                'email' => $get->email,
                'checked' => $get->status == 1 ? 'enabled' : 'disabled'
            );

            return $table;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
