<?php

class State_details extends CI_Model  {
	public function getState($stateId)  {
		$state = $this->db->select('stateId,name,details')
						  ->where('stateId',$stateId)
						  ->get('states-india');
		return $state->result_array();				  	
	}
}