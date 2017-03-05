<?php

class Ukd_images extends CI_Model  {
	public function getImages($destinationId)   {
		$imageQuery = $this->db->select('destinationId,imagePath,imageName')
							   ->where('destinationId',$destinationId)
							   ->get('images');
							 

		return $imageQuery->result_array();					  


	}
}
