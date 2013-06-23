<?php 

include("class/user.php"); 

session_start();

if (isset($_GET['logout'])){
	session_destroy();
	header( 'Location: index.php' );
	exit;
} elseif (isset($_POST['userName']) and isset($_POST['password'])){ 
	$_SESSION['user'] = new user($_POST['userName'],$_POST['password']);
}

function checkUserStatus(){
    if (isset($_SESSION['user'])){
		$_SESSION['user']->checkStatus();
	} else { 
		include ("view/login.php"); 
	}
}
  
function setNavBar(){
	if (isset($_SESSION['user'])){
		$_SESSION['user']->getNavBar();
	}
}

function access(){
	if (!isset($_SESSION['user'])){
		echo "muted";
	}
}

function getMain(){
	include ("view/home.php");
}

?>
