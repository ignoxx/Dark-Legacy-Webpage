<!DOCTYPE html>
<html lang="en">

<head>
	<title>Stellar Legacy | Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/main.css">
	<!-- Custom CSS -->
    <link href="CSS/half-slider.css" rel="stylesheet">
</head>

<body>
<!--Nav Bar-->
<nav class="navbar navbar-default">
  <div class="container-fluid titleHead" >
    <div class="navbar-header">
      <a class="navbar-brand titleClass" href="index.php">Stellar Legacy</a>
    </div>

    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<li role="presentation">
			<a href="index_register.php">Register</a>
		</li>
		
		<li role="presentation">
			<a href="index_ranking.php?page=1&rank_type=1">Ranking</a>
		</li>
		
		<li role="presentation">
			<?php
				include_once __DIR__ . '/../httpdocs/PHP/server_status.php';
			?>
		</li>
		
		<li role="presentation">
			<?php
				include_once __DIR__ . '/../httpdocs/PHP/users_online.php';
			?>
		</li>

      </ul>
	  
      <ul class="nav navbar-nav navbar-right pos">
		<li role="presentation">
			<a href="#">Download</a>
		</li>
      </ul>
	  
    </div>
  </div>
</nav>

<!-- Picture Slider Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
		<div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('Images/pic1.png');"></div>
                <div class="carousel-caption">
                    <h2><!-- Caption --></h2>
                </div>
            </div>
			
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('Images/pic2.png');"></div>
                <div class="carousel-caption">
                    <h2><!-- Caption --></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('Images/pic3.png');"></div>
                <div class="carousel-caption">
                    <h2><!-- Caption --></h2>
                </div>
            </div>
			
			<div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('Images/pic4.png');"></div>
                <div class="carousel-caption">
                    <h2><!-- Caption --></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
	
<!--Announce-->
<div class="container">
	<div class="jumbotron page-header">
	  <h1>Stellar Legacy<small>&copy;</small></h1>
	  <p>
	  Stellar-Legacy is a free to play Space-MMOG based on the Concept of DarkOrbit.<br>
	  Since DarkOrbit is going to be a Pay2Win Game the Stellar Legacy-Team decided to create an alternative Game
	  for DarkOrbit and Space-Game Fans.
			<ul>
				  <li>
				  What can I expect from this Game?
					<ul>
						<li>Fun!</li>
						<li>Awesome PvP/PvE Fights!</li>
						<li>Friendly and Fair Support</li>
						<li>Gameplay Like DarkOrbit</li>
						<li>No Pay2Win</li>
						<li>A lot of Features</li>
						<li>& much more!</li>
					</ul>
				  </li>
			</ul>
		</p>
	</div>


<!-- Videos -->
<div class="jumbotron page-header">
	<h1>Famous<small>Videos</small></h1>
	<iframe width=320 height=200 class="embed-responsive-item" src="https://www.youtube.com/embed/1Cd6cTm-sJU" frameborder="0"></iframe>
	<iframe width=320 height=200 class="embed-responsive-item" src="https://www.youtube.com/embed/oHX6_5zH2OE" frameborder="0"></iframe>
	<iframe width=320 height=200 class="embed-responsive-item" src="https://www.youtube.com/embed/tX2y7Vi475s" frameborder="0"></iframe>
</div>
	
	 <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                   <!-- <p>Copyright &copy;  2014</p> -->
                </div>
            </div>
            <!-- /.row -->
        </footer>
		
</div>	

	<!-- jQuery -->
    <script src="JS/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="JS/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 6000 //changes the speed
    })
    </script>
</body>

</html>
