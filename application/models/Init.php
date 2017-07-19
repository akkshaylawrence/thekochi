<?PHP

class Init extends CI_Model {

    function __construct () {
        parent::__construct ();
    }
    function initPath ($contoller_path='') {
        $data["base_url"] = $this->config->item ("base_url");
        $data["css"]      = $this->config->item ("css");
        $data["js"]       = $this->config->item ("js");
        $data["images"]   = $this->config->item ("images");
        $data["path"]     = $data["base_url"].$contoller_path;
        $data["title"]    = "";
        return $data;
	 }
}
