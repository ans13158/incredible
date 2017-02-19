<?php

class Ukd_model extends CI_Model  {
	public function getDestinations()  {
		$query = $this->db->select('destinationId,name,details')
						  ->get('ukd-destination');

		return $query->result_array() ;				  	
	}

}