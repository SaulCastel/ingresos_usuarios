<?php
class UsersModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function login($email, $password) {
        $query = $this->db->get_where(
            'profile', 
            array(
                'email' => $email,
                'password' => $password
            )
        );
        return $query->row();
    }

    public function get_users() {
        $this->db->select('p.id "id", CONCAT(p.name, " ", p.last_name) "Nombre", r.description "Tipo", s.description "Estado"');
        $this->db->from('profile AS p');
        $this->db->join('profile_role AS r', 'r.id = p.role');
        $this->db->join('profile_state AS s', 's.id = p.state');
        $query = $this->db->get();
        return $query->result_array();
    }
}
