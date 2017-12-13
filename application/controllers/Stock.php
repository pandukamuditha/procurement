<?php


class Stock extends CI_Controller {
 
   public function index()
        {		   


        	$this->load->view('common/header');
            $this->load->model('Notifications');
			$data_procs['latest_procs'] = $this->Notifications->Stock_dashboard_alert();
			$data_stock = $data_procs;
  			$this->load->view('Stock/dashboard',$data_stock);
            $this->load->view('common/footer');
                
        }


public function newGRN()
        {		   


        	$this->load->view('common/header');
  			$this->load->view('Stock/form');
            $this->load->view('common/footer');
                
        }




public function stockDetail(){

		$data=array(
			 		'order_id'=>$this->input->post('order_id'),
					'date'=>$this->input->post('date'),
					'invoice'=>$this->input->post('invoice'),
					'status'=>$this->input->post('status'),
					'Confirmed_by' => $this->input->post('Confirmed_by'),
					'Comments' => $this->input->post('Comments'),
		);

		$this->form_validation->set_rules('order_id', 'Purchase order ID', 'required');
		$this->form_validation->set_rules('date', 'date', 'required');
		$this->form_validation->set_rules('invoice', 'invoice no', 'required');
		$this->form_validation->set_rules('status', 'condition', 'required');
		$this->form_validation->set_rules('Confirmed_by', 'Comfirmed persn', 'required');
		$this->form_validation->set_rules('Comments', 'comment', 'required');

		if ($this->form_validation->run() == FALSE){
			echo "string";
				$this->load->view('common/header');
                $this->load->view('stock/index');
                $this->load->view('common/footer');
        }
        else{

              $this->load->model('stockKeeper_model');
              $this->stockKeeper_model->insertStock($data);
              echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
              redirect('Stock');

		}
	}


	

}






















?>