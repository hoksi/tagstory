<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mtest extends CI_Controller {
	function index() {
		$this->load->view('mtest');
	}
}