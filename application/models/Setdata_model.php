<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Setdata_model extends CI_Model
{


    public function get($tb)
    {

        return $this->db->get($tb)->result_array();
    }

    public function get_where($tb, $where, $start, $length)
    {
        return $this->db->query("select * from " . $tb . " where username LIKE '%" . $where . "%' or email LIKE '%" . $where . "%' or phone LIKE '%" . $where . "%' order by created ASC limit " . $start . "," . $length)->result_array();
    }

    public function get_order($tb, $start, $length)
    {
        return $this->db->query("select * from " . $tb . " order by created ASC limit " . $start . "," . $length)->result_array();
    }

    public function get_num($tb)
    {
        return $this->db->get($tb)->num_rows();
    }
}
