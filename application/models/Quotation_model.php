<?php
/**
 *
 */
class Quotation_model extends CI_Model
{


 public function get_pr_id() {
      // $this->db->select('purchase_request_details');
      $query = $this->db->query('SELECT pr_id FROM purchase_request_details');
      return $query->result_array();

  }





  public function insertData1()
  {
    $data1 = array(
      'q_id' => $this->input->post('quotation_name'),
      'due_date' => $this->input->post('date'),
      'timestamp' => $this->input->post('time'),
    );
    $this->db->insert('quotation',$data1);
  }
 
  
  public function insertData2()

  {
    $data2  = array(
      'bidder_name' => $this->input->post('nob1') ,
      'quantity' => $this->input->post('quantity1'),
      'u_price_without_vat' => $this->input->post('upwv1'),
      'total_price' => $this->input->post('tawv1'),
      'brand' => $this->input->post('brand1'),

    );
    $this->db->insert('bidder',$data2);

  }

  public function insertData3()
  {
    $data3  = array(
      'bidder_name' => $this->input->post('nob2') ,
      'quantity' => $this->input->post('quantity2'),
      'u_price_without_vat' => $this->input->post('upwv2'),
      'total_price' => $this->input->post('tawv2'),
      'brand' => $this->input->post('brand2'),

    );
    $this->db->insert('bidder',$data3);

  }

  public function insertData4()
  {
    $data4  = array(
      'bidder_name' => $this->input->post('nob3') ,
      'quantity' => $this->input->post('quantity3'),
      'u_price_without_vat' => $this->input->post('upwv3'),
      'total_price' => $this->input->post('tawv3'),
      'brand' => $this->input->post('brand3'),
      
    );
    $this->db->insert('bidder',$data4);

  }


}


?>
