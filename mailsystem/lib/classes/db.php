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
		
		// Als er een error is								
		if ($this->mysqli->connect_error)  {
			
			echo 'Er is een fout opgetreden in de contructor van de db class; connect_errno = ' . $mysqli->connect_errno . ', connect_error = '. $mysqli->connect_error;
			
		}

	}
	
	// Methodes 
	public function query($query, $select = false) {
		
		// Als de query niet succesvol is uitgevoerd
		if (!$result = $this->mysqli->query($query)):
			
			echo 'Er is een fout opgetreden in de query methode van de db class; query = '.$query.', mysqli->error = '.$this->mysqli->error;

		// Als de query succesvol is uitgevoerd en het een 'select' query betreft
		elseif($select):

			// Als er resultaten zijn, stop ze in een array en retun die
			if ($result):
				
				$data = array();
				
				while ($row = $result->fetch_object() ):
					
					$data[] = $row;
				
				endwhile;
				
				return $data;
			
			endif;
			
		endif;
		
	}
	
}

?>