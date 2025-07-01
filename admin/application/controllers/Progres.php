<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Progres extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mprogres');
    }

    public function index() {
        $data['order'] = $this->Mprogres->index();
        
        $this->load->view('header');
		$this->load->view('progres', $data);
		$this->load->view('footer');
    }

    public function detail($id_order) {
        $data['order'] = $this->Mprogres->detail($id_order);
        
        $this->load->view('header');
		$this->load->view('detail_progres', $data);
		$this->load->view('footer');
    }
}