<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends MY_Model
{
    use MY_Tables;

    public function __construct()
    {
        $this->_tabel = $this->_table_users;
        parent::__construct();
    }

    public function _getMenu()
    {
        $this->load->model('menu/Menu_model', 'menu_model');
        return $this->menu_model;
    }

    public function show()
    {
        $this->datatables->select("a.id as id,
            a.fullname as fullname,
            a.email as email,
            a.status", false);
        $this->datatables->where("a.deleted_at is null", null, false);

        $fieldSearch = [
            'a.fullname',
            'a.email',
            'c.role_name'
        ];

        $this->_searchDefaultDatatables($fieldSearch);

        $this->datatables->order_by('a.updated_at desc');

        $button = "<button style=\"font-size: xx-small;background-color: #E7438B;\" class=\"btn btn-icon hover-scale btn-sm btnEdit\" data-type=\"modal\" data-fullscreenmodal=\"0\" data-url=\"" . base_url("users/update/$1") . "\" data-id =\"$1\">
                        <i class=\"fa-solid fa-edit fs-4 text-white\"></i>
                    </button>";
        $button .= "&nbsp;&nbsp;";
        $button .= "<button style=\"font-size: xx-small;background-color: #4871CE;\" class=\"btn btn-icon hover-scale btn-sm btn-list-menu\" data-title=\"Data\" data-type=\"modal\" data-fullscreenmodal=\"0\" data-url=\"" . base_url("users/detail_menu/$1") . "\" data-id =\"$1\">
                    <i class=\"fa-solid fa-list fs-4 text-white\"></i>
                </button>";

        $this->datatables->add_column('action', $button, 'id');
        $this->datatables->from("{$this->_tabel} a");
        return $this->datatables->generate();
    }

    private function _validate()
    {
        $response = array('success' => false, 'validate' => true, 'messages' => []);
        $response['type'] = !empty($this->input->post('id')) ? 'update' : 'insert';

        $role_fullname = array('trim', 'required', 'xss_clean');
        $role_email = array('trim', 'required', 'valid_email', 'xss_clean');
        $role_password = $response['type'] == 'insert' ? array('trim', 'required', 'xss_clean', 'min_length[8]', 'max_length[15]') : [];

        $this->form_validation->set_rules('fullname', 'Fullname', $role_fullname);

        $id = !empty($this->input->post('id')) ? clearInput($this->input->post('id')) : "";
        $email_check = $response['type'] == 'insert' ? array(
            'email_check', function ($value) {
                if (!empty($value) || $value != '') {
                    try {
                        $cek = $this->get(array('email' => clearInput($value)));
                        if (is_object($cek)) {
                            throw new Exception;
                        }
                        return true;
                    } catch (Exception $e) {
                        $this->form_validation->set_message('email_check', 'The {field} already used');
                        return false;
                    }
                }
            }
        ) : array(
            'email_check', function ($value) use ($id) {
                if (!empty($value) || $value != '') {
                    try {
                        $cek = $this->get(array('email' => clearInput($value)));
                        if (is_object($cek)) {
                            if ($cek->id != $id) {
                                throw new Exception;
                            }
                        }
                        return true;
                    } catch (Exception $e) {
                        $this->form_validation->set_message('email_check', 'The {field} already used');
                        return false;
                    }
                }
            }
        );;
        array_push($role_email, $email_check);

        $this->form_validation->set_rules('email', 'Email', $role_email);

        if ($response['type'] == 'update') {
            $password_check = array(
                'password_check', function ($value) use ($id) {
                    if (!empty($value) || $value != '') {
                        try {
                            $length = strlen($value);
                            if ($length < 8 || ($length > 8  && $length < 15)) {
                                throw new Exception;
                            }
                            return true;
                        } catch (Exception $e) {
                            $this->form_validation->set_message('password_check', 'The {field} min length 8 character & max length 15 character');
                            return false;
                        }
                    }
                }
            );
            array_push($role_password, $password_check);
        }

        $this->form_validation->set_rules('password', 'Password', $role_password);

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
            $fullname = clearInput($this->input->post('fullname'));
            $password = clearInput($this->input->post('password'));
            $status = empty($this->input->post('status')) ? 0 : clearInput($this->input->post('status'));
            $email = clearInput($this->input->post('email'));

            $data_array = array(
                'fullname' => $fullname,
                'email' => $email,
                'status' => $status == 'enabled' ? 1 : 0,
            );

            if (empty($id)) {
                $data_array['remember_token'] = generateCode();
                $data_array['password'] = password_hash($password, PASSWORD_DEFAULT);

                $process = $this->insert($data_array);

                if (!$process) {
                    $response['messages'] = 'Failed insert data user admin';
                    throw new Exception;
                }

                $insert_menu = [
                    'id' => uuid(),
                    'master_menu_id' => "1",
                    'users_id' => $process,
                    'view' => "1",
                    'created_at' => $this->_user_id,
                    'created_by' => time_now_convert()
                ];

                $execute = $this->db->insert($this->_table_master_users_access_menu, $insert_menu);

                if (!$execute) {
                    $response['messages'] = 'Failed insert data access menu';
                    throw new Exception;
                }


                $response['messages'] = "Successfully Insert data user admin";
            } else {
                $data = $this->get(array('id' => $id));

                if (!$data) {
                    $response['messages'] = 'Data update invalid';
                    throw new Exception;
                }

                if (strlen($password) < 8) {
                    unset($data_array['password']);
                } else {
                    $data_array['password'] = password_hash($password, PASSWORD_DEFAULT);
                }

                $process = $this->update(array('id' => $id), $data_array);

                if (!$process) {
                    $response['messages'] = 'Failed update data user';
                    throw new Exception;
                }

                $response['messages'] = 'Successfully update data user';
            }

            $this->db->trans_commit();
            $response['success'] = true;
            return $response;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return $response;
        }
    }

    public function save_menu()
    {
        $this->db->trans_begin();
        try {
            $dataPayload = $this->input->post();

            $condition = ['users_id' => $dataPayload['users_id']];

            $this->db->where($condition);
            $this->db->delete($this->_table_master_users_access_menu);

            if (isset($dataPayload['menus']) && is_array($dataPayload['menus'])) {
                foreach ($dataPayload['menus'] as $menuItem) {

                    $checkView = isset($menuItem['view']) ? $menuItem['view'] : 0;

                    if (isset($menuItem['menu_id_header']) && $checkView != '0') {
                        $insert_menu = [
                            'id' => uuid(),
                            'master_menu_id' => $menuItem['menu_id_header'],
                            'users_id' => $dataPayload['users_id'],
                            'view' => isset($menuItem['view']) ? $menuItem['view'] : 0,
                            'insert' => isset($menuItem['insert']) ? $menuItem['insert'] : 0,
                            'update' => isset($menuItem['update']) ? $menuItem['update'] : 0,
                            'delete' => isset($menuItem['delete']) ? $menuItem['delete'] : 0,
                            'created_at' => $this->_user_id,
                            'created_by' => time_now_convert()
                        ];

                        $this->db->insert($this->_table_master_users_access_menu, $insert_menu);
                    }
                }
            }

            $response['messages'] = "Successfully Update Access Menu";

            $this->db->trans_commit();
            $response['type'] = 'insert';
            $response['success'] = true;
            $response['validate'] = true;
            return $response;
        } catch (Exception $e) {
            $this->db->trans_rollback();
            return $response;
        }
    }

    public function getItems($id)
    {
        try {
            $urlPath = $_SERVER['REQUEST_URI'];
            $urlSegments = explode('/', $urlPath);

            $menuId = $this->db->get_where('master_menus', ['controller' => $urlSegments[2]])->row();
            $checkAccess = $this->db->get_where('master_users_access_menu', ['master_menu_id' => $menuId->id, 'users_id' => $this->_user_id])->row();

            if ($checkAccess->update != 1) {
                // throw new Exception("Sorry,you don't have permission to access", 1);
                $response = array('success' => false);
                $response['type'] = 'access';
                $response['messages'] = "Sorry,you don't have permission to access";
                throw new Exception;
            }

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

    public function changeStatus($id)
    {
        try {
            if ($id == null) {
                throw new Exception("Failed change status", 1);
            }

            $get = $this->get(array('id' => $id));
            if (!$get) {
                throw new Exception("Failed change status", 1);
            }

            if ($get->email == $this->_session_email) {
                throw new Exception("Sorry,you don't have permission to change status this item", 1);
            }

            $status = $get->status == 1 ? 0 : 1;
            $update = $this->update(array('id' => $id), array('status' => $status));
            if (!$update) {
                throw new Exception("Failed change status", 1);
            }

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function getProfil()
    {
        $get = $this->get(array('email' => $this->_session_email, 'remember_token' => $this->_session_id));
        return $get;
    }

    public function getMenu($id)
    {
        $data = $this->_getMenu()->menu($id);

        if (!is_array($data) && !is_object($data)) {
            return array();
        }

        $menu = array();
        foreach ($data as $item) {
            if ($item['parent'] == 0) {
                $menu[$item['id']] = $item;
            } else {
                $parentId = $item['parent'];
                $parent = $this->db->get_where($this->_table_master_menus, ['id' => $parentId])->row_array();
                if (!isset($menu[$parentId])) {
                    $menu[$parentId] = $parent;
                    $menu[$parentId]['child'] = array();
                }
                $menu[$parentId]['child'][$item['id']] = $item;
            }
        }

        return $menu;
    }

    public function listMenu()
    {

        $data = $this->_getMenu()->masterMenuList();

        $menu = array();
        foreach ($data as $item) {
            if ($item['parent'] == 0) {
                $menu[$item['id']] = $item;
            } else {
                $parentId = $item['parent'];
                $parent = $this->db->get_where($this->_table_master_menus, ['id' => $parentId])->row_array();
                if (!isset($menu[$parentId])) {
                    $menu[$parentId] = $parent;
                    $menu[$parentId]['child'] = array();
                }
                $menu[$parentId]['child'][$item['id']] = $item;
            }
        }

        return $menu;
    }
}
