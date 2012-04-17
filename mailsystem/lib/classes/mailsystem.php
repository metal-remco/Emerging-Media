<?php

	// Includes
	include('db.php');

class mailsystem
{

	// Initialisatie
	private $db;

	// Constructor
	public function __construct() {

		$this->db = new db('localhost', '52089', 'gudaeb', 'prj_2011_2012_emedia_med2d_t5');

	}

	// Methodes
	public function getSubscribers() {
		
		$query	= 'SELECT * FROM mail_subscribers ORDER BY id ASC;';
		return $this->db->getData($query);
				
	}

	public function removeSubscriber($id) {
		
		$query = 'DELETE FROM mail_subscribers WHERE id = '.$id.';';
		$this->db->removeData($query);
				
	}
	
	public function addSubscriber($name, $email) {
		
		$query = 'INSERT INTO mail_subscribers VALUES ("", "'.$name.'", "'.$email.'");';
		$this->db->addData($query);
				
	}

}

?>