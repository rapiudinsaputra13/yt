<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
  public function get_poster()
  {
    $this->db->order_by('created', 'DESC');
    $this->db->order_by('id', 'ASC');
    return $this->db->get("st_poster")->result_array();
  }

  public function get_where_id($id)
  {
    $this->db->where("id", $id);
    return $this->db->get("st_poster")->result_array();
  }

  public function get_num_poster()
  {
    return $this->db->get("st_poster")->num_rows();
  }

  public function add_poster($data_poster)
  {
    return $this->db->insert("st_poster", $data_poster);
  }

  public function edit_poster($id_poster, $data_poster)
  {
    $this->db->where("id", $id_poster);
    return $this->db->update("st_poster", $data_poster);
  }

  public function delete_poster($id_poster)
  {
    $this->db->where("id", $id_poster);
    return $this->db->delete("st_poster");
  }
}
