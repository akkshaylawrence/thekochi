<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mainctrl extends CI_Controller {
	public function index(){
		$data = $this->init->initPath('/mainctrl');
		$this->load->view('pages/home',$data);
	}
	public function userLoginProcess() {
		$this->load->model('User');
		$this->load->model('Init');
		$data = $this->init->initPath('/mainctrl');
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
			$newdata = array(
				'name'  => $userData['name'],
				'loggedIn' => TRUE
			);
			$this->session->set_userdata($newdata);
			log_message('info',print_r($_SESSION,TRUE));
			log_message('info',print_r($userData,TRUE));
			$this->load->view('pages/main',$data);
			// redirect(base_url().'main', 'refresh');
			exit;
		}
	}

	public function logout() {
	$data = $this->Init->initPath ('/mainctrl');
	$data += $this->Init->dbCustom();
	// Destroy session data
	$this->session->sess_destroy();
	redirect(base_url(), 'refresh');
	// header('Location: ' . base_url() . 'admin');
	// exit;
	}
}
