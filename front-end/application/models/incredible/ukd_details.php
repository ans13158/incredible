<?php


class Ukd_details extends CI_Model  {
	public function getDetails($destinationId)  {
		$detailsQuery = $this->db->select('name,details,visit1,visit2,visit3,visit4,visit5')
								 ->where('destinationId',$destinationId)
								 ->get('ukd-destination');
		return $detailsQuery->result_array();							 

	}
}