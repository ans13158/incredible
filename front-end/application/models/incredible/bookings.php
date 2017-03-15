<?php

class Bookings extends CI_Model  {
	
	public function bookTour($userData)  {
		//echo "hii";
			$tourId = "";
		$query = "SELECT * FROM `tour-package` ORDER BY `entryId` DESC  ";
		$res = $this->db->query($query);
		
		if(!$res)  
			echo $this->db->_error_message();
		
		$id =  $res->result_array()[0]['entryId'];
		//echo $id;
		if($res->num_rows() > 0)  {
			$tourId = $id + 1000;
			$tourId = "INC" . $tourId . "UKD";
		//	echo $tourId;

		} 

		else if($res->num_rows() == 0)  {
			$tourId = "INC" . 1000 . "UKD" ;
			
		}
		


		$userData['tourId'] = $tourId ; 
		$userData['paymentStatus'] = "UNPAID";

		$row_affected = $this->db->insert('tour-package',$userData);

		return array($row_affected,$userData) ;
	}
}
