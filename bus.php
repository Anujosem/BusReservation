<html>

<head>
	<style>
		body {
			background-color: peach;
		}

		#heading {
			color: red;
			font-size: 300%;
			font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
		}

		h6 {
			color: black;
			font-family: courier;
			font-size: 160%;

		}
	</style>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	 crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	 crossorigin="anonymous"></script>
</head>

<body>


	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">PLAN YOUR JOURNEY</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Helpline number</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
					 aria-expanded="false">
						Bus type
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">ordinary</a>
						<a class="dropdown-item" href="#">fast passenger</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">low floor A/C</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Team</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<br>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="11.jpg" alt="First slide" width="70" height="500">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="d.jpg" alt="Second slide" width="70" height="500">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="b.jpg" alt="Third slide" width="70" height="500">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>


	<form action="/action_page.php">
		FROM:
		<br>
		<input type="text" name="FROM" value="PLACE1" size="60">
		<br> TO:
		<br>
		<input type="text" name="TO" value="PLACE2" size="60">
		<br>
		<br>
		<input type="submit" value="Search" size="30">
		<br>
		<br>
		<br>
		<a href="login4.html">book your seats now</a>
	</form>
</body>

</html>



<?php

include("config.php");
session_start();
if(isset($_GET['Search']))
{

    $myPLACE1=$_GET['PLACE1'];
    $myPLACE2=$_GET['PLACE2'];

    $sql="Select * from `travel` where place1='$myPLACE1' and place2='$myPLACE2'";

    $result=mysqli_query($conn ,$sql);
    $count=mysqli_num_rows($result);
    if($count>0){
        $_SESSION['login_place']=$myPLACE1;
        header("location :");
       $row= mysqli_fetch_array($result);
       var_dump($row);
    }
}
?>