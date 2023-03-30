<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_login extends CI_Controller {

    public function login()
    {
      $this->load->view('Agency/login');
    }

    public function login_agency(){
      $this->load->model('A_Register');
      
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');
      // $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        
        
      

      if($this->form_validation->run()){
        
       
        $uname=$this->input->post('username');
        $pass=$this->input->post('password');
        
       
        
        $agencyid = $this->A_Register->isvalidate($uname,$pass);
        
       
        if($agencyid){
          $this->session->set_userdata('agencyid', $agencyid);
          return redirect('Agency/A_Carlist/carlist');
        }
        else {
          $this->session->set_flashdata('msg',"Invalid Username/password");
          return redirect("Agency/A_login/login");
        }

      }
      else {
         echo "Failed";
         exit;
        $this->session->set_flashdata('msg',"Check all Credential");
        return redirect("Agency/A_login/login");
      }
    }
}

?>