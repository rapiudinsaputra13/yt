<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pesan_model extends CI_Model
{
    public function get_pesan()
    {
        return $this->db->get("st_pesan")->result_array();
    }
}
