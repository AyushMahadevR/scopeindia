<?php
  class Appointment_model extends CI_Model {
    public function __construct(){
      $this->load->database();
    }
    public function getlists(){
      $this->db->select('*');
      $this->db->from('pis_appointment');
      $this->db->join('pis_doctor','pis_doctor.id = pis_appointment.doctor_id');
	  $this->db->join('pis_patient','pis_patient.pid = pis_appointment.patient_id'); 
      $query = $this->db->get();
      return $query->result();
    }
    public function add($data){
      if($query = $this->db->insert('pis_appointment',$data)){
  			return true;
  		} else {
  			return false;
  		}
    }
	public function view($slug){
		$this->db->select('*');
      $this->db->from('pis_appointment');
	  $this->db->where('aid',$slug);
      $this->db->join('pis_doctor','pis_doctor.id = pis_appointment.doctor_id');
	  $this->db->join('pis_patient','pis_patient.pid = pis_appointment.patient_id'); 
      $query = $this->db->get();
		return $query->row();
	}
	public function update($slug,$data){
		$this->db->where('aid',$slug);
		$query = $this->db->update('pis_appointment',$data);
		if($query){
			return true;
		} else {
			return false;
		}
	}
	public function currentapp($slug){
		$this->db->select('*');
      $this->db->from('pis_appointment');
      $this->db->join('pis_doctor','pis_doctor.id = pis_appointment.doctor_id');
	  $this->db->join('pis_patient','pis_patient.pid = pis_appointment.patient_id'); 
	  $this->db->where('aid',$slug);
      $query = $this->db->get();
	  return $query->row_array();
	}
	public function getpatient(){
		$query = $this->db->get('pis_patient');
		return $query->result_array();
	}
	public function delete($slug){
		$this->db->where('aid',$slug);
		$query = $this->db->delete('pis_appointment');
	}
    public function getdoctors(){
      $query = $this->db->get('pis_doctor');
      return $query->result_array();
    }
    public function getmedicines(){
      $query = $this->db->get('pis_medicine');
      return $query->result_array();
    }
    public function gettests(){
      $query = $this->db->get('pis_test');
      return $query->result_array();
    }
  }
