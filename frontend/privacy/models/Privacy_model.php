<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Privacy_model extends MY_Model
{
    use MY_Tables;

    public function __construct()
    {
        $this->_tabel = $this->_table_privacy;
        parent::__construct();
    }

    public function showData()
    {
        $query = $this->db
            ->where('status', 1)
            ->limit(1)
            ->get($this->_tabel);

        return $query->row();
    }
}
