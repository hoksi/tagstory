<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	function cal()
	{
		$this->load->library('calendar');
		
		echo $this->calendar->generate();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */