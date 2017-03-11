<?php
class States_images extends CI_Model  {

	public function getImages($stateId)  {
		$imageQuery = $this->db->select('stateId,imagePath,imageName')
							   ->where('stateId',$stateId)
							   ->get('images');
							 

		return $imageQuery->result_array();					  

	}
}