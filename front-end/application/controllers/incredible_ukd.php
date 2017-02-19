<?php

class Incredible_Ukd extends CI_Controller  {
	public function index()  {
		$this->load->view('incredible/home');
	}

	public function about() { 
		$this->load->view('incredible/about');
	}

	public function ukdDestinations()  {
		$this->load->model('incredible/ukd_model','ukd');
		$data['destinations'] = $this->ukd->getDestinations();
		$this->load->view('incredible/ukd_destinations',$data);
	}

	public function about_india()  {
		$this->load->model('incredible/india_model','india');
		$data['states']=$this->india->getStates();
		$this->load->view('incredible/india_states',$data);

	}

	public function ukd_destination_detail($destinationId) { 
		$this->load->model('incredible/ukd_details','details');
		
		$destination['detail'] = $this->details->getDetails($destinationId);
		$this->load->view('incredible/ukd_details',$destination);
	}

	public function state_details($stateId) { 
		$this->load->model('incredible/state_details','states');
		
		$state['detail'] = $this->states->getState($stateId);
		$this->load->view('incredible/state_details',$state);
	}


}