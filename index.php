<?php
	session_start();
	
	include("connect.php");
	include("klasa.php");
	
	$_SESSION['url'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
	

?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Między stronami - księgarnia internetowa</title>
    <meta name="description" content="Nowoczesna księgarnia internetowa.">
    <meta name="keywords" content="księgarnia, internetowa, nowoczesna, książki, zakupy, online, miedzy, stronami, między, stronami">
    

    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link rel="stylesheet" href="css2/owl.carousel.css">
    <link rel="stylesheet" href="css2/style.css">


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
                <a class="nav-link" href="koszyk.php"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:30px;"></i></a>
            </li>
            <li class="nav-item d-inline-block" style="margin-left: 10px;">
                <a class="nav-link" href="#"><i class="fa fa-user" aria-hidden="true" style="font-size:30px;"></i></a>
            </li>
            <!--END MENU RIGHT CORNER-->
        </ul>
        <!--END NAVBAR-->
    </nav>
    <!--START CONTAINER FOR SLAIDER-->
    <div class="container">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/nicolas.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/cage.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/nicolascage.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--END CONTAINER FOR SLAIDER-->
    </div>

    <div class="container sticky-top">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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

    <div class="container">

            <div class="row col-md-12 text-center">
                <h1>Promocje</h1>
				<div class="owl-carousel owl-theme">
				<?php
					$type = 'books';
					$sql = "SELECT * FROM $type";
					$zap = $conn->query($sql);
					while ($tab = $zap->fetch_assoc())
					{
						echo '
						
							<div class="item">
								<div class="card" style="height: 300px;">
									<img class="card-img-top" src="img/'.$tab['title'].'.png" alt="Card image cap" style="max-height:150px; width: 80%;
                  margin-left: 20px;">
									<div class="card-body">
										<a href="podglad.php?title='.$tab['title'].'&type='.$type.'" class="card-link">'.$tab['title'].'</a><br />
										<p style="font-weight:bold;">'.$tab['price'].'</p>
										<form action="kosz.php" method="get">
											<input type="text" value = "'.$tab['title'].'" name = "title" style="display:none;" />
											<input type="text" value = "'.$type.'" name = "type" style="display:none;" />
											<input type = "number" min=1 value=1 name= "ilosc" style="width:25%;">
											<input type = "submit" value = "Do koszyka" />
										</form>
									</div>
								</div>
							</div>
							
							
						';
					}
				?>
				</div>
            </div>
            <div class="row col-md-12 text-center">
                <h1>Bestsellery</h1>
                <div class="owl-carousel owl-theme">
                    <?php
					$type = 'audiobooks';
					$sql = "SELECT * FROM $type";
					$zap = $conn->query($sql);
					while ($tab = $zap->fetch_assoc())
					{
						echo '
						
							<div class="item">
								<div class="card" style="height: 300px;">
									<img class="card-img-top" src="img/'.$tab['title'].'.png" alt="Card image cap" style="max-height:150px; width: 80%;
                  margin-left: 20px;">
									<div class="card-body">
										<a href="podglad.php?title='.$tab['title'].'&type='.$type.'" class="card-link">'.$tab['title'].'</a><br />
										<p style="font-weight:bold;">'.$tab['price'].'</p>
										<form action="kosz.php" method="get">
											<input type="text" value = "'.$tab['title'].'" name = "title" style="display:none;" />
											<input type="text" value = "'.$type.'" name = "type" style="display:none;" />
											<input type = "number" min=1 value=1 name= "ilosc" style="width:25%;">
											<input type = "submit" value = "Do koszyka" />
										</form>
									</div>
								</div>
							</div>
							
							
						';
					}
				?>
                </div>
            </div>
            <div class="row col-md-12 text-center">
                <h1>Książki papierowe</h1>
                <div class="owl-carousel owl-theme">
                    <?php
					$type = 'books';
					$sql = "SELECT * FROM $type";
					$zap = $conn->query($sql);
					while ($tab = $zap->fetch_assoc())
					{
						echo '
						
							<div class="item">
								<div class="card" style="height: 300px;">
									<img class="card-img-top" src="img/'.$tab['title'].'.png" alt="Card image cap" style="max-height:150px; width: 80%;
                  margin-left: 20px;">
									<div class="card-body">
										<a href="podglad.php?title='.$tab['title'].'&type='.$type.'" class="card-link">'.$tab['title'].'</a><br />
										<p style="font-weight:bold;">'.$tab['price'].'</p>
										<form action="kosz.php" method="get">
											<input type="text" value = "'.$tab['title'].'" name = "title" style="display:none;" />
											<input type="text" value = "'.$type.'" name = "type" style="display:none;" />
											<input type = "number" min=1 value=1 name= "ilosc" style="width:25%;">
											<input type = "submit" value = "Do koszyka" />
										</form>
									</div>
								</div>
							</div>
							
							
						';
					}
				?>
                </div>
            </div>
            <div class="row col-md-12 text-center">
                <h1>Audiobooki</h1>
                <div class="owl-carousel owl-theme">
                   <?php
					$type = 'audiobooks';
					$sql = "SELECT * FROM $type";
					$zap = $conn->query($sql);
					while ($tab = $zap->fetch_assoc())
					{
						echo '
						
							<div class="item">
								<div class="card" style="height: 300px;">
									<img class="card-img-top" src="img/'.$tab['title'].'.png" alt="Card image cap" style="max-height:150px; width: 80%;
                  margin-left: 20px;">
									<div class="card-body">
										<a href="podglad.php?title='.$tab['title'].'&type='.$type.'" class="card-link">'.$tab['title'].'</a><br />
										<p style="font-weight:bold;">'.$tab['price'].'</p>
										<form action="kosz.php" method="get">
											<input type="text" value = "'.$tab['title'].'" name = "title" style="display:none;" />
											<input type="text" value = "'.$type.'" name = "type" style="display:none;" />
											<input type = "number" min=1 value=1 name= "ilosc" style="width:25%;">
											<input type = "submit" value = "Do koszyka" />
										</form>
									</div>
								</div>
							</div>
							
							
						';
					}
				?>
                </div>
            </div>
            <div class="row col-md-12 text-center">
                <h1>E-booki</h1>
                <div class="owl-carousel owl-theme">
                    <?php
					$type = 'ebooks';
					$sql = "SELECT * FROM $type";
					$zap = $conn->query($sql);
					while ($tab = $zap->fetch_assoc())
					{
						echo '
						
							<div class="item">
								<div class="card" style="height: 300px;">
									<img class="card-img-top" src="img/'.$tab['title'].'.png" alt="Card image cap" style="max-height:150px; width: 80%;
                  margin-left: 20px;">
									<div class="card-body">
										<a href="podglad.php?title='.$tab['title'].'&type='.$type.'" class="card-link">'.$tab['title'].'</a><br />
										<p style="font-weight:bold;">'.$tab['price'].'</p>
										<form action="kosz.php" method="get">
											<input type="text" value = "'.$tab['title'].'" name = "title" style="display:none;" />
											<input type="text" value = "'.$type.'" name = "type" style="display:none;" />
											<input type = "number" min=1 value=1 name= "ilosc" style="width:25%;">
											<input type = "submit" value = "Do koszyka" />
										</form>
									</div>
								</div>
							</div>
							
							
						';
					}
				?>
                </div>
            
            

        </div>
 
     
    <div class="container">
        <h1 class="text-center">ABOUTUS</h1>
        <a>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis tempor arcu, sit amet faucibus orci. Maecenas dictum, risus ac dignissim consequat, sem diam viverra ligula, mollis vestibulum leo mauris eget diam. Vivamus et turpis vulputate, ornare dolor in, maximus turpis. Curabitur eu tellus orci. Pellentesque cursus nulla sed libero accumsan, vel varius neque aliquam. Vestibulum tortor eros, tristique nec neque quis, feugiat fringilla ligula. Maecenas dolor neque, blandit ut interdum et, gravida aliquet dolor. Maecenas egestas enim velit, ut sagittis urna tincidunt tempus. Vivamus eget risus sed nunc fermentum convallis sed id nibh. Maecenas et ultrices risus, vitae fermentum mauris. Aenean non faucibus sapien. Sed id condimentum lorem, eget iaculis nulla.
        </a>
       
    </div>



    <div class="container">
        <hr>
        <h1 class="text-center">Współpraca</h1>
        <a>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis tempor arcu, sit amet faucibus orci. Maecenas dictum, risus ac dignissim consequat, sem diam viverra ligula, mollis vestibulum leo mauris eget diam. Vivamus et turpis vulputate, ornare dolor in, maximus turpis. Curabitur eu tellus orci. Pellentesque cursus nulla sed libero accumsan, vel varius neque aliquam. Vestibulum tortor eros, tristique nec neque quis, feugiat fringilla ligula. Maecenas dolor neque, blandit ut interdum et, gravida aliquet dolor. Maecenas egestas enim velit, ut sagittis urna tincidunt tempus. Vivamus eget risus sed nunc fermentum convallis sed id nibh. Maecenas et ultrices risus, vitae fermentum mauris. Aenean non faucibus sapien. Sed id condimentum lorem, eget iaculis nulla.
        </a>
       <hr>
    </div>

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
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/koszyk.js"></script>
    <script>
     $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:4
            },
            1000:{
                items:5
            }
        }
    })
    </script>

</body>

</html>