<?php

class India_model extends CI_Model  {
	public function getStates()  {
		$query = $this->db->select('stateId,name,details')
						  ->get('states-india');

		return $query->result_array() ;				  	
	}

}