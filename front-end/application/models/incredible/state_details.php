<?php

class State_details extends CI_Model  {
	public function getState($stateId)  {
		$detailsQuery = $this->db->select('name,details,visit1,visit2,visit3,visit4,visit5')
								 ->where('stateId',$stateId)
								 ->get('states-india');
		return $detailsQuery->result_array();				  	
	}
}