<?php
class AuthController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('UsersModel');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function login() {
        $data = array();
        if ($this->session->logged_in) {
            if ($this->session->user_type == 0) {
                redirect('admin/dashboard');
            }
            redirect('user/dashboard');
        }
        if (isset($_POST['submit'])) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->UsersModel->login($email, $password);
            if ($user) {
                $user_data = array(
                    'email' => $user->email,
                    'user_type' => $user->role,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($user_data);
                if ($user->role == 0) {
                    redirect('admin/dashboard');
                }
                redirect('user/dashboard');
            } else {
                $data['error'] = 'Usuario o contraseña incorrectos';
            }
        }
        $this->load->view('login', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
