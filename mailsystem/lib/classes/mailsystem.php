<?php

	// Includes
	include('db.php');

class mailsystem
{

	// Initialisatie
	private $db;

	// Constructor
	public function __construct() {

		// Schoolserver
		// $this->db = new db('localhost', '52089', 'gudaeb', 'prj_2011_2012_emedia_med2d_t5');
        
		// Randy Localhost
		$this->db = new db('localhost', 'root', '', 'prj_2011_2012_emedia_med2d_t5');
         
		// Remco Localhost
		// $this->db = new db('localhost', 'root', '841nk2s', 'prj_2011_2012_emedia_med2d_t5');

		session_start();

	}

	// Methodes: Subscribers
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
	
	public function addSubscriber($name = '', $email, $child_name = '', $child_class = '', $employee_function = '', $employee_class = '', $type, $reason = '') {
		
		$query = 'INSERT INTO mail_subscribers VALUES ("", "'.$name.'", "'.$email.'", "'.$child_name.'", "'.$child_class.'", "'.$employee_function.'", "'.$employee_class.'", "'.$type.'", "'.$reason.'");';
		$this->db->query($query);		
	}
	    
    public function changeSubscriberEmail($email = '', $id = '')
    {
        $query = 'UPDATE mail_subscribers SET email="'.$email.'" WHERE id="'.$id.'"';
        //echo $query;
        $this->db->query($query);
    }
    
    public function sendConformationMail($email)
    {
        $to = $email;
        $subject = "Bevestiging van inschrijven voor de nieuwsbrief van de Emmausschool";
        $message = "U bent succesvol ingeschreven voor de nieuwsbrief van de Emmausschool. Deze zult u dus zeer binnenkort ontvangen";
        //$from = "info@emmausschool";
       mail($to, $subject, $message);
    }
    
    public function sendArticleReaction($email, $message)
   {
        $to = $email;
        $subject = "Reactie op uw ingezonden artikel van de Emmausschool.";
        $message = $message;
        mail($to, $subject, $message);
    }
	
	// Methodes: Login
    public function login($username, $password) {
		
		// Todo: User Logged in is true naar de user class verplaatsen
	
		// Check of de gebruikersnaam en het wachtwoord overeenkomen met een database entry, zo ja: vul user_function met de functie van deze gebruiker
        $query = 'SELECT function FROM mail_users WHERE username ="' . $username . '" AND password = "' . $password . '";';
		$query_result = $this->db->query($query, true);
		$user_function = $query_result[0]->function;

		if ($user_function == "editor"):
			
			$_SESSION["login"] = $username;
			return true;
						
		else:
	
			return false;
			
		endif;
		
    }
    
    public function logout() {
		
		if ($_SESSION["login"]):
		
			session_destroy();
		
		endif;
		
    }
    
	public function areThereAnyUsersLoggedIn() {
		
		// Todo: Editor misschien betere weghalen, als er toch geen verschillende typen zijn
		
		if($_SESSION["login"]):
		
			return true;
		
		else: 
		
			return false;
		
		endif;
		
	}
        
	// Methodes: Articles
    public function sendArticle($title, $article, $picture, $author, $date){
        $query = 'INSERT INTO mail_article (title, article, picture, author, date) VALUES ("'. $title . '","' .addslashes($article). '", "'.$picture.'", "'.$author.'", "'.$date.'")';
        echo $query;
        $this->db->query($query);
    }
    
 public function editArticle($title, $article, $picture, $id){
            $query = 'UPDATE mail_article SET title="'.$title.'", article="'.addslashes($article).'", picture="'.$picture.'" WHERE id="'.$id.'"';
            
            $this->db->query($query);
        }
        
        public function getArticles ($id){
        
            if($id != 0)
            {
                $query = "SELECT * FROM mail_article WHERE id = '".$id."'";
            }
            else{
                $query = "SELECT * FROM mail_article ORDER BY date ASC";
            }
            $result = $this->db->query($query, true);
            return $result;
        }
	
        public function deleteArticle($id)
        {
            $query = "DELETE  FROM mail_article WHERE id='".$id."'";
            $this->db->query($query);
        }
	
	
	// Methodes: Maillists
	public function getMailinglists() {
		
		$query	= 'SELECT * FROM mail_mailinglists ORDER BY id ASC;';
		return $this->db->query($query, true);
		
	}
		
	public function addMaillijst($name) {
		
		$query = 'INSERT INTO mail_mailinglists VALUES ("", "'.$name.'");';
		$this->db->query($query);		
		
	}
	
    public function editMailinglist($mailinglist_id, $mailinglist_name, $subscriber)
    {
        $query = 'UPDATE mail_mailinglists SET name="'.$mailinglist_name.'" WHERE id="'.$mailinglist_id.'"';
        $this->db->query($query);
        
        // Verwijder alle koppelingen naar deze maillijst
        $query = 'DELETE FROM mail_subscribers_mailinglists WHERE mailinglist="'.$mailinglist_id.'"';
        $this->db->query($query);
        
        // Voeg nieuwe koppelingen toe
        foreach($subscriber as $subscriber_id):
        
			$query = 'INSERT INTO mail_subscribers_mailinglists VALUES ("", "'.$subscriber_id.'", "'.$mailinglist_id.'");';
			$this->db->query($query);		
        
        endforeach; 
        
    }

	public function deleteMailinglistByID($mailinglist_id) {
		
		$query = 'DELETE FROM mail_mailinglists WHERE id = '.$mailinglist_id.';';
		$this->db->query($query);
		
	}
		
	public function getSubscriberByID($subscriber_id) {
		
		$query	= 'SELECT * FROM mail_subscribers WHERE id = "'.$subscriber_id.'";';
		$array = $this->db->query($query, true);
		return $array[0];
		
	}

	public function getSubscribersByMailinglist($mailinglist_id) {
		
		$query	= 'SELECT subscriber FROM mail_subscribers_mailinglists WHERE mailinglist = "'.$mailinglist_id.'" ORDER BY id ASC;';
		$subscriber_ids = $this->db->query($query, true);
		$subscribers = array();
		
		foreach($subscriber_ids as $subscriber_id):
		
			$subscriber = $this->getSubscriberByID( $subscriber_id->subscriber );
			array_push($subscribers, $subscriber);
		
		endforeach;

		return $subscribers;

	}
	
	public function getMailinglistNameByID($mailinglist_id) {
		
		$query	= 'SELECT name FROM mail_mailinglists WHERE id="'.$mailinglist_id.'";';
		$array = $this->db->query($query, true);
		return $array[0]->name;

	}
	



	// Methodes: Newsletter
	public function addNewsletter($name) {
		
		$query = 'INSERT INTO mail_newsletter VALUES ("", "", "'.$name.'", "", "");';
		$this->db->query($query);		
		
	}


	


	
	// Methodes: Overige
	public function getCurrentUsersName() {
        return 'admin'; // Todo: echte data ophalen
	}

}

?>
