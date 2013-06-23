<?php
  include ("db.php");
  
  class user {
  	private $userName;
	private $rights;
	private $errorMSG;
	private $navBar;
    function user($inputedUserName, $inputedPassword) {	  
		$DB = new DBConfig('localhost','root','fish46','oopTest');
		$result = $DB->runQuery('SELECT * FROM User WHERE userName = "'.$inputedUserName.'"');
		if ($row = mysql_fetch_assoc($result)) {			// Found a user name
			$this->userName = $inputedUserName;
			if ($inputedPassword == $row['password']){		// Password correct
				$this->userName = $inputedUserName;
				$this->rights = $row['rights'];
			} else { $this->errorMSG = "Password Incorrect"; }	
		} else { $this->errorMSG = "User Name Not Found"; }
		$DB -> close();
	 }		 	
	 function checkStatus () {
	 	if (!empty($this->rights)){ 
			include ("view/status.php");
		} else {
			session_destroy();
			include ("view/login.php");
		}
	 } 
	 function getName(){ return $this->userName;}
	 function getAccessRights(){ return $this->accessRights;}
	 function getNavBar(){
	 	if ($this->rights == 'admin'){include ("view/navBarAdmin.php"); 
		} elseif ($this->rights == 'user'){include("view/navBarUser.php");}
	 }
	 function getErrorMSG(){ return $this->errorMSG;}
  }

?>