<?php
class EmployeeController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index() {
        if (!$this->session->logged_in){
            redirect('login');
        }
        $data['name'] = $this->session->user_name;
        $data['user_id'] = $this->session->user_id;
        $data['title'] = 'Mis pagos';
        $this->load->view('templates/header', $data);
        $this->load->view('employee/dashboard', $data);
    }
}
