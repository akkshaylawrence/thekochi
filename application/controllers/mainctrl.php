<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainctrl extends CI_Controller {
	public function index(){
		$data = $this->init->initPath('/mainctrl');
		$this->load->view('pages/home',$data);
	}
	public function userLoginProcess() {
			// set variables from the form
		$this->load->model('User');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		log_message('info','$username '.$username);
		log_message('info','$password '.$password);
		$userData = $this->User->checkUser($username, $password);
		log_message('info',print_r($userData,TRUE));


		if ($userData['authStatus'] == FALSE) {
			echo $userData['authStatus'].","."incorrect username or password";
			exit;
		}elseif ($userData['authStatus'] == TRUE) {
			// set session user datas
			$newdata = array(
				'uid'  => $userData['uid'],
				'name'  => $userData['name'],
			'username'  => $userData['username'],
			'loggedIn' => TRUE
			);

			$this->session->set_userdata($newdata);

			log_message('info',print_r($_SESSION,TRUE));
			log_message('info',print_r($userData,TRUE));
			// user login ok
			$this->load->view('pages/main',$data);
			exit;
		}
	}
}
