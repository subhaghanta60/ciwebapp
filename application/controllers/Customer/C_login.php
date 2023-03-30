<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function login()
    {
      $this->load->view('Customer/login');
    }

    public function login_customer(){
      $this->load->model('C_Register');
      
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');
      // $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        
        
      

      if($this->form_validation->run()){
        
       
        $uname=$this->input->post('username');
        $pass=$this->input->post('password');
        
       
        
        $customerid = $this->C_Register->isvalidate($uname,$pass);
        
       
        if($customerid){
          $this->session->set_userdata('customerid', $customerid);
          return redirect('Customer/C_Carlist/AvalableCarlist');
        }
        else {
          $this->session->set_flashdata('msg',"Invalid Username/password");
          return redirect("Customer/C_login/login");
        }

      }
      else {
         echo "Failed";
         exit;
        $this->session->set_flashdata('msg',"Check all Credential");
        return redirect("Customer/C_login/login");
      }
    }


}

?>