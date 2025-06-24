<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lacak extends CI_Controller {

    public function index() {
        $this->load->view('header');
		$this->load->view('pelacakan');
		$this->load->view('footer');
    }
}