<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

class Contacts_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("contacts");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();

		//$this->Default_Model = $this->model("Default_Model");
	}
	
	public function index() {
	$vars["message"] = __("Esta es la aplicacion contacts");	
	$vars["view"] = $this->view("show",TRUE);
	}

	public function imprimir($text){
		print($text);

	}
	

	public function contact($contactID) {
		$data = $this->Contacts_Model->contact($contactID);
		____($data);
	}

	public function page($page) {
		$data = $this->Default_Model->page($page);
		____($data);
	}

	public function test($param1, $param2) {
		print "New dispatcher it's works fine: $param1, $param2";
	}

	public function show($message) {
		$vars["message"] = $message;
		$vars["view"]	 = $this->view("show", TRUE);
		
		$this->render("content", $vars);
		#$this->view("show", $vars);
	}

}
