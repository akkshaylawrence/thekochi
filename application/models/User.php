<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Model{
     function __construct(){
          parent::__construct();
     }
     function checkUser($usr, $pwd){
          $this->db->select('*');
          $this->db->from ('users');
          $this->db->where('email', $usr);
          $this->db->where('password', $pwd);
          $this->db->where('status', 'TRUE');
          $query = $this->db->get ();
          if ($query->num_rows() > 0) {
            foreach ($query->result() as $row){
              $userData['uid'] = $row -> id;
              $userData['name'] = $row -> email;
              $userData['authStatus'] = TRUE;
            }
          } else {
              $userData['authStatus'] = FALSE;
          }
          log_message('info','last query '.$this->db->last_query());
          log_message('info',print_r($userData,TRUE));
          return $userData;
     }
}
