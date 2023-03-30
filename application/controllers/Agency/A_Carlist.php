<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_Carlist extends CI_Controller {

    public function Carlist()
    {
      $agencyid=$this->session->userdata('agencyid');
      $this->load->model('A_Register');
      $data['carlist']= $this->A_Register->getallcardetails($agencyid);
     
      
      $this->load->view('Agency/A_Carlist',$data);
    }

    public function listcar(){
        $this->load->view('Agency/listform');

    }

    public function listing(){
      $this->form_validation->set_rules('vehical_model','Car Model ', 'required');
      $this->form_validation->set_rules('vehical_number',' Car Number', 'required');
      $this->form_validation->set_rules('setting_capacity','Seating Capacity', 'required');
      $this->form_validation->set_rules('rent_per_day','Rent Per Day', 'required');
      $this->form_validation->set_rules('Booking_status','Booking Status', 'required');
      
      if($this->form_validation->run()){
        $this->load->model('A_Register');
        $formArray = $this->input->post(); 
        $agencyid=$this->session->userdata('agencyid');
        $formArray['agencyid']=$agencyid;
        $this->A_Register->insertCardata($formArray);
        $this->session->set_flashdata('msg', 'Car data Successfully Created');
        redirect(base_url().'Agency/A_Carlist/Carlist');
    }
    else { 
      
      $this->session->set_flashdata('msg','Please check all credensitial');      
      $this->load->view('Agency/listform');
    } 

      }
      public function editview($vehicalid){
        $this->load->model('A_Register');
        $car=$this->A_Register->getcar($vehicalid);

        

       

        $this->load->view('Agency/edit',['car'=>$car]);

      }

      public function edit($vehicalid){
        $this->load->model('A_Register');
        $cardata = $this->A_Register->getcar($vehicalid);
        
        $carlist =array();
        $carlist['CarData'] = $cardata; 
       
        $this->form_validation->set_rules('vehical_model','Car Model ', 'required');
        $this->form_validation->set_rules('vehical_number',' Car Number', 'required');
        $this->form_validation->set_rules('setting_capacity','Seating Capacity', 'required');
        $this->form_validation->set_rules('rent_per_day','Rent Per Day', 'required');
        $this->form_validation->set_rules('Booking_status','Booking Status', 'required');
    
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
         
  

        if ($this->form_validation->run() == false){
          echo "Suba";
          exit;
          $this->load->view('Agency/A_Carlist', $carlist);
        }
        else {
         $agencyid=$this->session->userdata('agencyid');
          $formArray = array();
          $formArray['vehicalid'] =$vehicalid;
          $formArray['vehical_model'] = $this->input->post('vehical_model');
          $formArray['vehical_number'] = $this->input->post('vehical_number');
          $formArray['setting_capacity'] = $this->input->post('setting_capacity');
          $formArray['rent_per_day'] = $this->input->post('rent_per_day');
          $formArray['Booking_status'] = $this->input->post('Booking_status');
          $formArray['agencyid']=$agencyid;
  
  
    
  
          $this->A_Register->update($vehicalid, $formArray);
          $this->session->set_flashdata('success', 'Employee Details Updated Successfully');
          redirect(base_url().'Agency/A_Carlist/carlist');
        }
      
      }

      public function delete($vehicalid){
      $this->load->model('A_Register');

      $car=$this->A_Register->getcar($vehicalid);
      if(empty($car)){
        $this->session->set_flashdata('msg', 'Car Details not found in database ');
        redirect(base_url().'Agency/A_Carlist/carlist');

      }
      $this->A_Register->delete($vehicalid);
      $this->session->set_flashdata('success', 'Employee Details deleted successfully');
      redirect(base_url().'Agency/A_Carlist/carlist');
        
      }

      public function logout(){
      $this->session->unset_userdata('agencyid');
      redirect(base_url().'Home');
        
      }
  
      public function viewBooking(){
        $agencyid=$this->session->userdata('agencyid');
      $this->load->model('A_Register');
      $data['carlist']= $this->A_Register->getbookingcardetails($agencyid);
     
   
      $this->load->view('Agency/viewbooking',$data);

      }

    
}

?>