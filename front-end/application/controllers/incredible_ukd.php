<?php

class Incredible_Ukd extends CI_Controller  {
	public function index()  {
		$this->load->view('incredible/home');
	}

	public function about() { 
		$this->load->view('incredible/about');
	}

    public function role()  {
        $this->load->view('incredible/role.php');
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
    	$this->load->helper( array('form') );
    	$this->load->view('incredible/bookTrip');
    }

    public function tripBookings()  {
        $this->load->helper( array('form','url') );
        $this->load->library('form_validation');

        $tripDetails = array();

        /*$this->form_validation->set_error_delimiters('<div class="error style="color:red">','</div>');

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
                
            $tripDetails['fullName'] = $this->input->post('fullName');
            $tripDetails['email'] = $this->input->post('email');
            $tripDetails['contact'] = $this->input->post('contact');
            $tripDetails['state'] = $this->input->post('state');
            $tripDetails['destination'] = $this->input->post('destination');
            $tripDetails['hotel'] = $this->input->post('hotel');
            $tripDetails['dateOfVisit'] = $this->input->post('dateOfVisit');
            $tripDetails['daysStay'] = $this->input->post('daysStay');
            $tripDetails['people'] = $this->input->post('people');
            $tripDetails['itinerary'] = $this->input->post('itinerary');
            $tripDetails['reference']  = $this->input->post('reference');
            $tripDetails['accept'] = $this->input->post('accept');
            $tripDetails['travellerName'] = $this->input->post('travellerName');
            $tripDetails['travellerPhone'] = $this->input->post('travellerPhone');
            $tripDetails['travellerEmail'] = $this->input->post('travellerEmail');
            $tripDetails['payNow'] = $this->input->post('payNow');
            $tripDetails['payLater'] = $this->input->post('payLater');

            $this->load->view('incredible/verifyDetails.php',$tripDetails);
            
         //}   
    }


    public function confirmDetails()  {
        $confirmData = array();
        if($this->input->post('editInfo')  )
            {
                $confirmData['next'] = $this->input->post('editInfo');
            
                $confirmData['fullName'] = $this->input->post('fullName');
                $confirmData['email'] = $this->input->post('email');
                $confirmData['contact'] = $this->input->post('contact');
                $confirmData['state'] = $this->input->post('state');
                $confirmData['destination'] = $this->input->post('destination');
                $confirm['hotel'] = $this->input->post('hotel');
                $confirmData['dateOfVisit'] = $this->input->post('dateOfVisit');
                $confirmData['daysStay'] = $this->input->post('daysStay');
                $confirmData['people'] = $this->input->post('people');
                $confirmData['itinerary'] = $this->input->post('itinerary');
                $confirmData['reference']  = $this->input->post('reference');
                $confirmData['accept'] = $this->input->post('accept');
                $confirmData['travellerName'] = $this->input->post('travellerName');
                $confirmData['travellerPhone'] = $this->input->post('travellerPhone');
                $confirmData['travellerEmail'] = $this->input->post('travellerEmail');
                $this->load->view('incredible/editDetails',$confirmData);
            
        }   

        else if($this->input->post('proceed') )  {
        
               
            $user = $this->input->post();
            unset($user['g-recaptcha-response']);
            unset($user['proceed']);
            
           // print_r($user);

             $this->load->model('incredible/bookings');
             $array = $this->bookings->bookTripDestination($user);
            $row_affected = $array[0];
            $bookedData = $array[1];
            

            if($row_affected)  {
                $bookedData['msg'] = "Successful";
            }

            else {
                $bookedData['msg'] = "Failed";
            }

            $this->load->view('incredible/saveTripBookings',$bookedData);
        }
    }
    
    public function bookPackage()  {
    	$this->load->helper('form');
    	$this->load->view('incredible/bookPackage');
    }


    public function confirmBooking()  {
        $confirmDetails = array();
        //echo $confirm['next'];
            
        if($this->input->post('editInfo')  )
            {
                $confirmDetails['next'] = $this->input->post('editInfo');
            
                $confirmDetails['fullName'] = $this->input->post('fullName');
                $confirmDetails['email'] = $this->input->post('email');
                $confirmDetails['contact'] = $this->input->post('contact');
                $confirmDetails['state'] = $this->input->post('state');
                $confirmDetails['destination'] = $this->input->post('destination');
                $confirmDetails['hotel'] = $this->input->post('hotel');
                $confirmDetails['dateOfVisit'] = $this->input->post('dateOfVisit');
                $confirmDetails['daysStay'] = $this->input->post('daysStay');
                $confirmDetails['people'] = $this->input->post('people');
                $confirmDetails['itinerary'] = $this->input->post('itinerary');
                $confirmDetails['reference']  = $this->input->post('reference');
                $confirmDetails['accept'] = $this->input->post('accept');
                $confirmDetails['travellerName'] = $this->input->post('travellerName');
                $confirmDetails['travellerPhone'] = $this->input->post('travellerPhone');
                $confirmDetails['travellerEmail'] = $this->input->post('travellerEmail');
                $this->load->view('incredible/editInfo',$confirmDetails);
            
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
             $array = $this->bookings->bookTourPackage($userData);
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


    public function deals()  {
        $this->load->view('incredible/deals');
    }

    public function enquiry()  {
        $this->load->helper( array('form','url') );
        $this->load->library('form_validation');
        $this->load->view('incredible/enquiry');
    }

    public function enquirySubmit() {
        $this->load->library('form_validation');
        $this->load->helper( array('form','url') );
       
        $message = array();
        $enquiryData = array();

        $enquiryData = $this->input->post();
        unset($enquiryData['accept'] );
        unset($enquiryData['g-recaptcha-response']);
        unset($enquiryData['enquire']);

        //Sending Email to our email address.
            $email = "Full Name : " . $enquiryData['fullName']
                        . "<br>"
                        . "Email : " . $enquiryData['email']
                        . "<br>"
                        . "Contact Number : " . $enquiryData['contact']
                        . "<br>"
                        . "Tour Package : " . $enquiryData['state']
                        . "<br>"
                        . "Destination : " . $enquiryData['destination']
                        . "<br>"
                        . "Type of Hotel : " . $enquiryData['hotel']
                        . "<br>"
                        . "Date of Visit : " . $enquiryData['dateOfVisit']
                        . "<br>"
                        . "Number of Days : " . $enquiryData['daysStay']
                        . "<br>"
                        . "Number of People : " . $enquiryData['people']
                        . "<br>"
                        . "Itinerary : " . $enquiryData['itinerary']
                        . "<br>"
                        . "References : " . $enquiryData['reference']
                        . "<br>" ;

            if( strlen($enquiryData['travellerName'])  )  {
                $email = $email . "I am making this booking for someone else<br>"  
                         . "Name of Traveller : " . $enquiryData['travellerName']
                        . "<br>"
                        . "Email of Traveller : " . $enquiryData['travellerEmail']
                        . "<br>"
                        . "Phone Number of Traveller : " . $enquiryData['travellerPhone'];
            }             
            //echo BASEPATH.'../js/library/phpMailer.php';

            require_once BASEPATH.'../js/library/phpMailer.php';

            $mail = new PHPMailer ;

            $mail->from =  "contact@incredibleuttarakhand.co.in" ;
            $mail->fromName = "enquiry.incredibleuttarakhand.co.in";

            $mail->addAddress("contact@incredibleuttarakhand.co.in");

            $mail->isHTML(true);

            $mail->Subject = "New Enquiry";
            $mail->Body = $email ;

            if(!$mail->send() )  {
                echo "Mailer Error :" . $mail->ErrorInfo;

            }

            

        //Sending Email to our email address.

        //print_r($enquiryData);
        $this->load->model('incredible/enquiry_submit');
        $rows_inserted = $this->enquiry_submit->insertEnquiry($enquiryData);
        if($rows_inserted){
            $message['success'] = "Thanx for choosing us! We will reach you as soon as possible.";
            $this->load->view('incredible/enquiry',$message);
        }
        else {
            $message['failure'] = "Error submiting enquiry. Please try again.";
            $this->load->view('incredible/enquiry',$message);
        }
    }

    public function developers()  {
        $this->load->view('incredible/developer');
    }

    public function submitContact()  {
        $contactData = $this->input->post();
        $message = array();
        $this->load->model('incredible/contact');
        $rows_inserted = $this->contact->submitContact($contactData);
        if($rows_inserted)  {
            $message['success'] = "Thanx for contacting us. We will contact you back as soon as possible.";
            $this->load->view('incredible/contact',$message);
        }

        else  {
            $message['failure'] = "Sorry! Error in sending your query. Please try again. ";
            $this->load->view('incredible/contact',$message);
        }
    }
}