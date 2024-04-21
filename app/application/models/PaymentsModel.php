<?php
class PaymentsModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_payments() {
        $this->db->select('p.id id, CONCAT(u.name, " ", u.last_name) Nombre, p.quantity Cantidad, p.amount Monto, p.payment_date Fecha, t.description Tipo, p.comments Comentarios');
        $this->db->from('payment AS p');
        $this->db->join('profile AS u', 'u.id = p.user');
        $this->db->join('payment_type AS t', 't.id = p.ptype');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function record_payment($new_payment)
    {
        $this->db->insert('payment', $new_payment);
    }

    public function remove_payment($id) {
        $this->db->delete('payment', array('id'=> $id));
    }
}
