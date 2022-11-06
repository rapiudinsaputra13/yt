<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sponsor_model extends CI_Model
{
    public function get_sponsor()
    {
        return $this->db->get("st_sponsor")->result_array();
    }
    public function get_sponsor_where($where, $start, $length)
    {
        return $this->db->query("select * from st_sponsor where nama_sponsor LIKE '%" . $where . "%' or logo LIKE '%" . $where . "%' order by created ASC limit " . $start . "," . $length)->result_array();
    }

    public function get_sponsor_order($start, $length)
    {
        return $this->db->query("select * from st_sponsor order by created ASC limit " . $start . "," . $length)->result_array();
    }

    public function get_num_sponsor()
    {
        return $this->db->get("st_sponsor")->num_rows();
    }

    public function add_sponsor($data_sponsor)
    {
        return $this->db->insert("st_sponsor", $data_sponsor);
    }

    public function edit_sponsor($id_sponsor, $data_sponsor)
    {
        $this->db->where("id_sponsor", $id_sponsor);
        return $this->db->update("st_sponsor", $data_sponsor);
    }

    public function hapus_sponsor($id_sponsor)
    {
        $this->db->where("id_sponsor", $id_sponsor);
        return $this->db->delete("st_sponsor");
    }
}
