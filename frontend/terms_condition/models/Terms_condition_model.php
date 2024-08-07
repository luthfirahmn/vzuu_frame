<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Terms_condition_model extends MY_Model
{
    use MY_Tables;

    public function __construct()
    {
        $this->_tabel = $this->_table_terms_condition;
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
