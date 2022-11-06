<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Info_model extends CI_Model
{
    public function get_info()
    {
        return $this->db->get("st_info")->result_array();
    }
}
