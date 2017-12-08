<?php
/**
 *
 */
class Model_quotation extends CI_Model
{

  public function insertData1()
  {
    $data1  = array(
      'quotation_name' => $this->input->post('quotation_name'),
      'date' => $this->input->post('date'),
      'time' => $this->input->post('time'),
      'bidder_name' => $this->input->post('nob1') ,
      'quantity' => $this->input->post('quantity1'),
      'u_price_without_vat' => $this->input->post('upwv1'),
      'total_price' => $this->input->post('tawv1'),
      'brand' => $this->input->post('brand1'),
    );
    $this->db->insert('quotation_open',$data1);

  }

  public function insertData2()
  {
    $data2  = array(
      'quotation_name' => $this->input->post('quotation_name'),
      'date' => $this->input->post('date'),
      'time' => $this->input->post('time'),
      'bidder_name' => $this->input->post('nob2') ,
      'quantity' => $this->input->post('quantity2'),
      'u_price_without_vat' => $this->input->post('upwv2'),
      'total_price' => $this->input->post('tawv2'),
      'brand' => $this->input->post('brand2'),
    );
    $this->db->insert('quotation_open',$data2);

  }

  public function insertData3()
  {
    $data3  = array(
      'quotation_name' => $this->input->post('quotation_name'),
      'date' => $this->input->post('date'),
      'time' => $this->input->post('time'),
      'bidder_name' => $this->input->post('nob3') ,
      'quantity' => $this->input->post('quantity3'),
      'u_price_without_vat' => $this->input->post('upwv3'),
      'total_price' => $this->input->post('tawv3'),
      'brand' => $this->input->post('brand3'),
    );
    $this->db->insert('quotation_open',$data3);
    
  }
}


?>
