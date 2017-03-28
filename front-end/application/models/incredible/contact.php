<?php

class Contact extends CI_Model  {
	public function submitContact($contactData)  {
		$rows_inserted = $this->db->insert('contacts',$contactData);
		return $rows_inserted;
	}
}