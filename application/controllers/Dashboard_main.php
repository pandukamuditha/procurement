<?php


class Dashboard_main extends CI_Controller {
 

	public function index()
	{

		$this->load->view('common/header');
		$this->load->view('dashboard/dashboard');
		$this->load->view('common/footer');

	}




}

























?>