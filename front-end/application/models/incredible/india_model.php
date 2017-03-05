<?php

class India_model extends CI_Model  {
	public function getStates()  {
		$query = $this->db->get('states-india');

		return $query->result_array() ;				  	
	}

}