<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public function index() {
		$this->load->view('admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}
}