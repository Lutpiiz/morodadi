<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

    public function index() {
        $this->load->view('header');
		$this->load->view('artikel');
		$this->load->view('footer');
    }
}