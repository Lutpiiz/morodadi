<?php
class Mprogres extends CI_Model {
    public function index() {
        return $this->db->get('orderan')->result_array();
    }

    public function detail($id_order) {
        return $this->db->get_where('orderan', ['id_order' => $id_order])->row_array();
    }
}