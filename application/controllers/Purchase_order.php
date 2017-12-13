<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_order extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Purchase_model');
	}

	public function index()
	{
		
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('common/header');
	}


	function purchaseOrder()
	{
		$this->index();
		$this->load->view('Purchase_order/purchase_order_details');
		$this->load->view('common/footer');
	}

	public function createPurchaseOrder()
	{
		$data['purchase_details'] = $this->Purchase_model->createPurchaseOrder1();
		$data['quotation_details'] = $this->Purchase_model->createPurchaseOrder2();
		$this->index();
		$this->load->view('Purchase_order/purchase_order',$data);
		$this->load->view('common/footer');
	}

	public function insertPurchaseOrder()
	{
		$data = array(
			'ref_no'=>$this->input->post('refno'),
			'quantity'=>$this->input->post('quantity'),
			'unit_price'=>$this->input->post('unitprice'),
			'vat_rate'=>$this->input->post('vatrate'),
			'date'=>$this->input->post('date'),
			);

			$this->load->library('form_validation');
			$this->form_validation->set_rules("refno", "Reference No", 'required');
			$this->form_validation->set_rules("quantity", "Quantity", 'required');
			$this->form_validation->set_rules("unitprice", "Unit Price", 'required');
			$this->form_validation->set_rules("vatrate", "Vat Rate", 'required');
			$this->form_validation->set_rules("date", "Date", 'required');

			if ($this->form_validation->run())   
			{
				//validation successful
				$this->Purchase_model->insertPurchaseOrderDetails($data);
				$this->Purchase_model->insertRest();
				redirect('Purchase_order/createPurchaseOrder');
				
			}
			else
			{
				$this->index();
				$this->load->view('purchase_order/purchase_order_details');
				$this->load->view('common/footer');

			}
		}

		public function editPurchaseOrder()
		{
			$data['purchase_details'] = $this->Purchase_model->createPurchaseOrder1();
			$this->index();
			$this->load->view('Purchase_order/editPurchaseOrder',$data);
			$this->load->view('common/footer');
		}

		public function updatePurchaseOrder()
		{
			$data = array(
			'ref_no'=>$this->input->post('refno'),
			'quantity'=>$this->input->post('quantity'),
			'unit_price'=>$this->input->post('unitprice'),
			'vat_rate'=>$this->input->post('vatrate'),
			'date'=>$this->input->post('date'),
			);

			$this->load->library('form_validation');
			$this->form_validation->set_rules("refno", "Reference No", 'required');
			$this->form_validation->set_rules("quantity", "Quantity", 'required');
			$this->form_validation->set_rules("unitprice", "Unit Price", 'required');
			$this->form_validation->set_rules("vatrate", "Vat Rate", 'required');
			$this->form_validation->set_rules("date", "Date", 'required');

			if ($this->form_validation->run())
			{
				//validation successful
				$this->Purchase_model->updatePurchaseOrder($data);
				redirect('Purchase_order/createPurchaseOrder');
			}
			else
			{
				//edit->vallidation fils
				$this->index();
				$this->load->view('Purchase_order/purchase_order_details');
				$this->load->view('common/footer');

			}
		}
}
