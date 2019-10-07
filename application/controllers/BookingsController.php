<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingsController extends CI_Controller {
	public function index() {
		$rooms_rs = $this->db->get("accommodation");

		$list = array();
		$month = 10;
		$year = 2019;

		for($d=1; $d<=31; $d++) {
		    $time = mktime(12, 0, 0, $month, $d, $year);          
		    if (date('m', $time) == $month)       
		        $list[] = date('d-M-Y-D', $time);
		}

		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Bookings/calendar', array('rooms' => $rooms_rs, 'dates' => $list));
		$this->load->view('Admin/footer');
	}

	public function book_view() {
		$this->load->helper('form');

		$rooms_rs = $this->db->get("accommodation");

		$this->load->view('Admin/header');
		$this->load->view('Admin/template-parts/left-navbar');
		$this->load->view('Admin/template-parts/header-navbar');
		$this->load->view('Admin/Bookings/book-now', array('rooms' => $rooms_rs));
		$this->load->view('Admin/footer');
	}

	public function book_room() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('txtCheckIn', 'Check In Date', 'required',
			array('required' => 'Shoot!!! You need to select a Check In Date')
		);
		$this->form_validation->set_rules('txtCheckOut', 'Check Out Date', 'required',
			array('required' => 'Sadly, we need to farewell our guest')
		);
		$this->form_validation->set_rules('cmbAdults', 'Adults', 'less_than[9]');
		$this->form_validation->set_rules('cmbChilds', 'Childs', 'required');

		if ($this->form_validation->run() != FALSE) {
			$type_id = $this->input->post('cmbRoom');
			$rooms_rs = $this->db->get_where("accommodation", array('id' => $type_id));
			$res = $rooms_rs->row();
			$result_rs = $this->db->get_where("rooms", array('type_id' => $type_id));

			// echo "<pre>";
			// print_r($res);
			// echo "</pre>";
			// die();

			$this->load->view('Admin/header');
			$this->load->view('Admin/template-parts/left-navbar');
			$this->load->view('Admin/template-parts/header-navbar');
			$this->load->view('Admin/Bookings/book-now', array('rooms' => $res, 'result_rs' => $result_rs));
			$this->load->view('Admin/footer');
		}
	}
}