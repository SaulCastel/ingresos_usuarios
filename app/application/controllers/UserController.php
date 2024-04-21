<?php
class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersModel');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function get_users()
    {
        $users = $this->UsersModel->get_users();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($users));
    }
}
