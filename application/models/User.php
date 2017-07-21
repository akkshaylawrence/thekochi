<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function checkUser($usr, $pwd)
		{
			$pwd = md5($pwd);
			$this->db->select('*');
			$this->db->from ('users');
			$this->db->where('username', $usr);
			$this->db->where('password', $pwd);
			$this->db->where('status', 1);
			$query = $this->db->get ();
			if ($query->num_rows() > 0) {
			foreach ($query->result() as $row){
				$userData['uid'] = $row -> uid;
				$userData['name'] = $row -> username;
				$userData['authStatus'] = TRUE;
			}
			} else {
				$userData['authStatus'] = FALSE;
			}
			log_message('info','last query '.$this->db->last_query());
			return $userData;
		}
		public function addUser($fname,$username,$email,$phone,$password)
		{
			log_message('info',$email);
			$password = md5($password);
			$data = array(
				'username' => $username,
				'password' => $password,
				'name' => $fname,
				'email' => $email,
				'mobile' => $phone);
			$str = $this->db->insert_string('users', $data);
			return $str;

		}
}
