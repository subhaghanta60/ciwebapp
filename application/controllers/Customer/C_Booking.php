<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Booking extends CI_Controller {

    public function booking($vehicalid)
    {
      
      $this->load->model('A_Register');
        $car=$this->A_Register->getcar($vehicalid);
      $this->load->view('Customer/Booking',['car'=>$car]);
    }

    public function booking_register($vehicalid){
      $this->form_validation->set_rules('vehical_model','Car Model ', 'required');
      $this->form_validation->set_rules('vehical_number','Car Number','required');
      $this->form_validation->set_rules('booking_date',' booking_date', 'required');
      $this->form_validation->set_rules('day','day', 'required');
      
      if($this->form_validation->run()){
      
        $this->load->model('A_Register');
        $car=$this->A_Register->getcar($vehicalid);

        $customerid=$this->session->userdata('customerid');
        
          $formArray = array();
          $formArray['vehicalid'] =$vehicalid;
          $formArray['vehical_model'] = $car['vehical_model'];
          $formArray['vehical_number'] = $car['vehical_number'];
          $formArray['setting_capacity'] = $car['setting_capacity'];
          $formArray['rent_per_day'] = $car['rent_per_day'];
          $formArray['Booking_status'] = 2;
          $formArray['agencyid']=$car['agencyid'];
          $this->A_Register->update($vehicalid, $formArray);
          $this->session->set_flashdata('success', 'Employee Details Updated Successfully');

          $this->load->model('C_Register');
          $iarray =array();
          $iarray =$this->input->post();
          $iarray['agencyid']=$car['agencyid'];
          $iarray['customerid']=$customerid;
          $iarray['vehicalid']=$car['vehicalid'];


          $this->C_Register->insertBooking($iarray);





          redirect(base_url().'Customer/C_Carlist/AvalableCarlist');


      }

     




      

    }
}

?>