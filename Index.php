<?php
  session_start();
?>

<!DOCTYPE html>
<!--Tobi-->
<html>
<head>
	<title>Three Six Twelve: Retail and Wholesale</title>
	<link rel ="icon" type ="image/ico" href="CSS/images/TitleIcon.png">

	<div id="TitleIcon"> <link rel="stylesheet" type="text/css"  href="CSS/IndexStyle.css"></div>


	
	<?php 			  $url1 = "location.href = 'Login.php';";
					  $url2 = "location.href = 'Register.php';";
					  $value1 ="";
					  $value2 ="";
					  
	if (isset($_SESSION['userID'])) {	
	$value1 = $_SESSION['UserName'];}
	else
	{
	$value1 ="Login";
	$url1 = "location.href = 'Login.php';";
	}
	
	if (isset($_SESSION['userID'])) {	
	$value2 = "Logout";
	$url2 = "location.href = 'Logout.php';";}
	else{$value2 ="Register";}
					   
					  
	
	
	?>
	
	
  
</head>
<body>
	<nav>
			<!--The navigation bar for the homepage!-->
			<div class = "NavBar" height="100%" width="100%">
				<!--Logo of the Three Six Twelve Company !-->
				<a href = "#">
					<img id="MainLogo" src = "CSS/images/MainLogo.png" class = "logo" alt = "Three Six Twelve" align = "left" height="100%" width="100%">
				</a>
				
				<!--Search bar within the navigation tab!-->
				<div class = "search-container">
					<form action = "/action_page.php">
						<input type = "text" placeholder = "Search.." name = "Search" id="SearchBar">
						<button type = "submit" id="" ="Magnifier"><img src="CSS/images/SearchButton.png" /></button>
					</form>
				</div>
				
				
					  
				<button onclick="location.href = 'BrowseCatalogue.html';" class ="Navigation">Catalogue</button>
				<button onclick="location.href = 'MyCart.html';" class ="Navigation">My Cart</button>
				<button onclick="location.href = 'Help.html';" class ="Navigation">Help</button>
				<button onclick="<?php echo $url1 ?>" type = "submit" class ="Navigation" id="myButton"><?php echo $value1?></button>
				<button onclick="<?php echo $url2 ?>" class ="Navigation" id="myButton"><?php echo $value2?></button>
				
				
				  
				 
				
			</div>
		</nav>



<!--SlideShowBackgrund-->
<div id="SlideShowBox1">
  <a href="Sale.php"><img src="CSS/images/SaleBanner.png" alt="Sale" class="Banner" width="90" height="150"></a>
<!--Container 1-->
  <div class="Folder"><a href="Sale.php">
  	<img src="ProductImages/1.jpg" id='Slide11' class="Container1" width="394" height="400">
    <img src="ProductImages/2.jpg" id='Slide12' class="Container1" width="394" height="400">
    <img src="ProductImages/3.jpg" id='Slide13' class="Container1" width="394" height="400">
    <img src="ProductImages/4.jpg" id='Slide14' class="Container1" width="394" height="400">
  
<!--Container 2-->
    <img src="ProductImages/5.jpg" id='Slide21' class="Container2" width="394" height="400">
    <img src="ProductImages/6.jpg" id='Slide22' class="Container2" width="394" height="400">
    <img src="ProductImages/7.jpg" id='Slide23' class="Container2" width="394" height="400">
    <img src="ProductImages/8.jpg" id='Slide24' class="Container2" width="394" height="400">

<!--Container 3-->
    <img src="ProductImages/9.jpg"  id='Slide31' class="Container3" width="394" height="400">
    <img src="ProductImages/10.jpg" id='Slide32' class="Container3" width="394" height="400">
    <img src="ProductImages/11.jpg" id='Slide33' class="Container3" width="394" height="400">
    <img src="ProductImages/12.jpg" id='Slide34' class="Container3" width="394" height="400">
  </div>
</div>


<div id="SlideShowBox2">
  <a href="NewArrival.php"><img src="CSS/images/NewArrivalBanner.png" alt="New Arrival" class="Banner" width="90" height="150"></a>
<!--Container 1-->
  <div class="Folder"><a href="NewArrival.php">
    <img src="ProductImages/13.jpg" id='Slide11' class="Container1" width="394" height="400">
    <img src="ProductImages/14.jpg" id='Slide12' class="Container1" width="394" height="400">
    <img src="ProductImages/15.jpg" id='Slide13' class="Container1" width="394" height="400">
    <img src="ProductImages/16.jpg" id='Slide14' class="Container1" width="394" height="400">
  
<!--Container 2-->
    <img src="ProductImages/17.jpg" id='Slide21' class="Container2" width="394" height="400">
    <img src="ProductImages/18.jpg" id='Slide22' class="Container2" width="394" height="400">
    <img src="ProductImages/19.jpg" id='Slide23' class="Container2" width="394" height="400">
    <img src="ProductImages/20.jpg" id='Slide24' class="Container2" width="394" height="400">
  
<!--Container 3-->
    <img src="ProductImages/21.jpg"  id='Slide31' class="Container3" width="394" height="400">
    <img src="ProductImages/22.jpg" id='Slide32' class="Container3" width="394" height="400">
    <img src="ProductImages/23.jpg" id='Slide33' class="Container3" width="394" height="400">
    <img src="ProductImages/24.jpg" id='Slide34' class="Container3" width="394" height="400">
  </div>
</div>







<div class="container">
  <div class="slideshow_wrapper">
    <div class="slideshow">

    	<div class="slide_one slide">
        </div>
</div>
</div>
</body>
</html>
