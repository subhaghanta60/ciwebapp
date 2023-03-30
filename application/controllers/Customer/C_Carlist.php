<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Carlist extends CI_Controller {

    public function AvalableCarlist()
    {
     
      $this->load->model('C_Register');
      $data['AvalableCarlist']= $this->C_Register->getallAvailablecardetails();
     
      
      $this->load->view('Customer/available_carlist',$data);

    }

    public function logout(){
      $this->session->unset_userdata('customer_data');
      redirect(base_url().'Home');
        
      }

   
}

?>