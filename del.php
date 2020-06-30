<?php

include("connect.php");
require("klasa.php");
session_start();

$del = $_GET['del'];
$x = $_SESSION['i'];






for ($i=1;$i<$x;$i++)
{
	
		
	
	if ($_SESSION['koszyk'.$i]->tytul == $del)
	{
		unset($_SESSION['koszyk'.$i]);
	}
		
		
	
}

$url = $_SESSION['url'];
header ("Location: $url");

?>