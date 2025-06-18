<!DOCTYPE html>
<html ng-app lang="en">
<head>
	<title>PORTFOLIO HOME PAGE</TITLE>
	<!--This will adjust view width to device size-->
	<meta name="viewport" content="width=device-width">

	<!-- Custom Styles CSS --CHANGED BOOTSTRAP MIN TO USE \CSS\bootstrap-->
	<link href="styles\icons3.css" rel="stylesheet">
	<link href="styles\navbarFlat.css" rel="stylesheet">
	

	<!-- Bootstrap core CSS-->
	<link href="scripts\bootstrap.minjb.css" rel="stylesheet">

	<!-- W3 CSS -->
	<link href="scripts\w3.css" rel="stylesheet">
	<link href="scripts\w3-themeFlat.css" rel="stylesheet">

	<style>
		body {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			color: #fff;
			text-align: center;
			overflow: hidden;
			background-color: black;

		}
	</style>
</head>

<body id="landingPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<?php
	include 'includes/navbar.php';
	?>
	<br>
	<br>

	<!------------------------------------------- CONTAINER (TEAM PORTALS) -------------------------------------------------------------->
	<div id="dashboard" class="content grid-containerink">

		<div class="ianda1">
			<div class="w3-padding floating-box-test" id="myHeader"><br><br>
				<!--"img src="images/main.jpg" alt="Image" style="width:50%"><br><br -->
				<div class="centered myfontL"><h1>PORTFOLIOS</H1><br>
					<p class="myfontS">Follows links below to sample my work</p>
				</div><br><br>
				<div class="centered-logo myfontLogo" >
				<img src="images2/arrow.png" alt="Image" style="width:40%"><br><br>
				</div><br>
			</div>
		</div></dv>
		<div class="ianda3">
					<ul style="list-style-type: none; padding: 0; margin: 0;">
						<li><a href="branded.php"><h1>WEB-DESIGN DEMO - BMX</a></i><br>
						<li><a href="npm.php">WEB-DESIGN DEMO - NPM</a></i><br>
						<li><a href="screen.php">SCREEN CAPTURES</a></i><br>
						<li><a href="documents.php">DIAGRAMS</a></i><br>
						<li><a href="icons.php">ICONS & LOGOS</a></i><br>
						<li><a href="posters.php">POSTERS</a></i><br>
						<li><a href="thinking.php">DESIGN ANALYSIS</a></i>
					</ul>	
		</div>
		<br><br>
</div>
</body>
</html>