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
		$this->load->model('incredible/ukd_images','images');
		$destination['images'] = $this->images->getImages($destinationId);
		$this->load->view('incredible/ukd_details',$destination);
	}

	public function state_details($stateId) { 
		$this->load->model('incredible/state_details','states');
		
		$state['detail'] = $this->states->getState($stateId);
		$this->load->view('incredible/state_details',$state);
	}

	public function about_ukd()  {
		$this->load->view('incredible/about_ukd');
    }

    public function contact()  {
    	$this->load->view('incredible/contact');
    }
    public function pilgrimage()  {
		$this->load->view('incredible/pilgrimage');
    }
    public function wildlife()  {
		$this->load->view('incredible/wildlife');
    }
    public function excursion()  {
		$this->load->view('incredible/excursion');
    }
    public function honeymoon()  {
		$this->load->view('incredible/honeymoon');
    }
    public function trekking()  {
		$this->load->view('incredible/trekking');
    }
    public function motorbike()  {
		$this->load->view('incredible/motorbike');
    }
    public function home_stay()  {
		$this->load->view('incredible/home_stay');
    }
    public function doDhamYatra()  {
    	$this->load->view('incredible/doDhamYatra');
    }
    public function hemKund()  {
    	$this->load->view('incredible/hemkund');
    }
}