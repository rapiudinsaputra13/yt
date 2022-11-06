<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Postingan_model extends CI_Model
{
    public function get_postingan()
    {
        return $this->db->get("st_postingan")->result_array();
    }

    public function get_where_id($id)
    {
        $this->db->where("id_postingan", $id);
        return $this->db->get("st_postingan")->result_array();
    }
    public function get_postingan_where($where, $start, $length)
    {
        return $this->db->query("select * from st_postingan where judul LIKE '%" . $where . "%' or produser LIKE '%" . $where . "%' or sutradara LIKE '%" . $where . "%' order by created ASC limit " . $start . "," . $length)->result_array();
    }

    public function get_postingan_order($start, $length)
    {
        return $this->db->query("select * from st_postingan order by created ASC limit " . $start . "," . $length)->result_array();
    }

    public function get_num_postingan()
    {
        return $this->db->get("st_postingan")->num_rows();
    }

    public function add_postingan($data_postingan)
    {
        return $this->db->insert("st_postingan", $data_postingan);
    }

    public function edit_postingan($id_postingan, $data_postingan)
    {
        $this->db->where("id_postingan", $id_postingan);
        return $this->db->update("st_postingan", $data_postingan);
    }

    public function delete_postingan($id_postingan)
    {
        $this->db->where("id_postingan", $id_postingan);
        return $this->db->delete("st_postingan");
    }
}
