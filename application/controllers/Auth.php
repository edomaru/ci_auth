<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This controller can be accessed 
 * for non logged in users
 */
class Auth extends MY_Controller {	

	public function index()
	{	
		$this->load->view("header");		
		$this->load->view("auth");
		$this->load->view("footer");
	}

}