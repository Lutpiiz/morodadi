<?php
class Mlacak extends CI_Model {

    public function get_by_kode($kode) {
        return $this->db->get_where('orderan', ['no_telepon' => $kode])->row_array();
    }
}
