<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Register extends CI_Model {

    public function CreateCustomerdata($formArray)
    {
        $this->db->insert('customer_data', $formArray);
      
    }
    public function getallAvailablecardetails(){
        $this->db->where('Booking_status',1);
        return $AvalableCarlist=$this->db->get('Agency_car_data')->result();
    }

    public function isvalidate($username, $password){
    
  

        $q= $this->db->where(['username'=>$username, 'password'=>$password])
                     ->get('customer_data');
 
         
 
         if($q->num_rows()){
           
             return $q->row()->customerid;
         }
         else {
             return false;
         }
     }

     public function update($vehicalid,$status){
        $this->db->where('vehicalid', $vahicleid);
        $this->db->update('Agency_car_data', );

     }
     public function insertBooking($iarray){
        $this->db->insert('booking_details', $iarray);
     }


}

?>