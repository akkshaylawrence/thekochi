<?PHP
defined('BASEPATH') OR exit('No direct script access allowed');
class Data extends CI_Model {

    function __construct () {
        parent::__construct ();
    }

public function saveBookDataDB ($formData) {
  $data = array(
      'email' => $formData['email'],
		'password' => $formData['password'],
  );
  log_message('info',print_r($data,TRUE));
  $this->db->insert('users', $data);
  return ($this->db->affected_rows() != 1) ? false : true;
  }
}
