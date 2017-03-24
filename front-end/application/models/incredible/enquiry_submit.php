<?php

class Enquiry_submit extends CI_Model  {
	public function insertEnquiry($enquiryData)  {
		$rows_inserted = $this->db->insert('enquiry_table',$enquiryData);
		return $rows_inserted;
	}
}