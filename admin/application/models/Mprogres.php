<?php
class Mprogres extends CI_Model {
    public function index() {
        return $this->db->get('orderan')->result_array();
    }
}