<?php

class Incredible_Ukd extends CI_Controller  {
	public function index()  {
		$this->load->view('incredible/home');
	}

	public function about() { 
		$this->load->view('incredible/about');
	}
}