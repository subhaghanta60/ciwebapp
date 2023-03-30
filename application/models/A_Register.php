<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_Register extends CI_Model {

    public function CreateAgencydata($formArray)
    {
        $this->db->insert('agency_data', $formArray);
      
    }

    public function insertCardata($formArray){
        $this->db->insert('agency_car_data', $formArray);
    }
    public function getallcardetails($agencyid){
        
        $this->db->where('agencyid',$agencyid);
        return $carlist=$this->db->get('Agency_car_data')->result();

    }
    public function isvalidate($username, $password){
    
  

       $q= $this->db->where(['username'=>$username, 'password'=>$password])
                    ->get('agency_data');

        

        if($q->num_rows()){
          
            return $q->row()->agencyid;
        }
        else {
            return false;
        }
    }
    public function update($vahicleid, $formArray){
        $this->db->where('vehicalid', $vahicleid);
        $this->db->update('Agency_car_data', $formArray);
    }
    public function getcar($vehicleid){
        $this->db->where('vehicalid',$vehicleid);
        return $car=$this->db->get('agency_car_data')->row_array();
    }

    public function delete($vehicleid){
        $this->db->where('vehicalid', $vehicleid);
        $this->db->delete('Agency_Car_data');
    }

    
}

?>