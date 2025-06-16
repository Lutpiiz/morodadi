<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class service extends CI_Controller {

    public function index() {
        $this->load->view('header');
		$this->load->view('service');
		$this->load->view('footer');
    }
}