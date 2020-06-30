<?php
session_start();

$del = $_GET['del'];

foreach($_SESSION['koszyk'] as $koszyk)
{
	if ($koszyk->tytul == $del)
	{
		unset($_SESSION['koszyk'][$del]);
	}
}



?>