<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
  public function validation($email, $password = null)
  {

    if ($password) {
      $this->db->where('email', $email);
      $this->db->where('password', md5($password));
      $user = $this->db->get('cms_users')->result_array();
    } else {
      $this->db->where('email', $email);
      $user = $this->db->get('cms_users')->result_array();
    }
    return $user;
  }

  public function get_sessions($email, $password)
  {
    $this->db->where("email", $email);
    $this->db->where("password", md5($password));
    return $this->db->get("cms_users")->result_array();
  }

  public function get_user()
  {

    return $this->db->get("cms_users")->result_array();
  }

  public function get_user_where($where, $start, $length)
  {
    return $this->db->query("select * from cms_users where username LIKE '%" . $where . "%' or email LIKE '%" . $where . "%' or phone LIKE '%" . $where . "%' order by created ASC limit " . $start . "," . $length)->result_array();
  }

  public function get_user_order($start, $length)
  {
    return $this->db->query("select * from cms_users order by created ASC limit " . $start . "," . $length)->result_array();
  }

  public function get_num_user()
  {
    return $this->db->get("cms_users")->num_rows();
  }

  public function edit_user($id_user, $data_user)
  {
    $this->db->where("id", $id_user);
    return $this->db->update("cms_users", $data_user);
  }

  public function hapus_user($id_user)
  {
    $this->db->where("id", $id_user);
    return $this->db->delete("cms_users");
  }
}
