<?php
class AdminController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function users() {
        if (!$this->session->logged_in){
            redirect('login');
        }
        $data['name'] = $this->session->user_name;
        $data['title'] = 'Admin - Usuarios';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/users', $data);
    }

    public function payments() {
        if (!$this->session->logged_in){
            redirect('login');
        }
        $data['name'] = $this->session->user_name;
        $data['title'] = 'Admin - Pagos';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/admin/navbar', $data);
        $this->load->view('admin/payments', $data);
    }
}
