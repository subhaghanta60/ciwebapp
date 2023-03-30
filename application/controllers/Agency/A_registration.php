<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_registration extends CI_Controller {

    public function registration()
    {
      $this->load->view('Agency/Register');
    }

    public function  createdata(){
      $this->load->model('A_Register');

     


      $this->form_validation->set_rules('username','Username ', 'required');
      $this->form_validation->set_rules('name',' Name', 'required');
      $this->form_validation->set_rules('phone','Phone Number', 'required|exact_length[10]|numeric');
      $this->form_validation->set_rules('password','password', 'required');
      // $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
      
      
   
      
  
   if($this->form_validation->run()){
    
      $formArray = $this->input->post(); 
      $this->A_Register->CreateAgencydata($formArray);
      $this->session->set_flashdata('msg', 'Agancy data Successfully Created');
      $this->session->unset_userdata('agencyid');
      redirect(base_url().'Agency/A_login/login');
    }
    else { 
      $this->session->set_flashdata('msg','Please check all credensitial');      
      $this->load->view('Agency/Register');
    }

    }

    
}

?>