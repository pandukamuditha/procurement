<?php


class Dashboard_main extends CI_Controller {
 

	public function index()
	{


		$this->load->view('common/header');
		$user_role = $this->get_user_role();
		

		$this->load->model('Notifications');
		$data_notif['pr_alert'] = $this->Notifications->director_alert($user_role);  //alert notification right side



		$data_procs['latest_procs'] = $this->Notifications->dashboard_alert();  //main table notifications 
		$data = $data_notif + $data_procs ;
		$this->load->view('dashboard/dashboard',$data);
		$this->load->view('common/footer');

	}

	public function get_user_role()
	{
		//$user_name = $this->session->user_data['user_name'];
		$user_name = 'ishara';
		$this->load->model('Notifications');
		$user_role = $this->Notifications->get_role($user_name);
		return ($user_role);


	}


	//testing controller, not system functionalities
	public function test(){  

		echo 'hey';
		

	}

}

























?>