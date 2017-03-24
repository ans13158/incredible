<?php

class Payment  extends CI_Controller  {

	public function proceedPayment()  {
		$this->load->helper( array('form','url') );
		$this->load->view('incredible/paymentForm');
	}
	public function payPal()  {
		require "vendor/autoload.php";

		$paypal = new \Paypal\Rest\ApiContext(
			new \Paypal\Auth\OAuthTokenCredential(
				'ASPFHKnnungM3K1jJa5KBapxJy607Vkrn5nlF5Iyti_WVlvPdyzYfjMQ_nJS4dWQQ89gb5kI4XCvjIqf',
				'EETVGBYZssPow8mC1NHLT4V3C93Evj0cQrArx_qvONVYDjIJjxKJPVeqBX4LExB_LMGZTmcvK2uB6wIe')
			);
	}

	public function checkout()  {
		require "vendor/autoload.php";

		use PayPal\Api\Payer;
		use PayPal\Api\Item;
		use PayPal\Api\ItemList;
		use PayPal\Api\Details;

		
		//require "vendor/autoload.php";

		/*$product = "";
		$price = "";

		if($this->input->post('product') && $this->input->post('price') )  {
			$product = $this->input->post('product');
			$price = $this->input->post('price');
		}

		else  
			die();

		$shipping = 2.00;
		$total = $price + $shipping;

		$payer = new Payer();
		$payer->setPaymentMethod('paypal');

		$item = new Item();
		$item->setName($product)
			 ->setCurrency('INR')
			 ->setQuantity(1)
			 ->setPrice($price);

	    $itemList = new itemList();
	    
	    $details = new Details();
	    $details->setShipping($shipping)
	    		->setSubTotal($total);*/		 

	}
}