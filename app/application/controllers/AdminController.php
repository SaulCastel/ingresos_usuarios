<?php
class AdminController extends CI_Controller {
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
        $this->load->view('admin/dashboard', $data);
    }
}
