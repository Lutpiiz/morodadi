<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

    public function index() {
        $this->load->view('header');
		$this->load->view('tentang');
		$this->load->view('footer');
    }
}