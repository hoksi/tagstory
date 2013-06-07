<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cal extends CI_Controller {
	function index()
	{
		$this->load->library('calendar');
		
		echo $this->calendar->generate();
	}
}