<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Chat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->model('chat_model');
		
		header('Content-type: text/json');
		header('Content-type: application/json');
	}
	
	public function index()
	{
		echo 'Chat';
	}
	
	public function get_msg()
	{
		$gdata = $this->input->get();
		$data = $this->chat_model->get_msg($gdata['id']);
		$this->output($data);
	}
	
	public function set_msg()
	{
		$pdata = $this->input->post();
		$this->chat_model->set_msg($pdata);
	}
	
	public function get_room()
	{
		$gdata = $this->input->get();
		
		$data = $this->chat_model->get_room_title($gdata['id'], $gdata['user_id']);
		
		$this->output($data);
	}
	
	public function test()
	{
		// "{\"\":[\"\"],\"data\":{\"\":\"test\"}}"
		$data = array(
			'registration_ids' => array(
				'APA91bEjpJZ5MNVx6z0Pcw8GRSiQdNqd-o4tLlVVWAXwPBAmPFJNNj9cLK_sSRHLODb4Ws8grugPUyun4pKJGOn0m3QBz1CSrtBSIDdrWXS06Uq6V-nk_vQa9iiXXBj30UihURJmQyxUX-2Yp5eKIGuWL5ANngXDpg'
			),
			'data' => array(
				'msg' => 'test'
			)
		);
		
		echo '"' . addslashes(json_encode($data)) . '"';
	}
	
	public function output($data)
	{
		//var_dump($this->input->get());
		echo $_GET['callback'] . "('" . json_encode($data) . "')";
	}
}
