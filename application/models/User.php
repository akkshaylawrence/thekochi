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
				$userData['username'] = $row -> username;
				$userData['name'] = $row -> name;
				$userData['mobile'] = $row -> mobile;
				$userData['email'] = $row -> email;
				$userData['country'] = $row -> country;
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
			$password = md5($password);
			$data = array(
				'username' => $username,
				'password' => $password,
				'name' => $fname,
				'email' => $email,
				'mobile' => $phone,
				'status' => 1);
			$SQL = $this->db->insert_string('users', $data);
			$this->db->query($SQL);
			$this->db->select('*');
			$this->db->from ('users');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get ();
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row){
					$regData['uid'] = $row -> uid;
					$regData['regStatus'] = TRUE;
				}
			} else {
				$regData['regStatus'] = FALSE;
			}
			return $regData;
		}
}
