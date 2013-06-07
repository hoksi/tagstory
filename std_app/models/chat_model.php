<?php
class Chat_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_msg($id)
	{
		//SELECT name, profile profile_pic, text msg, m.rdate FROM apps_user u JOIN apps_message m ON u.id = m.user_id
		
		$this->db->select("m.id, name, profile profile_pic, text msg, m.rdate");
		$this->db->from('apps_user u');
		$this->db->join('apps_message m', 'u.id = m.user_id');
		$this->db->where('u.id', $id);
		$this->db->where('is_read is null');
		$this->db->order_by('m.id');
		
		$rows = $this->db->get()->result_array();
		foreach($rows as $row) {
			$this->db->set('is_read', 'sysdate()', FALSE);
			$this->db->where('id', $row['id']);
			$this->db->update('apps_message');
		}
		
		return $rows;
	}
	
	public function set_msg($pdata)
	{
		$fname = array(
		 'user_id' => 'id',
		 'text' => 'msg'
		);
		  
		foreach ($fname as $key => $pkey) {
		 isset($pdata[$pkey]) ? $data[$key] = $pdata[$pkey] : FALSE;
		}
		
		if(!empty($data['text'])) {
			$this->db->set('rdate', 'sysdate()', FALSE);
			  
			$this->db->insert('apps_message', $data);
		}
	}
	
	public function get_room_title($id, $user_id)
	{
		$room_info = FALSE;
		
		$this->db->select('responser user_id, rtime');
		$this->db->where('id', $id);
		$this->db->where('requester', $user_id);
		$user_info = $this->db->get('apps_room')->row_array();
		
		if(empty($user_info)) {
			$this->db->select('requester user_id, rtime');
			$this->db->where('id', $id);
			$this->db->where('responser', $user_id);
			$user_info = $this->db->get('apps_room')->row_array();
		}
		
		if(!empty($user_info)) {
			$this->db->select('id, name, profile profile_pic');
			$this->db->where('id', $user_info['user_id']);
			$room_info = $this->db->get('apps_user')->result_array();
		}
		
		return $room_info;
	}
	
	public function create_room($id)
	{
		$ret = NULL;
		
		if($id != '') {
			$data = array('requester' => $id, 'rtype' => 'A');
			$this->db->insert('apps_room', $data);
			$ret = $this->db->insert_id();
		}

		return $ret;
	}
}
