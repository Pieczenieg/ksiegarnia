<?php

include("connect.php");
include("klasa.php");
session_start();

$title = $_GET['title'];
$type = $_GET['type'];
$ilosc = $_GET['ilosc'];

$sql = "SELECT * FROM $type WHERE title = '$title'";

$zap = $conn->query($sql);
$tab = $zap->fetch_assoc();



$p = new produkt($tab['title'], $tab['autor'], $tab['price'], $type, $ilosc);

if (!isset($_SESSION['koszyk']))
{
	$_SESSION['koszyk']=array();
}



foreach ($_SESSION['koszyk'] as $koszyk)
{
	if ($koszyk->tytul == $title)
	{
		$koszyk->ilosc = $koszyk->ilosc + $ilosc;
		$exists = true;
	}
	else
	{
		$exists = false;
	}
}


if ($exists == false)
{
	
	$_SESSION['$title'] = $p;
	array_push($_SESSION['koszyk'], $_SESSION['$title'] );
}





$url = $_SESSION['url'];
header ("Location: $url");







?>