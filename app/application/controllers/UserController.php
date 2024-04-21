<?php
class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersModel');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function get_users()
    {
        $users = $this->UsersModel->get_users();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($users));
    }

    public function create()
    {
        $data['title'] = 'Crear usuario';
        $this->load->view('templates/header', $data);
        $this->load->view('user/create');
    }

    public function store() {
        $new_user = array(
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'),
            'last_name' => $this->input->post('last_name'),
            'password' => $this->input->post('password'),
            'state' => $this->input->post('state'),
            'role' => $this->input->post('role')
        );
        $this->UsersModel->create_user($new_user);
        redirect('admin/dashboard', 'refresh');
    }

    public function destroy($id) {
        $this->UsersModel->delete_user($id);
        redirect('admin/dashboard', 'refresh');
    }
}
