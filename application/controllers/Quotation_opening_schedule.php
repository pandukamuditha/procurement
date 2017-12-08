<?php

class Quotation_opening_schedule extends CI_Controller {
  // private $permissions = $this->session->user_data['logged_in']['permissions'];

  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('form');
    //
    // $create_quotation_opening = array('index');
    //
    // if(in_array($this->router->method, $create_quotation_opening)){
    //   if(!$permissions['A']){
    //     redirect('Auth','refresh');
    //   }
    // }
  }

  public function index() {
    $this->load->view('quotation_opening_form');
    echo $this->session->user_data;
    echo "Hello";
  }

  public function beginQuotation()
  {
    //form validation
    $this->load->library('form_validation');

    $this->form_validation->set_rules('quotation_name', 'Quotation Name', 'required');

    $this->form_validation->set_rules('nob1', 'Number of bids missing 1st row 2nd cell', 'required');
    $this->form_validation->set_rules('quantity1', 'quantity missing 1st row 3rd cell', 'required');
    $this->form_validation->set_rules('upwv1', 'unit price missing 1st row 4th cell', 'required');
    $this->form_validation->set_rules('tawv1', 'unit price missing 1st row 5th cell', 'required');
    $this->form_validation->set_rules('brand1', 'unit price missing 1st row 6th cell', 'required');


    $this->form_validation->set_rules('nob2', 'Number of bids missing 2nd row 2nd cell', 'required');
    $this->form_validation->set_rules('quantity2', 'quantity missing 2nd row 3rd cell', 'required');
    $this->form_validation->set_rules('upwv2', 'unit price missing 2nd row 4th cell', 'required');
    $this->form_validation->set_rules('tawv2', 'unit price missing 2nd row 5th cell', 'required');
    $this->form_validation->set_rules('brand2', 'unit price missing 2nd row 6th cell', 'required');

    $this->form_validation->set_rules('nob3', 'Number of bids missing 3rd row 2nd cell', 'required');
    $this->form_validation->set_rules('quantity3', 'quantity missing 3rd row 3rd cell', 'required');
    $this->form_validation->set_rules('upwv3', 'unit price missing 3rd row 4th cell', 'required');
    $this->form_validation->set_rules('tawv3', 'unit price missing 3rd row 5th cell', 'required');
    $this->form_validation->set_rules('brand3', 'unit price missing 3rd row 6th cell', 'required');

    if ($this->form_validation->run() == FALSE)
      {
        $this->load->view('Quotation_open_schedule');
      }
    else
      {
        $this->load->model('Model_quotation');
        $this->Model_quotation->insertData1();
        $this->Model_quotation->insertData2();
        $this->Model_quotation->insertData3();
      }




  }
}

?>
