<?php
$servername = "localhost";
$username = "petrovsn";
$password = "prosto@grav&T";
$dbname = "petrovsn_test";


try {
//Creating connection for mysql
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Assignment 8 Template</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/main.css">
	<!-- 
	Author: 	Ellen Bajcar et al
	Program: 	template.html
	Date: 		Summer 2017
	Update: 		 
	Version: 	a7.s2017.27.07
	Purpose: 	template for Assignment 7 SYST10199 Web Development
	Source: 	various
	Copyright: 
		This work is the intellectual property of Sheridan College. 
		Any further copying and distribution outside of class must be within 
		the copyright law. Posting to commercial sites for profit is prohibited.
	Dependencies:
		bg3.jpg canvasLogo.js games.css loginForm.html template.html anyGame.html
	Description:
		see instructions.html
	-->	
</head>
<body class="w3-light-grey w3-content">
<!-- 
	id's : mySidebar, myCanvas, closeMenu, myOverlay, portfolio, barMenu, jsgames, otherapps, contact
	
 -->
	<!-- Sidebar/menu -->
	<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" id="mySidebar">
        <div class="w3-container">
		    <a class="w3-hide-large w3-right w3-padding w3-hover-grey" href="#" id="closeMenu" title="close menu">
				<i class="fa fa-remove"></i>
			</a>
            <canvas height="160" id="myCanvas" width="280"></canvas>
			<hr>
            <a href="loginForm.php" target="_self"><button class="w3-button w3-black" title="LOGIN/LOGOUT toggle">LOGIN</button></a>
			<a href="loginForm.php"><button class="w3-button w3-gray">
				<i class="fa fa-address-card w3-margin-right" title="Membership"></i>Membership
			</button></a>
        </div>
		
        <div class="w3-bar-block w3-text-orange">
            <a class="w3-bar-item w3-button w3-padding" href="#jsgames">
				<i class="fa fa-gamepad fa-fw w3-margin-right"></i>JAVASCRIPT GAMES
			</a>
            <a class="w3-bar-item w3-button w3-padding" href="#phpgames">
				<i class="fa fa-gamepad fa-fw w3-margin-right"></i>PHP GAMES
			</a> 
			<a class="w3-bar-item w3-button w3-padding" href="#contact">
				<i class="fa fa-newspaper-o fa-fw w3-margin-right"></i>NOTEWORTHY
			</a>
        </div>
		
        <div class="w3-panel w3-wide w3-text-gray">
			<i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i> 
			<i class="fa fa-snapchat w3-hover-opacity"></i> 
			<i class="fa fa-pinterest-p w3-hover-opacity"></i> 
			<i class="fa fa-twitter w3-hover-opacity"></i> 
			<i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
    </nav>
	
	<!-- Overlay effect when opening sidebar on small screens -->  
	<div class="w3-overlay w3-hide-large w3-animate-opacity" id="myOverlay" title="close side menu"></div>

<!-- !PAGE CONTENT! -->
<main class="w3-main">

	<!-- Header -->
    <header id="portfolio">       
		<span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" id="barMenu">
		<i class="fa fa-bars"></i></span>
        <div class="w3-container">
            <h1><b>Games &amp; Other Web Apps</b></h1>
        </div>
    </header>
  
	<!-- First game grid--> 
    <div class="w3-row-padding" id="jsgames">
        <div class="w3-third w3-container w3-margin-bottom">
			<div class="meme">  
				<a href="content/ttt/tttGame.php" target="_self">
					<img alt="Play Tic Tac Toe! (Javascript version)" class="w3-hover-opacity" src="images/bg3.jpg">
					<h1>classic<sub>js</sub></h1> 		     
					<h2>tic-tac-toe</h2>				
				</a>
			</div>		           
            <section class="w3-container w3-white">
                <h6>Play Tic Tac Toe!</h6>
                <p>A two-player game. Players take turns selecting one of nine cells to claim a row, 
				column or diagonal to win. Play against the machine!</p>
                <p class="w3-text-orange w3-right-align">
					<i class="fa fa-star w3-hover-opacity"></i> 
					<i class="fa fa-star w3-hover-opacity"></i> 
					<i class="fa fa-star w3-hover-opacity"></i> 
					<i class="fa fa-star-half-o"></i> 
					<i class="fa fa-star-o w3-hover-opacity last-star"></i>
					<a href="loginForm.html"><i class="fa fa-comments w3-hover-opacity w3-text-gray"></i></a>
					<i class="fa fa-bar-chart w3-hover-opacity w3-right-align w3-text-gray last"></i>
				</p>
            </section>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
			<div class="meme">  
				<a href="content/tttUlt/tttGameUltimate.php" target="_self">
					<img alt="Play Ultimate Tic Tac Toe!" class="w3-hover-opacity" src="images/bg3.jpg">
					<h1>ultimate<sub>js</sub></h1> 		     
					<h2>tic-tac-toe</h2>				
				</a>
			</div>		
 
            <section class="w3-container w3-white">
                <h6>Play Ultimate Tic Tac Toe!</h6>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta 
				lectus vitae, ultricies congue gravida diamnon fringilla.</p>
                <p class="w3-text-orange w3-right-align">
					<i class="fa fa-star w3-hover-opacity"></i> 
					<i class="fa fa-star w3-hover-opacity"></i> 
					<i class="fa fa-star w3-hover-opacity"></i> 
					<i class="fa fa-star w3-hover-opacity"></i> 
					<i class="fa fa-star-half-o w3-hover-opacity last-star"></i>					
					<a href="loginForm.html"><i class="fa fa-comments w3-hover-opacity w3-text-gray"></i></a>
					<i class="fa fa-bar-chart w3-hover-opacity w3-right-align w3-text-gray last"></i>				
				</p>
            </section>
        </div>
        <div class="w3-third w3-container">
			<div class="meme">  
				<a href="content/rps/rpsGameScript.php" target="_self">
					<img alt="Play RPS! (Javascript version)" class="w3-hover-opacity" src="images/bg3.jpg">
					<h1>classic<sub>js</sub></h1> 		     
					<h2>rock-paper-scissors</h2>				
				</a>
			</div>	
            <section class="w3-container w3-white">
                <h6>Play Rock Paper Scissors!</h6>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus 
				vitae, ultricies congue gravida diam non fringilla.</p>
                <p class="w3-text-orange w3-right-align">
					<i class="fa fa-star w3-hover-opacity"></i> 
					<i class="fa fa-star w3-hover-opacity"></i> 
					<i class="fa fa-star w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity last-star"></i>					
					<a href="loginForm.html"><i class="fa fa-comments w3-hover-opacity w3-text-gray"></i></a>
					<i class="fa fa-bar-chart w3-hover-opacity w3-right-align w3-text-gray last"></i>				
				</p>
            </section>
        </div>
    </div>
  
	<!-- Second game grid-->
    <div class="w3-row-padding" id="otherapps">
        <div class="w3-third w3-container w3-margin-bottom">
			<div class="meme">  
				<a href="content/tttPhp/tttGame.php" target="_self">
					<img alt="Play Tic Tac Toe! (PHP version)" class="w3-hover-opacity" src="images/bg3.jpg">
					<h1>classic<sub>php</sub></h1> 		     
					<h2>tic-tac-toe</h2>				
				</a>
			</div>	
            <section class="w3-container w3-white">
                <h6>Play Tic Tac Toe!</h6>
                <p>(php version) Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, 
					porta lectus vitae, ultricies congue gravida diamnon fringilla. </p>
                <p class="w3-text-orange w3-right-align">
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity last-star"></i>					
					<a href="loginForm.html"><i class="fa fa-comments w3-hover-opacity w3-text-gray"></i></a>
					<i class="fa fa-bar-chart w3-hover-opacity w3-right-align w3-text-gray last"></i>	
				</p>
            </section>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
			<div class="meme">  
				<a href="content/rpsls/rpsls.php" target="_self">
					<img alt="Play RPSLS! (PHP version)" class="w3-hover-opacity" src="images/bg3.jpg">
					<h1>extended<sub>php</sub></h1> 		     
					<h2>rock-paper-scissors</h2>				
				</a>
			</div>	
            <section class="w3-container w3-white">
                <h6>Play rock-paper-scissors-lizard-spock!</h6>
                <p>(php version) Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, 
					porta lectus vitae, ultricies... <span class="more">more</span></p>
                <p class="w3-text-orange w3-right-align">
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity last-star"></i>					
					<a href="loginForm.html"><i class="fa fa-comments w3-hover-opacity w3-text-gray"></i></a>
					<i class="fa fa-bar-chart w3-hover-opacity w3-right-align w3-text-gray last"></i>	
				</p>
            </section>
        </div>
        <div class="w3-third w3-container">
            <img alt="More To Come Soon!" class="w3-hover-opacity" src="images/bg3.jpg">
            <section class="w3-container w3-white">
                <h6>More To Come Soon!</h6>
                <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies <a href="#">...more</a></p>
                <p class="w3-text-orange w3-right-align">
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity"></i> 
					<i class="fa fa-star-o w3-hover-opacity last-star"></i>					
					<a href="loginForm.html"><i class="fa fa-comments w3-hover-opacity w3-text-gray"></i></a>
					<i class="fa fa-bar-chart w3-hover-opacity w3-right-align w3-text-gray last"></i>	
				</p>
            </section>
        </div>
    </div><!-- Second game grid -->
 

	<footer class="w3-container w3-padding-32 w3-dark-grey">
		<div class="w3-row-padding" id="contact">
			<div class="w3-third my-news">
				<h3>NOTEWORTHY</h3>
				<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo
					condimentum, porta lectus vitae, ultricies.</p>
				<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo
					condimentum, porta lectus vitae, ultricies.</p>
			</div>
			<div class="w3-twothird">
				<h3>BLOG POSTS</h3>
				<ul class="w3-ul w3-hoverable">
					<li class="w3-padding-16">
						<span class="w3-large">Lorem</span><br>
						<span class="w3-tag w3-black w3-margin-bottom">play</span> 
						<span class="w3-tag w3-grey w3-small w3-margin-bottom">News</span> 
						<span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Games</span>
						<br><span>Sed mattis nunc</span>
					</li>
					<li class="w3-padding-16">
						<span class="w3-large">Ipsum</span><br>
						<span>Praes tinci sed</span>
					</li> 
				</ul>
			</div>
		</div>
	</footer>
</main> <!-- End page content -->  

<footer class="w3-black w3-center w3-padding-24">
	<address>Web Programming @ Sheridan College</address>
	<small>Powered by 
		<a href="https://www.w3schools.com/w3css/default.asp" 
				target="_blank" title="W3.CSS" class="w3-hover-opacity">w3.css</a>
	</small>	
</footer>
<script src="js/canvasLogo.js" defer></script>
<script defer>
document.getElementById("closeMenu").addEventListener("click", w3_close);
document.getElementById("barMenu").addEventListener("click", w3_open);
document.getElementById("myOverlay").addEventListener("click", w3_close);

// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>	
</body>
</html>