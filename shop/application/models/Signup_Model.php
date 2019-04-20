<?php
class Signup_Model extends CI_Model
{

    // public function isvalidate($username, $password)
    // {
    //     $q = $this->db->where(['username' => $username, 'password' => $password])
    //         ->get('users');
    //     if ($q->num_rows()) {
    //             return $q->row()->id;
    //         } else {
    //         return false;
    //     }
    // }
    // public function ArticalList($limit, $offset)
    // {
    //     $userid = $this->session->userdata('id');

    //     $q = $this->db->select()
    //         ->from('articals')
    //         ->where(['user_id' => $userid])
    //         ->limit($limit, $offset)
    //         ->get();
    //     return $q->result();
    // }

    // public function Add_articles($array)
    // {

    //     return $this->db->insert('articals', $array);
    // }
    public function Signup_user($array)
    {

        return $this->db->insert('signup', $array);
    }
    // public function DelArticle($id)
    // {

    //     return $this->db->delete('articals', ['id' => $id]);
    // }

    // public function Rows_Counter()
    // {
    //     $userid = $this->session->userdata('id');

    //     $q = $this->db->select()
    //         ->from('articals')
    //         ->where(['user_id' => $userid])
    //         ->get();
    //     return $q->num_rows();
    // }
}
