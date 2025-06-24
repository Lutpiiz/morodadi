<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lacak extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mlacak');
    }

    public function index() {
        $data['order'] = null;

        if ($this->input->post('kode_service')) {
            $kode = $this->input->post('kode_service');
            $data['order'] = $this->Mlacak->get_by_kode($kode);
        }

        $this->load->view('header');
        $this->load->view('pelacakan', $data);
        $this->load->view('footer');
    }
}
