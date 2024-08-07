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

    public function menuList()
    {
        $this->db->select('*');
        $this->db->from($this->_table_menu_frontend);
        $this->db->where('parent', 0);
        $this->db->where('status', 1);

        $query = $this->db->get();

        return $query->result_array();
    }
}
