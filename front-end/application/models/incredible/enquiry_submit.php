<?php

class Enquiry_submit extends CI_Model  {
	public function insertEnquiry($enquiryData)  {
		$rows_inserted = $this->db->insert('enquiry_tours',$enquiryData);
		return $rows_inserted;
	}

	public function insertTripEnquiry($tripData)  {
		$rows_inserted = $this->db->insert('enquire_trips',$tripData);
		return $rows_inserted;	
	}
}