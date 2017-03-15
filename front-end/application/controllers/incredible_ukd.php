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

	public function india()  {
		$this->load->view('incredible/about_india');
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
		$this->load->model('incredible/states_images','imgStates');
		$state['images'] = $this->imgStates->getImages($stateId);
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

    public function bookMyTrip()  {
    	$this->load->helper('form');
    	$this->load->view('incredible/bookTrip');
    }

    public function bookPackage()  {
    	$this->load->helper('form');
    	$this->load->view('incredible/bookPackage');
    }

    //Function for booking tour package.
    public function bookTour()  {
    	$details =  array();

    	$this->load->helper( array('form','url') );
    	/*$this->load->library('form_validation');
    	$this->form_validation->set_error_delimiters('<div class="error style="color:red">','</div>');

    	$this->form_validation->set_rules('fullName','Full Name','trim|requied|min_length[3]|alpha');
    	$this->form_validation->set_rules('email','Email', 'trim|required|valid_email');
    	$this->form_validation->set_rules('contact','Contact Number','trim|required|is_natural|min_length[6]|max_length[12]');
    	$this->form_validation->set_rules('state','Tour Package','required');
    	$this->form_validation->set_rules('destination','Destination','required');
    	$this->form_validation->set_rules('daysStay','No. of days staying','trim|required|is_natural');
    	$this->form_validation->set_rules('people','No. of People','trim|required|is_natural');
    	$this->form_validation->set_rules('itinerary','itinerary','trim|htmlspecialchars');
    	$this->form_validation->set_rules('travellerName','Name  of Traveller', 'trim|alpha');
    	$this->form_validation->set_rules('travellerEmail','Email of traveller','trim|valid_email');
    	$this->form_validation->set_rules('travellerPhone','Phone No. of traveller', 'trim|is_natural');*/

    	/*if($this->form_validation->run() == FALSE)  {
    		$this->load->view('incredible/bookPackage');
    	}
    	else  {*/
    		$details['fullName'] = $this->input->post('fullName');
    		$details['email'] = $this->input->post('email');
    		$details['contact'] = $this->input->post('contact');
    		$details['state'] = $this->input->post('state');
    		$details['destination'] = $this->input->post('destination');
    		$details['hotel'] = $this->input->post('hotel');
    		$details['dateOfVisit'] = $this->input->post('dateOfVisit');
    		$details['daysStay'] = $this->input->post('daysStay');
    		$details['people'] = $this->input->post('people');
    		$details['itinerary'] = $this->input->post('itinerary');
    		$details['reference']  = $this->input->post('reference');
    		$details['accept'] = $this->input->post('accept');
    		$details['travellerName'] = $this->input->post('travellerName');
    		$details['travellerPhone'] = $this->input->post('travellerPhone');
    		$details['travellerEmail'] = $this->input->post('travellerEmail');
    		$details['payNow'] = $this->input->post('payNow');
    		$details['payLater'] = $this->input->post('payLater');
			
			

                //print_r($details);		
    		$this->load->view('incredible/showDetails',$details);

    		//echo "hi";
    		//$this->load->view('incredible/showDetails');
    	//}

    } 

    public function confirmInfo()  {
    	$confirm = array();

    	

    	//echo $confirm['next'];
    		
		if($this->input->post('editInfo')  )
    		{
	    		$confirm['next'] = $this->input->post('editInfo');
	    	
	    		$confirm['fullName'] = $this->input->post('fullName');
	    		$confirm['email'] = $this->input->post('email');
	    		$confirm['contact'] = $this->input->post('contact');
	    		$confirm['state'] = $this->input->post('state');
	    		$confirm['destination'] = $this->input->post('destination');
	    		$confirm['hotel'] = $this->input->post('hotel');
	    		$confirm['dateOfVisit'] = $this->input->post('dateOfVisit');
	    		$confirm['daysStay'] = $this->input->post('daysStay');
	    		$confirm['people'] = $this->input->post('people');
	    		$confirm['itinerary'] = $this->input->post('itinerary');
	    		$confirm['reference']  = $this->input->post('reference');
	    		$confirm['accept'] = $this->input->post('accept');
	    		$confirm['travellerName'] = $this->input->post('travellerName');
	    		$confirm['travellerPhone'] = $this->input->post('travellerPhone');
	    		$confirm['travellerEmail'] = $this->input->post('travellerEmail');
                $this->load->view('incredible/editInfo',$confirm);
    		
		}	

		else if($this->input->post('proceed') )  {
		
    	       
    		$userData = $this->input->post();
    		unset($userData['g-recaptcha-response']);
            unset($userData['proceed']);
            
            //print_r($userData);

    		$this->load->model('incredible/bookings');
             $array = $this->bookings->bookTour($userData);
            $row_affected = $array[0];
            $bookedData = $array[1];
            

            if($row_affected)  {
                $bookedData['msg'] = "Successful";
            }

            else {
                $bookedData['msg'] = "Failed";
            }

    		$this->load->view('incredible/saveBookings',$bookedData);
    	}
    }

}