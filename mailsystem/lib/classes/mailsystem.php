<?php

	// Includes
	include('db.php');

class mailsystem
{

	// Initialisatie
	private $root;
	private $db;
	private $subscriber_types;	// Moet naar de subscriber class

	private $view;
	private $subscriber_type; 	// Moet naar subscriber class (voor abonneren)
	private $user_id;			// Moet naar user class (voor uitloggen)

	// Constructor
	public function __construct() {
		
		$this->root = 'http://project.cmi.hr.nl/2011_2012/emedia_med2d_t5/mailsystem';
		$this->db = new db('localhost', '52089', 'gudaeb', 'prj_2011_2012_emedia_med2d_t5');
        // $this->db = new db('localhost', 'root', '841nk2s', 'prj_2011_2012_emedia_med2d_t5');
		$this->subscriber_types = Array('ouder' => 'ouder', 'medewerker' => 'medewerker', 'geinteresseerde' => 'ge&iuml;nteresseerde'); 
				
		// Views
		$view_uri 	= str_replace('/2011_2012/emedia_med2d_t5/mailsystem/', '', $_SERVER['REQUEST_URI']);
		$view_xpl 	= explode("/", $view_uri );
		$this->view	= $view_xpl[0];
		
		session_start();
			
		// Als de view uitloggen is, log dan direct uit 		
		if($this->view == 'uitloggen'):
		
			$this->logout();

		endif;

		// Als er niemand is ingelogd en de view is niet abonneer of opzeggen (omdat deze 2 pagina's door iedereen bekeken mogen worden)
		if( !$this->checkloggedin() && $view != 'abonneer' && $view != 'opzeggen'): 
		
			$this->view = 'inloggen'; 
		
		else:
				
			switch ($view):
				
				// Bij het abonneren moet het type van de subscriber worden bewaard zodat deze kan worden opgevraagd in de view.
				case 'abonneer':			
				
					$this->subscriber_type = $view_xpl[1];
				
				break;
				
				// Bij het opzeggen moet het id van de huidige user worden bewaard zodat deze kan worden opgevraagd in de view.
				case 'opzeggen':			
				
					$this->user_id = $view_xpl[1];
				
				break;
											
			endswitch;		
		
		endif;
		
		if($this->view == ''): $this->view = 'dashboard'; endif;

	} // Constructor
	
	public function getRoot()				 	{ return $this->root; }
	public function getView()				 	{ return $this->view; }
	public function getUserID() 				{ return $this->user_id; }
	public function getSubscriberTypes() 		{ return $this->subscriber_types; }

	public function getSubscriberType($html) 	{ 
	
		if($html):
		
			return $this->subscriber_types[ $this->subscriber_type ]; 
			
		else:
		
			return $this->subscriber_type; 
			
		endif;

	}

	// Methodes: Subscribers (todo: Naar de subscriber class verplaatsen)
	public function getSubscribers($type = '') {
		
		if(!$type):
		
			$query	= 'SELECT * FROM mail_subscribers ORDER BY id ASC;';

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
	
	// Methodes: Login (todo: Naar de user class verplaatsen)
    public function login($username, $password) {
			
		// Check of de gebruikersnaam en het wachtwoord overeenkomen met een database entry, zo ja: vul user_function met de functie van deze gebruiker
        $query = 'SELECT function FROM mail_users WHERE username ="' . $username . '" AND password = "' . $password . '";';
		$query_result = $this->db->query($query, true);
		$user_function = $query_result[0]->function;

		// Todo: function type kan weg, we hebben toch maar 1 type.
		if ($user_function == "editor"):
			
			$_SESSION["login"] = $user_function;
			return true;
						
		else:
	
			return false;
			
		endif;
		
    }
    public function logout() {
		
		$_SESSION["login"] = false;
				
    }
	public function checkloggedin() {
		
		// Als de login sessie bestaat
		if($_SESSION["login"]):
		
			return true;
		
		else: 
		
			return false;
		
		endif;
				
	}

}
?>