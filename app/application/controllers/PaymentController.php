<?php
class PaymentController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PaymentsModel');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function get_payments()
    {
        $payments = $this->PaymentsModel->get_payments();
        return $this->output
            ->set_content_type('application/json')
            ->set_status_header(200)
            ->set_output(json_encode($payments));
    }

    public function create()
    {
        $data['title'] = 'Registrar pago';
        $this->load->view('templates/header', $data);
        $this->load->view('payment/create');
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
        $this->PaymentsModel->create_user($new_user);
        redirect('admin/users', 'refresh');
    }

    public function destroy($id) {
        $this->PaymentsModel->remove_payment($id);
        redirect('admin/users', 'refresh');
    }
}
