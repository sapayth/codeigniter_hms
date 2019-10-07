<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersController extends CI_Controller
{
	public function index() {
		$this->load->helper('form');
		$users_rs = $this->db->query("select u.id, u.name, u.email, ur.id as rid, ur.name as role
			from users u, user_role ur
			where u.role_id = ur.id");
		
		// foreach($users->result() as $user) {
		// 	echo "<pre>";
		// 	print_r($user);
		// 	echo "</pre>";
		// }
		
		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Users/all', array('users' => $users_rs));
		$this->load->view('Admin/footer');
	}

	public function create() {
		$this->load->helper('form');

		$role_rs = $this->db->get('user_role');

		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Users/create', array('roles' => $role_rs));
		$this->load->view('Admin/footer');
	}

	// public function manage() {
	// 	if(isset($_POST["btnUpdate"])) {
	// 		$this->update_user($user_id);
	// 	}

	// 	if(isset($_POST["btnDelete"])) {
	// 		$this->delete_user($user_id);
	// 	}		
	// }

	public function save_user() {
		$name = $this->input->post('txtName');
		$email = $this->input->post('txtEmail');
		$pass = $this->input->post('txtPass');
		$re_pass = $this->input->post('txtRePass');
		$role_id = $this->input->post('cmbRole');
		// echo "$name, $email, $pass, $re_pass, $role_id";

		$user_data = array(
			'name' => $name,
			'email' => $email,
			'password' => $pass,
			'role_id' => $role_id
		);

		$this->db->insert('users', $user_data);
		redirect('admin/users');
	}

	public function delete_user() {
		$user_id = $this->input->post('hdnId');
		$this->db->delete('users', array('id' => $user_id));
		redirect('admin/users');
	}

	public function update_user() {
		$user_id = $this->input->post('hdnId');

		$this->load->helper('form');

		$role_rs = $this->db->get('user_role');
		$user_rs = $this->db->get_where(
						'users',
						array('id' => $user_id)
					);
		$user = $user_rs->row();
		
		// foreach ($users_rs->result() as $user) {
	 	//	echo "<pre>";
		// 	print_r($user);
		// 	echo "</pre>";
		// }

		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Users/update', array('user' => $user, 'roles' => $role_rs));
		$this->load->view('Admin/footer');
	}

	public function update() {
		$id = $this->input->post('hdnId');
		$name = $this->input->post('txtName');
		$email = $this->input->post('txtEmail');
		$pass = $this->input->post('txtPass');
		$re_pass = $this->input->post('txtRePass');
		$role_id = $this->input->post('cmbRole');

		$user_data = array(
			'name' => $name,
			'email' => $email,
			'password' => $pass,
			'role_id' => $role_id
		);

		$this->db->update('users', $user_data, array('id' => $id));
		redirect('admin/users');
	}
}