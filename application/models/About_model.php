<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About_model extends CI_Model
{
  public function get_struktur_organisasi()
  {
    $this->db->order_by('id', 'ASC');
    return $this->db->get("st_struktur_organisasi")->result_array();
  }

  public function get_where_id($id)
  {
    $this->db->where("id", $id);
    return $this->db->get("st_struktur_organisasi")->result_array();
  }

  public function add_struktur_organisasi($data_struktur_organisasi)
  {
    return $this->db->insert("st_struktur_organisasi", $data_struktur_organisasi);
  }

  public function edit_struktur_organisasi($id_struktur_organisasi, $data_struktur_organisasi)
  {
    $this->db->where("id", $id_struktur_organisasi);
    return $this->db->update("st_struktur_organisasi", $data_struktur_organisasi);
  }

  public function delete_struktur_organisasi($id_struktur_organisasi)
  {
    $this->db->where("id", $id_struktur_organisasi);
    return $this->db->delete("st_struktur_organisasi");
  }
}
