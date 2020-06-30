function kosz(title)
{	

	
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		xhttp.open("GET", "kosz.php?title="+title+"&type="+type+"", true);
		xhttp.send();
	}
	

};