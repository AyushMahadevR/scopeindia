<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class Appointment extends CI_Controller {
    public function index(){
      if(!$this->session->userdata('logged_in')){
        redirect('');
      } else {
        //get appointment data
        $data['appointments'] = $this->appointment_model->getlists();
       // print_r($data['patients']);

        //display appointments
        $this->load->view('templates/header');
        $this->load->view('appointment/index',$data);
        $this->load->view('templates/footer');
      }
    }
    public function add(){
    		if(!$this->session->userdata('logged_in')){
            redirect('');
          } else {
    		//set form rules
    		$this->form_validation->set_rules('patient_id','Patient Name','required');
    		$this->form_validation->set_rules('doctor_id','Doctor Name','required');
    		$this->form_validation->set_rules('time','Appointment Time','required');
    
        //get patient list 
		$data['patients'] = $this->appointment_model->getpatient();
		
		//get doctors list
        $data['doctors'] = $this->patient_model->getdoctors();
		
        
       
    		//if not submitted then show the page
    		if($this->form_validation->run() == FALSE){
    		$this->load->view('templates/header');
    		$this->load->view('appointment/add',$data);
    		$this->load->view('templates/footer');
    		} else {
    		  
    			//send in the data to model for insert
    			$data = array(
    				'patient_id' 			=> $this->input->post('patient_id'),
    				'doctor_id' 		=> $this->input->post('doctor_id'),
    				'time'        => $this->input->post('time')
    			);
    			$add = $this->appointment_model->add($data);
    			if($add == FALSE){
            $this->session->set_flashdata('apadd_fail','Failed to Add New Appointment');
    				redirect('index.php/appointment/index');
    			}else {
            $this->session->set_flashdata('apadd_success','Successfully Added New Appointment');
    				redirect('index.php/appointment/index');
    			}
    		}
      }
    }
	public function view($slug){
		if(!$this->session->userdata('logged_in')){
        redirect('');
      } else { 	//custom multiexplode function 
	  
	  //get specific patient data
		$data['details'] = $this->appointment_model->view($slug);
		$data['slug'] = $slug ;
		// show the patient data
		$this->load->view('templates/header');
		$this->load->view('appointment/view',$data);
		$this->load->view('templates/footer');
	  }
	}
	public function edit($slug){
		if(!$this->session->userdata('logged_in')){
        redirect('');
      } else { 	
		//set form rules
    		$this->form_validation->set_rules('patient_id','Patient Name','required');
    		$this->form_validation->set_rules('doctor_id','Doctor Name','required');
    		$this->form_validation->set_rules('time','Appointment Time','required');
		//if not submitted then show the page 
			if($this->form_validation->run() == FALSE){
			   //get patient list 
		$data['patients'] = $this->appointment_model->getpatient();
		$data['details'] = $this->appointment_model->currentapp($slug);
		$data['slug'] = $slug;
		//get doctors list
        $data['doctors'] = $this->patient_model->getdoctors();
		
				// show the doctor data
				$this->load->view('templates/header');
				$this->load->view('appointment/edit',$data);
				$this->load->view('templates/footer');
			} else {
			//get new userdata
			$data = array(
				'patient_id' 			=> $this->input->post('patient_id'),
				'doctor_id' 		=> $this->input->post('doctor_id'),
				'time' => $this->input->post('time')
				
			);
			$update = $this->appointment_model->update($slug,$data);
			if($update){
				redirect('index.php/appointment/index');
			} else {
				redirect('index.php/appointment/index');
			}
		  }
		}
	  }
	  //delete doctor 
	  public function delete($slug){
		  $delete = $this->appointment_model->delete($slug);
		  redirect('index.php/appointment/index');
	  }
  }
