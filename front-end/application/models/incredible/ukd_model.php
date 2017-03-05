<?php

class Ukd_model extends CI_Model  {
	public function getDestinations()  {
		$query = $this->db->get('ukd-destination');

		return $query->result_array() ;				  	
	}

}