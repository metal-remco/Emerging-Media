<?php
	
	// Includes
	// -
			
class db
{
	
	// Initialisatie	
	private $mysqli;

	// Constructor
	public function __construct($host, $user, $pass, $database) {	
	
		$this->mysqli = new mysqli($host, $user, $pass, $database);
										
		if ($this->mysqli->connect_error)  {
			
			echo 'Er is een fout opgetreden in de contructor van de db class; connect_errno = ' . $mysqli->connect_errno . ', connect_error = '. $mysqli->connect_error;
			
		}

	}
	
	// Methodes 
	public function getData($query) {
		
		if ($result = $this->mysqli->query($query)) {
			
			if ($result) {
				
				$data = array();
				
				while ($row = $result->fetch_object() ) {
					
					$data[] = $row;
				
				}
				
				return $data;
			
			}
			
			
		} else {

			echo 'Er is een fout opgetreden in de getData methode van de db class; mysqli->error = '.$this->mysqli->error;

		}
		
	}
	
	public function removeData($query) {
		
		if (!$result = $this->mysqli->query($query)) {
			
			echo 'Er is een fout opgetreden in de removeData methode van de db class; mysqli->error = '.$this->mysqli->error;
			
		}
				
	}
	
	public function addData($query) { // Todo: deze methode is hetzelfde als hierboven
		
		if (!$result = $this->mysqli->query($query)) {
			
			echo 'Er is een fout opgetreden in de addData methode van de db class; mysqli->error = '.$this->mysqli->error;
			
		}
				
	}
	
	
}

?>