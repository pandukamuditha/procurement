<?php


class Procurements extends CI_Controller {
 
public function __construct(){
			parent::__construct();

			if(!isset($this->session->userdata['logged_in'])){
				redirect('auth');
			}
	}
	public function index()
	{

		$this->load->view('common/header');

		$this->load->model('Procurements_model');
		$data['proc_details'] = $this->Procurements_model->Proc_history();

		$this->load->view('proc_history',$data);
		$this->load->view('common/footer');

	}

	public function test()
	{
	$this->load->view('common/header');
	$this->load->view('test');
	$this->load->view('common/footer');

	}
	


}

























?>