<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
			parent::__construct();

			if(!isset($this->session->userdata['logged_in'])){
				redirect('auth');
			}
	}

	public function index(){
    $session_data = $this->session->userdata['logged_in'];

    $role = $session_data['role'];
		$dept = $session_data['dept'];
		$name = $session_data['firstName']." ".$session_data['lastName'];

		$data = array(
			'role' => $role,
			'dept' => $dept,
			'name' => $name
		);

		$role_id = $role->role_id;
		$this->load->view('common/header',$data);

		/////////////- Loading Clerk Dashboard -///////////////
    if($role_id=='clerk'){
  		$this->load->view('dashboard/clerk_dashboard',$data);

    	}


    	/////////////- Head of the Department Dashboard -///////////////
    	elseif($role_id=='hod'){
    		$this->load->model('Notifications_model');
    		$data_notif['pr_alert'] = $this->Notifications_model->user_alert();
			$data_procs['latest_procs'] = $this->Notifications_model->dashboard_alert();
			$data_hod = $data_notif + $data_procs ;
  			$this->load->view('dashboard/dashboard',$data_hod);

   		}


   		/////////////- Loading Director Dashboard -///////////////

		elseif($role_id=='dir'){
			$this->load->model('Notifications_model');
    		$data_notif['pr_alert'] = $this->Notifications_model->user_alert();
			$data_procs['latest_procs'] = $this->Notifications_model->dashboard_alert();
			$data_dir = $data_notif + $data_procs ;
  			$this->load->view('dir/dir_dashboard',$data_dir);

		}


		/////////////- Deputy Bursar Dashboard -///////////////

		elseif($role_id=='depbur'){
			$this->load->view('dashboard/depbur_dashboard',$data);

		}

		/////////////- Senior Assistance Bursar Dashboard -///////////////
		elseif($role_id=='sab'){
			$this->load->model('Notifications_model');
    		$data_notif['pr_alert'] = $this->Notifications_model->user_alert();
			$data_procs['latest_procs'] = $this->Notifications_model->dashboard_alert();
			$data_sab = $data_notif + $data_procs ;
  			$this->load->view('SAB/SAB_dashboard',$data_sab);
		}

		/////////////- Technical Evaluation Comitttee Dashboard -///////////////
		elseif($role_id=='tec'){

			$this->load->model('Notifications_model');
    		//$data_notif['pr_alert'] = $this->Notifications_model->user_alert();
			$data_procs['latest_procs'] = $this->Notifications_model->dashboard_alert();
			$data_tec = $data_procs;
  			$this->load->view('TEC/TEC_dashboard',$data_tec);

		}

		/////////////- Stock Keeper Dashboard -///////////////
		elseif($role_id=='stock'){

			$this->load->model('Notifications_model');
			//$data_notif['pr_alert'] = $this->Notifications_model->user_alert();
			$data_procs['latest_procs'] = $this->Notifications_model->Stock_dashboard_alert();
			$data_stock = $data_procs;
  			$this->load->view('Stock/dashboard',$data_stock);

		}

		$this->load->view('common/footer');
	}
}

























?>
