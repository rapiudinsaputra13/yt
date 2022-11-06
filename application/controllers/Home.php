<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Home';
		if ($this->agent->is_mobile()) {
			$this->load->view('layout/header', $data);
			$this->load->view('mobile/home');
			$this->load->view('layout/footer');
		} else {
			$this->load->view('layout/header', $data);
			$this->load->view('home');
			$this->load->view('layout/footer');
		}
	}

	public function home1()
	{
		$data['title'] = 'Home';
		if ($this->agent->is_mobile()) {
			$data['poster'] = $this->Dashboard_model->get_poster();
			$this->load->view('layout/header1', $data);
			$this->load->view('mobile/home2');
			$this->load->view('layout/footer');
		} else {
			$data['poster'] = $this->Dashboard_model->get_poster();
			$this->load->view('layout/header1', $data);
			$this->load->view('home1');
			$this->load->view('layout/footer');
		}
	}
}
