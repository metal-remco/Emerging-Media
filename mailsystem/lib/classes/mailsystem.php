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
        //$this->db = new db('localhost', 'root', '841nk2s', 'prj_2011_2012_emedia_med2d_t5');
        session_start();

	}

	// Methodes: Subscribers
	public function getSubscribers($type = '') {
		
		// Als er geen type is
		if(!$type):
		
			$query	= 'SELECT * FROM mail_subscribers ORDER BY id ASC;';

		// Als er wel een type is
		else: 
		
			$query	= 'SELECT * FROM mail_subscribers WHERE type = "'.$type.'" ORDER BY id ASC;';

		endif; 
		
		return $this->db->query($query, true);
				
	}
	public function removeSubscriber($id) {
		
		$query = 'DELETE FROM mail_subscribers WHERE id = '.$id.';';
		$this->db->query($query);
				
	}
	public function addSubscriber($name = '', $email, $child_name = '', $child_class = '', $employee_function = '', $employee_class = '', $type) {
		
		$query = 'INSERT INTO mail_subscribers VALUES ("", "'.$name.'", "'.$email.'", "'.$child_name.'", "'.$child_class.'", "'.$employee_function.'", "'.$employee_class.'", "'.$type.'");';
		$this->db->query($query);
				
	}
	
	// Methodes: Login
    public function checkLogin($username, $password) {

        $query = 'SELECT function FROM mail_users WHERE username ="' . $username . '" AND password = "' . $password . '";';
        return $this->db->query($query, true);
    }

    public function makeSession($editor) {
        $_SESSION["editor"] = $editor;

        return $_SESSION["editor"];
    }

    public function destroySession() {
        session_destroy();
    }

}

?>
