<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_registration extends CI_Controller {

    public function registration()
    {
      $this->load->view('Customer/Register');
    }

    public function  createdata(){
     $this->load->model('C_Register');
    

      $this->form_validation->set_rules('username','Username ', 'required');
      $this->form_validation->set_rules('name',' Name', 'required');
      $this->form_validation->set_rules('phone','Phone Number', 'required|exact_length[10]|numeric');
      $this->form_validation->set_rules('password','Password', 'required');
      $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      
      
    
      
  
   if($this->form_validation->run() ){
      $formArray = $this->input->post(); 
      $this->C_Register->CreateCustomerdata($formArray);
      $this->session->set_flashdata('msg', 'Customer  Successfully registered');
      redirect(base_url().'Customer/C_login/login');
    }
    else { 
      $this->session->set_flashdata('msg_class','Please check all credensitial');      
      $this->load->view('Customer/C_Register');
    }

    }
}

?>