<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoomsController extends CI_Controller {

	public function index() {
		$this->load->helper('form');
		$rooms_rs = $this->db->get("accommodation");

		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Rooms/all', array('rooms' => $rooms_rs));
		$this->load->view('Admin/footer');
	}

	public function create_accommodation() {
		$this->load->helper('form');

		$beds_rs = $this->db->get('bed_type');

		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Rooms/create_accommodation', array('beds' => $beds_rs));
		$this->load->view('Admin/footer');
	}
	
	public function create_room() {
		$this->load->helper('form');

		$type_rs = $this->db->get('accommodation');

		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Rooms/create_room', array('types' => $type_rs));
		$this->load->view('Admin/footer');
	}

	public function save_room() {
		$start = $this->input->post('txtStart');
		$end = $this->input->post('txtEnd');
		$type = $this->input->post('cmbRoomType');
		$desc = $this->input->post('txtareaDesc');

		while($start <= $end) {
			$arr = array(
				'name' => $start,
				'comments' => $desc,
				'type_id' => $type
			);

			$this->db->insert('rooms', $arr);

			$start++;
		}

		redirect('admin/rooms/all');
	}

	public function save() {
		$name = $this->input->post('txtName');
		$rent = $this->input->post('numRent');
		$desc = $this->input->post('txtareaDesc');
		$adult = $this->input->post('numAdults');
		$child = $this->input->post('numChilds');
		$size = $this->input->post('numSize');
		$bed_type = $this->input->post('cmbBed');

		$arr = array(
			'name' => $name,
			'rent' => $rent,
			'description' => $desc,
			'adult' => $adult,
			'child' => $child,
			'size' => $size,
			'bed_type_id' => $bed_type
		);

		$this->db->insert('accommodation', $arr);
		redirect('admin/rooms');
	}

	public function show_all_rooms() {
		$rooms_rs = $this->db->get('rooms');

		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Rooms/all_rooms', array('rooms' => $rooms_rs));
		$this->load->view('Admin/footer');
	}

	public function details() {
		$this->load->helper('form');

		$id = $this->input->post('hdnId');

		// $room_rs = $this->db->get_where("accommodation", array('id' => $id));
		$room = $this->db->get_where("accommodation", array('id' => $id))->row_array();
		$bed = $this->db->get('bed_type');

		// echo "<pre>";
		// print_r($bed);
		// echo "</pre>";
		// die();

		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Rooms/details', array('room' => $room, 'bed' => $bed));
		$this->load->view('Admin/footer');
	}

	public function edit() {
		$this->load->helper('form');
		$beds_rs = $this->db->get('bed_type');

		$id = $this->input->post('hdnId');

		// $room_rs = $this->db->get_where("accommodation", array('id' => $id));
		$room = $this->db->get_where("accommodation", array('id' => $id))->row_array();

		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Rooms/edit', array('room' => $room, 'beds' => $beds_rs));
		$this->load->view('Admin/footer');
	}

	public function update() {
		$id = $this->input->post('hdnId');
		$name = $this->input->post('txtName');
		$desc = $this->input->post('txtareaDesc');
		$adult = $this->input->post('numAdults');
		$child = $this->input->post('numChilds');
		$size = $this->input->post('numSize');
		$bed_type = $this->input->post('cmbBed');

		$arr = array(
			'name' => $name,
			'description' => $desc,
			'adult' => $adult,
			'child' => $child,
			'size' => $size,
			'bed_type_id' => $bed_type
		);
		
		$this->db->where('id', $id)->update('accommodation', $arr);
		redirect('admin/rooms');
	}

	public function delete() {
		$id = $this->input->post('hdnId');
		$this->db->delete('accommodation', array('id' => $id));
		redirect('admin/rooms');
	}
}