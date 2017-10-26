<?php
class _menu_controller extends CI_Controller {

public function __construct() {
parent::__construct();
}

//This is Default function of controller
public function index() {
//Loading view file ci_sample_view.php
$this->load->view('_menu');
}


}
?>
