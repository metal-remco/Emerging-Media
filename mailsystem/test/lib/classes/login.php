<?php

//includes

include('db.php');

class login {

    //intitialisatie
    private $db;
    private $checkLogin;
   // private $editor;

    public function __construct() {
      //  $editor = false;

        $this->db = new db('localhost', 'root', '841nk2s', 'prj_2011_2012_emedia_med2d_t5');
    }

    public function checkLogin($username, $password) {
        $query = 'SELECT function FROM mail_users WHERE username ="'. $username .'" AND password = "'.$password.'"';
        $checkLogin = $this->db->getData($query);
        return $checkLogin;
    }

}

?>
