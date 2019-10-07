<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
	public function index() {
		$this->load->helper('form');
		$this->load->view('admin/login');
	}

	public function check() {
		$email = $this->input->post('txtEmail');
		$pass = $this->input->post('txtPass');
		
		$user_rs = $this->db->query("select u.id, u.name, ur.name as role
			from users u, user_role ur
			where u.email = '$email' and u.password = '$pass' and u.role_id = ur.id");

		$user = $user_rs->row_array();

		if($user) {			
			$this->session->set_userdata(array('user'=> $user));
			redirect('/admin/dashboard');
		} else {
			$this->session->set_flashdata('msg', 'ID or Password is invalid!!!');
			redirect('/admin');
		}
	}

	public function logout() {
		// http://localhost/codeigniter/hms/admin
		$this->session->sess_destroy();
		redirect('/admin');
	}
}