<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotation extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('Quotation_model_letter');
	}

	public function index()
	{
		
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('common/header');
	}


	public function newQuotation()
	{
		$this->index();
		$this->load->view('Quotation/new_quotation');
		//$this->load->view('Quotation/quotation_calling_letter');
		$this->load->view('common/footer');
	}


	public function createQuotationCallingLetter()
	{
		$data['quotation_details']=$this->Quotation_model_letter->getQuotationData();
		$this->index();
		$this->load->view('Quotation/quotation_calling_letter',$data);
		$this->load->view('common/footer');
	}

	public function editQuotation()
	{
		$data['quotation_details']=$this->Quotation_model_letter->getQuotationData();
		$this->index();
		$this->load->view('Quotation/edit_quotation',$data);
		$this->load->view('common/footer');
	}

	public function insertQuotation()
	{	

		$data=array(
			'request_id'=>$this->input->post('requestid'),
			'invitation_no'=>$this->input->post('invitationno'),
			'supplier_name'=>$this->input->post('suppliername'),
			'supplier_address'=>$this->input->post('supplieraddress'),
			'item_name'=>$this->input->post('itemname'),
			'quantity'=>$this->input->post('quantity'),
			'due_date'=>$this->input->post('date'),
			);


		$this->load->library('form_validation');
		$this->form_validation->set_rules("requestid", "Request ID", 'required');
		$this->form_validation->set_rules("invitationno", "Invitation No", 'required');
		$this->form_validation->set_rules("suppliername", "Supplier Name", 'required');
		$this->form_validation->set_rules("supplieraddress", "Supplier Address", 'required');
		$this->form_validation->set_rules("itemname", "Item Name", 'required');
		$this->form_validation->set_rules("quantity", "Quantity", 'required|numeric');
		$this->form_validation->set_rules("date", "Due Date", 'required');

		if ($this->form_validation->run())  
		{
			//validation successful
			$this->Quotation_model_letter->insertQuotation($data);
			redirect('Quotation/createQuotationCallingLetter');

		}
		else
		{
			//validation fails
			$this->newQuotation();

		}
	}

	public function updateQuotation()
	{
		$data=array(
		'request_id'=>$this->input->post('requestid'),
		'invitation_no'=>$this->input->post('invitationno'),
		'supplier_name'=>$this->input->post('suppliername'),
		'supplier_address'=>$this->input->post('supplieraddress'),
		'item_name'=>$this->input->post('itemname'),
		'quantity'=>$this->input->post('quantity'),
		'due_date'=>$this->input->post('date'),
		);


		$this->load->library('form_validation');
		$this->form_validation->set_rules("requestid", "Request ID", 'required');
		$this->form_validation->set_rules("invitationno", "Invitation No", 'required');
		$this->form_validation->set_rules("suppliername", "Supplier Name", 'required');
		$this->form_validation->set_rules("supplieraddress", "Supplier Address", 'required');
		$this->form_validation->set_rules("itemname", "Item Name", 'required');
		$this->form_validation->set_rules("quantity", "Quantity", 'required|numeric');
		$this->form_validation->set_rules("date", "Due Date", 'required');

		if($this->form_validation->run())
		{
			//edit validation successfull
			$this->Quotation_model_letter->updateQuotation($data);
			redirect('Quotation/createQuotationCallingLetter');

		}
		else
		{
				//edit validation fails
		}

	}
}
