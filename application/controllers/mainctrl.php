<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mainctrl extends CI_Controller {
	public function index(){
		log_message('info',"In Index");
		$data = $this->init->initPath('/mainctrl');
		$data += $this->session->userdata();
		if($this->session->userdata('loggedIn')){
			$this->load->view('pages/main',$data);
		}else{
			$this->load->view('pages/home',$data);
		}
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
			echo $userData['authStatus'].","."Incorrect username or password";
		}elseif ($userData['authStatus'] == TRUE) {
			$newdata = array(
				'uid'  => $userData['uid'],
				'name'  => $userData['name'],
				'loggedIn' => TRUE
			);
			$this->session->set_userdata($newdata);
			log_message('info',print_r($_SESSION,TRUE));
			log_message('info',print_r($userData,TRUE));
			exit;
		}
	}
	public function main(){
		$data = $this->init->initPath('/mainctrl');
		$data += $this->session->userdata();
		if($this->session->userdata('loggedIn')){
			$this->load->view('pages/main',$data);
		}else{
			$this->load->view('pages/home',$data);
		}
	}
	public function logout() {
	log_message('info',"In Logout");
	$data = $this->init->initPath ('/mainctrl');
	$this->session->sess_destroy();
	redirect(base_url(),'refresh');
	}
}
