<?php

clearstatcache();

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy();

if(!isset($_SESSION))
{ 
	header('Location: signin.php'); 
}

?>