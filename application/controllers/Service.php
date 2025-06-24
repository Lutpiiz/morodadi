<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function index() {
        $this->load->view('header');
		$this->load->view('service');
		$this->load->view('footer');
    }

    public function proses() {
        $this->load->model('Mservice');

        $data = [
            'nama' => $this->input->post('nama'),
            'jenis_kendaraan' => $this->input->post('jenis_kendaraan'),
            'alamat' => $this->input->post('alamat'),
            'no_telepon' => $this->input->post('no_telepon'),
            'pilihan_servis' => $this->input->post('pilihan_servis'),
            'pesan_kendala' => $this->input->post('pesan_kendala')
        ];

        $this->db->insert('orderan', $data);

        redirect('lacak', 'refresh');
    }
}