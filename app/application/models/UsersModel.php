<?php
class UsersModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function login($email, $password) {
        $result = $this->db->get_where(
            'profile', 
            array(
                'email' => $email,
                'password' => $password
            )
        );
        return $result->row();
    }
}
