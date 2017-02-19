<?php


class Ukd_details extends CI_Model  {
	public function getDetails($destinationId)  {
		$detailsQuery = $this->db->select('name,details,quote1,quote2')
								 ->where('destinationId',$destinationId)
								 ->get('ukd-destination');
		return $detailsQuery->result_array();							 

	}
}