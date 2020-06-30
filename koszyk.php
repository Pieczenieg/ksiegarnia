<?php
	
	
	
	include("connect.php");
	include("klasa.php");
	session_start();
	$_SESSION['url'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Między stronami - księgarnia internetowa</title>
    <meta name="description" content="Nowoczesna księgarnia internetowa.">
    <meta name="keywords"
        content="księgarnia, internetowa, nowoczesna, książki, zakupy, online, miedzy, stronami, między, stronami">

    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css2/style.scss">
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link rel="stylesheet" href="css2/owl.carousel.css">

</head>

<body>
    <!--START NAVBAR-->
    <nav class="navbar navbar-light bg-light justify-content-between">
        <!--LOGO LEFT CORNER-->
        <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" style="width: 70px; height: 50px;">
        </a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <!--START MENU RIGHT CORNER-->
        <ul class="navbar-nav d-inline-block">
            <li class="nav-item d-inline-block">
                <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:30px;"></i></a>
            </li>
            <li class="nav-item d-inline-block" style="margin-left: 10px;">
                <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true" style="font-size:30px;"></i></a>
            </li>
            <!--END MENU RIGHT CORNER-->
        </ul>
        <!--END NAVBAR-->
    </nav>
    <div class="container sticky-top">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php"> Strona główna <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="kategoria.php?type=books"> Promocje </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="kategoria.php?type=audiobooks"> Bestsellery </a>
                    </li>
					<li class="nav-item">
                      <a class="nav-link" href="kategoria.php?type=books"> Książki papierowe </a>
                    </li>
					<li class="nav-item">
                      <a class="nav-link" href="kategoria.php?type=ebooks"> Ebooki </a>
                    </li>
					<li class="nav-item">
                      <a class="nav-link" href="kategoria.php?type=audiobooks"> Audiobooki </a>
                    </li>
					<li class="nav-item">
                      <a class="nav-link" href="#"> Konto </a>
                    </li>
					<li class="nav-item">
                      <a class="nav-link" href="koszyk.php"> Koszyk </a>
                    </li>
                  </ul>
                </div>
            </nav>
        </div>
    </div>

    <!--START CONTENT-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6" style="border: 3px solid;">
           <?php
				if (empty($_SESSION['koszyk']))
				{
					$_SESSION['koszyk'] = array();
					echo 'Koszyk jest pusty';
					
					
				}
				
				
				foreach ($_SESSION['koszyk'] as $value)
				{
					echo' 
						<div class="row m-3">
							<div class="col-md-5 col-sm-4">
								<img src="img/'.$value->tytul.'.png" style="max-width: 200px; max-height: 580px;">
							</div>
							
							<div class="col-md-3 col-sm-2 " style="margin-top: 15%;">
								<ul>
									<li>'.$value->tytul.'</li>
									<li>'.$value->author.'</li>
									<li><input type = "number" value = "'.$value->ilosc.'" min=1 name = "ilosc"/></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-2 text-center" style="margin-top: 15%;">
								<form action = "del.php" method="GET">
									<button style="float: right; width: 80px; height: 50px;" name = "del" type="submit" value="'.$value->tytul.'"><i class="fa fa-trash" aria-hidden="true"></i></button>
									<span style=" line-height: 60px;">'.$value->cena.'</span>
								</form>

							</div>
						</div>
					';
				}
			?>
            </div>
        <!--Koniec Opisu (tu pentla kończy się)-->
            <div class="col-md-4 col-sm-6 text-center" style="border: 3px solid;">
                <ul style="list-style: none; margin-top: 30%;">
                    <li>
                    <a> Suma </a>
                    </li>
                    <li>
                    <button><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:30px;"></i></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--END CONTENT-->


    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">
        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">
            <div class="row mt-3">
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 float-left">
                    <h6 class="text-uppercase font-weight-bold">Kontakt</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> Zapaść 99-999 </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> BC@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> Tel. 123 456 789</p>
                    <p>
                        <i class="fas fa-clock mr-3"></i> 06:00-22:00</p>
                </div>
                <div class="col-md-8 mx-auto mb-4 text-center">
                    <div id="googleMap" style="width:100%;height:400px;"></div>

                    <script>
                        function myMap() {
                            var mapProp = {
                                center: new google.maps.LatLng(51.508742, -0.120850),
                                zoom: 5,
                            };
                            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                        }
                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
                </div>
            </div>
        </div>
        </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> BCH</a>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>

</body>

</html>