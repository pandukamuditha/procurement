<?php
class Purchase extends CI_Controller{

	public function __construct(){
			parent::__construct();
			$this->load->model('PurchaseRequest_model');
	}
	public function index(){
		//Get department from db
		//$data['department']=$this->Department_model->getDepartments();

		$this->load->view('common/header');
		$this->load->view("purchase/pr_details");//pass with $data
		$this->load->view('common/footer');

	}
	public function prDetails(){

		$data=array(
			 		'dept_id'=>$this->input->post('dept_id'),
					'request_id'=>$this->input->post('request_id'),
					'dept_division'=>$this->input->post('dept_division'),
					'location'=>$this->input->post('location'),
					'purpose' => $this->input->post('purpose'),
		);

		$this->form_validation->set_rules('dept_id', 'Department', 'required');
		$this->form_validation->set_rules('request_id', 'Purchase Request ID', 'required');
		$this->form_validation->set_rules('dept_division', 'Division of the Department', 'required');
		$this->form_validation->set_rules('location', 'Division which fixed assets to be located', 'required');
		$this->form_validation->set_rules('purpose', 'Purpose', 'required');

		if ($this->form_validation->run() == FALSE){
				$this->load->view('common/header');
                $this->load->view('purchase/pr_details');
                $this->load->view('common/footer');
        }
        else{

              
              $this->PurchaseRequest_model->createPurchaseRequest($data);
              redirect('Purchase/assetsDetails');

		}
	}

	
	public function assetsDetails(){
		$this->load->view('common/header');
		$this->load->view("purchase/assets_details");
		$this->load->view('common/footer');
	}

	public function addAssets(){
		
		$data=array(
			 		'item_name' => $this->input->post('item_name'),
			 		'description' => $this->input->post('description'),
			 		'date_of_required' => $this->input->post('date_of_required'),
			 		'quantity' => $this->input->post('quantity'),
			 		'estimated_cost' => $this->input->post('estimated_cost'),
			);


			if($this->input->post('send')!=null){
				$this->form_validation->set_rules('item_name', 'Item Name', 'required');
				$this->form_validation->set_rules('description', 'Description', 'required');
				$this->form_validation->set_rules('date_of_required', 'Date of required', 'required');
				$this->form_validation->set_rules('quantity', 'Quantity', 'required');
				$this->form_validation->set_rules('estimated_cost', 'Estimated Cost', 'required');


				if ($this->form_validation->run() == FALSE){
                        $this->load->view('purchase/assets_details');
                }
                else{

                    $this->PurchaseRequest_model->addItem($data);
					redirect('Purchase/createPR');
				}
        	}
        	else if($this->input->post('save_as_draft')!=null){
				$this->PurchaseRequest_model->createPurchaseRequest($data);
				redirect('Purchase/saveDraft');
				//$this->load->view("purchase/saved_draft");
			}	
			else if($this->input->post('add_another')!=null){
				 $this->PurchaseRequest_model->addItem($data);
				 redirect('Purchase/assetsDetails');
			}

	}
	
	public function createPR(){

		$data['asset_details'] = $this->PurchaseRequest_model->viewPurchaseRequest();
		$data['dept_details'] = $this->PurchaseRequest_model->getDepts();
		$this->load->view('common/header');
		$this->load->view("purchase/pr_final",$data);
		$this->load->view('common/footer');
		
	}

	public function saveDraft(){
		$this->PurchaseRequest_model->saveAsDraft();
	}



	public function view_apprv(){

		
		$pr_id = $this->input->get('pr_id');
		$data['asset_details'] = $this->PurchaseRequest_model->viewPRfor_apprv($pr_id);
		$data['dept_details'] = $this->PurchaseRequest_model->getDepts();
		$this->load->view('common/header');
		$this->load->view("purchase/pr_final",$data);
		$this->load->view('common/footer');
		
	}


	
}
?>



