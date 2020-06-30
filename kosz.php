<?php

include("connect.php");
include("klasa.php");
session_start();

if (!isset($_SESSION['i']))
{
	$_SESSION['i'] = 1;
}



$title = $_GET['title'];
$type = $_GET['type'];
$ilosc = $_GET['ilosc'];

$sql = "SELECT * FROM $type WHERE title = '$title'";

$zap = $conn->query($sql);
$tab = $zap->fetch_assoc();


global $exists;

$p = new produkt($tab['title'], $tab['autor'], $tab['price'], $type, $ilosc);

if (!isset($_SESSION['koszyk']))
{
	$_SESSION['koszyk']=array();
}

$exists = true;

for ($i=1;$i<$_SESSION['i'];$i++)
{
	if ($_SESSION['koszyk'.$i]->tytul == $title)
	{
		$_SESSION['koszyk'.$i]->ilosc = $_SESSION['koszyk'.$i]->ilosc + $ilosc;
		$exists = false;
		
	}
	
}


if ($exists == true)
{
	
	
	$_SESSION['koszyk'.$i] = $p;
	$_SESSION['i']++;
}





$url = $_SESSION['url'];
header ("Location: $url");







?>