<?php


class TEC extends CI_Controller {
 	public function __construct(){
			parent::__construct();

			if(!isset($this->session->userdata['logged_in'])){
				redirect('auth');
			}
	}

	public function index(){
		
		
	}
	

	//testing controller, not system functionalities
		public function tec_review(){  

		$rr = $this->input->get('pr_id');
		

		//echo ' got it! =====>>>'.$rr;
		$data['$pr_id'] = array('pr_id' => 17);
		$this->load->view('common/header');
		$this->load->view('TEC/TEC_confirm_form',$data);
		$this->load->view('common/footer');
		
	
	}

	public function submit_review(){

			$data=array(
			 		'pr_id'=>$this->input->post('pr_id'),
					'eval_by'=>$this->input->post('eval_by'),
					//'auth_by'=>$this->input->post('auth_by'),
					'comments'=>$this->input->post('comments'),
					'rating'=>$this->input->post('rating'),
					);

					var_dump($data);
					$this->form_validation->set_rules('pr_id', 'Purchase Request ID', 'required');
					$this->form_validation->set_rules('eval_by', 'Evaluated Person', 'required');
					//$this->form_validation->set_rules('auth_by', 'invoice no', 'required');
					$this->form_validation->set_rules('comments', 'condition', 'required');
					$this->form_validation->set_rules('decision', 'Comfirmed persn', 'required');

					if ($this->form_validation->run() == FALSE){
						echo "Not successfully";
							$this->load->view('common/header');
			                $this->load->view('TEC/TEC_confirm_form');
			                $this->load->view('common/footer');
			        }
			        else{
			        	
			              $this->load->model('TEC_model');
			              $this->TEC_model->submit_rw($data);

			              //echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
			              redirect('Stock');
					
						}


	}



}

























?>