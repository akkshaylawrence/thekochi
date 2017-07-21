<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mainctrl extends CI_Controller
{
    public function index()
    {
        $data = $this->init->initPath('/mainctrl');
        $data += $this->session->userdata();
        if ($this->session->userdata('loggedIn')) {
            $this->load->view('pages/main', $data);
        } else {
            $this->load->view('pages/home', $data);
        }
    }
    public function userLoginProcess()
    {
        $this->load->model('User');
        $this->load->model('Init');
        $data = $this->init->initPath('/mainctrl');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $userData = $this->User->checkUser($username, $password);
        log_message('info', print_r($userData, true));
        if ($userData['authStatus'] == false) {
            echo $userData['authStatus'].","."Incorrect username or password";
        } elseif ($userData['authStatus'] == true) {
            $newdata = array(
                'uid'  => $userData['uid'],
                'name'  => $userData['name'],
                'loggedIn' => true
            );
            $this->session->set_userdata($newdata);
            exit;
        }
    }
    public function main()
    {
        $data = $this->init->initPath('/mainctrl');
        $data += $this->session->userdata();
        if ($this->session->userdata('loggedIn')) {
            $this->load->view('pages/main', $data);
        } else {
            $this->load->view('pages/home', $data);
        }
    }
    public function logout()
    {
        $data = $this->init->initPath ('/mainctrl');
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
    }
}
