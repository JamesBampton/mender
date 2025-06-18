<!DOCTYPE html>
<html ng-app lang="en">
<head>
	<title>BMX Store</title>
	<!--This will adjust view width to device size-->
	<meta name="viewport" content="width=device-width">

	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script type="text/javascript" src="scripts/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<script type="text/javascript" src="scripts/myscripts.js"></script>
	<script type="text/javascript" src="scripts/modaljb.js"></script>

	<!-- Custom Styles CSS --CHANGED BOOTSTRAP MIN TO USE \CSS\bootstrap-->
	<link href="styles2\cards3.css" rel="stylesheet">
	<link href="styles2\flip.css" rel="stylesheet">
	<link href="styles2\icons3.css" rel="stylesheet">
	<link href="styles2\navbarFlat.css" rel="stylesheet">
	<link href="styles2\carousel.css" rel="stylesheet">
	<link href="styles2\stylesFlat.css" rel="stylesheet">
	<link href="styles2\cardspin-test.css" rel="stylesheet">
	<link href="styles2\bootstrapjb.css" rel="stylesheet">

	<!-- Bootstrap core CSS-->
	<link href="scripts2\bootstrap.minjb.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!-- W3 CSS -->
	<link href="scripts2\w3.css" rel="stylesheet">
	<link href="scripts2\w3-themeFlat.css" rel="stylesheet">


	<script>
		$(document).ready(function() {
			$('[data-toggle="tooltip"]').tooltip({
				placement: "top"
			});
		});
	</script>

	<script type="text/javascript">
		// Popup Google Maps window
		function newPopup(url) {
			popupWindow = window.open(
				url, 'popUpWindow', 'height=500,width=600,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
		}
	</script>

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

		.content {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
			grid-template-rows: repeat(1, minmax(270px, auto));
			margin: 0px;
			grid-gap: 10px;
		}

		.card {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
			grid-template-rows: repeat(1, minmax(270px, auto));
			margin: 20px;
			grid-gap: 10px;
		}

		.cards {
			display: grid;
			grid-template-columns: repeat(1, minmax(300px, 1fr));
			grid-template-rows: repeat(1, minmax(270px, auto));
			margin: 20px;
			grid-gap: 10px;
		}

		@media only screen and (min-width: 768px) {
			.cards {
				display: grid;
				grid-template-columns: repeat(4, minmax(auto, 1fr));
				grid-template-rows: repeat(1, minmax(270px, auto));
				margin-left: 5%;
				margin-right: 5%;
				grid-gap: 10px;
				margin-top: 20px;			
			}
		}

		.blank2 {
			display: grid;
			grid-template-columns: repeat(1, minmax(300px, 1fr));
			grid-template-rows: repeat(1, minmax(270px, auto));
			margin: 0px;
			grid-gap: 10px;
			font-size: 35px;
			text-align: center;
			text-align: justify;
			padding-right: 20%;
			padding-left: 20%;
			padding-top:20px;
		}

		.inner-grid-container {
			display: grid;
			grid-template-columns: 10%, 90%;
			grid-template-rows: 100%;
			margin: 20px;
			grid-gap: 10px;
		}


		.inner-grid-itemnav {
			grid-area: vertnav;
		}

		.inner-grid-itemmain {
			grid-area: main;
		}

		.content .projectcard {
			position: absolute;
			top: calc(100% -2px);
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 1;
			opacity: 1.0;
			transition: 0.5s;
		}

		.content .layer {
			position: absolute;
			top: calc(100% -2px);
			left: 0;
			width: 100%;
			height: 100%;
			background: #2fc7cd;
			z-index: 1;
			opacity: 1;
			transition: 0.5s;
		}

		.content .card {
			position: relative;
			width: 100%;
			/*Height: 250px;*/
			margin-top: 0px;
			background: #333;
			padding-left: 0px;
			padding-right: 0px;
			padding-bottom: 0px;
			padding-top: 0px;
			box-sizing: border-box;
			text-align: center;
			border: 1px;
			border-radius: 5px;
			background: #fff;
			-webkit-box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
			box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
			overflow: hidden;
			border-style: solid;
			border-width: 5px;
		}

		.details {
			position: absolute;
			bottom: 0;
			left: 0;
			background: #fff;
			z-index: 4;
			width: 100%;
			height: 70px;
			box-sizing: border-box;
			padding: 6px;
			z-index: 1;
		}

		.details h2 {
			margin: 10px 0 0;
			padding: 0;
			font-size: 14px;
			text-align: center;
			color: #009FDB;
		}

		.details h2 span {
			color: #585858;
			font-size: 12px;
			opacity: .8;
			text-align: center;
		}

		.card-details {
			position: absolute;
			bottom: 0;
			left: 0;
			background: #fff;
			z-index: 4;
			width: 100%;
			height: 70px;
			box-sizing: border-box;
			padding: 6px;
			z-index: 1;
		}

		.card-details h2 {
			margin: 10px 0 0;
			padding: 0;
			font-size: 18px;
			text-align: center;
			color: #0057B8;
		}

		.card-details h2 span {
			color: #FFB000;
			font-size: 16px;
			opacity: .8;
			text-align: center;
		}


		.standard-font {
			color: #80cbc4;
			font-size: 16px;
			text-align: center;
			font-family: "ATT Aleck Cd", Arial, Helvetica, sans-serif;
		}

		.myfontL {
			color: #ffffff;
			font-size: 40px;
			text-align: center;
			font-family: "Anisette Std", Arial, Helvetica, sans-serif;
			letter-spacing: 0px;
		}

		.myfontlogo {
			color: #ffffff;
			font-size: 50px;
			text-align: left;
			font-family: "Anisette Std", Arial, Helvetica, sans-serif;
			letter-spacing: 5px;
			display: inline-flex;
		}

		.myfontS {
			color: #ffffff;
			font-size: 25px;
			text-align: center;
			font-family: "Anisette Std", Arial, Helvetica, sans-serif;
			letter-spacing: 5px;
		}

		#status_length {
			margin-left: 35px;
			margin-right: 0px;
		}

		.bs-example {
			margin: 20px;
			position: relative;
			background: grey;
			font-size: 12px;
		}

		.button {
			background-color: #FFB000;
			color: #fff;
			border-color: #AF29BB;
			justify-content: left;
		}

		.card-text em {
			text-align: middle;
			color: #000000;
			font-size: 16px;
			font-family: "ATT Aleck Cd", Arial, Helvetica, sans-serif;
			padding: 10px;
			font-style: normal;
		}

		.new-model-header {
			background-color: white;
			width: 100%;
			padding: 0px;
			margin: 0px;
		}

		.tag {
			text-align: right;
			padding-bottom: 10px;
		}

		.footer-details {
			text-align: middle;
			font-size: 12px;
			color: black;
			padding-bottom: 10px;
			font-family: "ATT Aleck Cd", Arial, Helvetica, sans-serif;
		}

		.footer {
			font-family: "ATT Aleck Cd", Arial, Helvetica, sans-serif;
			color: #707a5c;
			font-size: 10px;
			text-align: center;
		}


		/* Start Ink and Arch grid */

		.ianda1 {
			grid-area: header;
			margin-top: 0px
		}

		.ianda2 {
			grid-area: blank1;
		}

		.ianda3 {
			grid-area: cards;
		}

		.ianda6 {
			grid-area: blank2;
		}

		.ianda7 {
			grid-area: footer;
		}

		.ianda8 {
			grid-area: media;
		}

		.grid-containerink {
			display: grid;
			grid-template-columns: auto 100% auto;
			grid-template-areas:
				'header header'
				'cards cards'
				'blank2 blank2'
				'footer footer'
				'media media';
			grid-gap: 0px;
			background-color: black;
			padding: 0px;
		}

		.box2-padding {
			margin-left: 10%;
			padding-left: 0px;
			margin-right: 10%;
			padding-right: 0px;
		}


		.grid-containerink>div {
			background-color: black;
			text-align: center;
			padding: 0px;
			/*font-size: 60px;*/
			font-family: "ATT Aleck Cd", Arial, Helvetica, sans-serif;
			box-sizing: border-box;
		}

		/* End Ink and Arch grid */

		.sticky {
			position: sticky;
			left: 0;
			z-index: 1;
			background: lightblue;
		}

		.wrapper {
			width: 50px;
			height: 100%;
		}

		/*Social Media Buttons */
		.fab {
			padding: 0px;
			font-size: 65px;
			width: auto;
			text-align: center;
			text-decoration: none;
			margin: 0px 0px;
			border-radius: 50%;
		}

		.fab:hover {
			opacity: 0.7;
		}

		.fab-facebook {
			background: #3B5998;
			color: white;
		}

		.fab-instagram {
			background: #125688;
			color: white;
		}


		/* unvisited link */
		.a {

			color: hotpink;
		}

		/* unvisited link */
		p a {

			color: blue;
		}

		/* mouse over link */
		a:hover {
			color: hotpink;
		}

		/* End Social Media Buttons */

		ul li:hover {
			cursor: pointer;
		}

		address { 
  			font-size: 20px;
		}

		@media screen and (max-width: 900px) {
    	#special-image {
        width: 50%;
    }
}

		@media screen and (max-width: 400px) {
    	#special-image {
        width: 90%;
    }
}

	</style>
</head>

<body id="landingPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<?php
	include 'includes2/navbar.php';
	?>
	<br>
	<br>
	<!-- div><div class="floating-box-test">
  <img src="images2/mender-circle2.png"  alt="" style="width:16%">
  <br>
  <br>
  <div class="centered myfontL"> The MENDER </div></div>
  <p class="myfontS">No job too small...</p>
	</div-->

	<!------------------------------------------- CONTAINER (TEAM PORTALS) -------------------------------------------------------------->
	<div id="dashboard" class="content grid-containerink">

		<div class="ianda1">
			<div class="w3-padding floating-box-test" id="myHeader"><br><br>
				<img src="images2/main.jpg" alt="Image" id="special-image" style="width:50%"><br><br>
				<div class="centered myfontL">UK's No 1<br>
					<p class="myfontS">old skool bmx dealer...</p>
				</div><br><br>
				<div class="centered-logo myfontLogo" >
				<img src="images2/branded-logo-large2.png" alt="Image" style="width:50%"><br><br>
				</div><br><br>
			</div>
		</div>
		<div class="ianda3">
			<div class="cards">

				<!-- CARD 1 -->
				<div class="card" style="background:#2fc7cd;">
					<div class="projectcard">
						<div class="layer"></div>
						<!-- div class="cardimg" -->
						<p class="w3-circle w3-center" style="padding-top: 0%">
							<img src="images2/haro-logo1.jpg" style="height: 120px; width: 120px; border-radius: 90%; margin: 0%; bottom: 0; left: 0;"
								style="margin-bottom: 60px; padding-top:10px"
								alt="Avatar">
						</p>
						<div class="details">
							<h2 id="cardy" class="card-text"><em style="padding-right:5px; padding-left:1opx">Details & Contact</em><br>
								<span> Location, Profile, Contact</span>
							</h2>
						</div>
					</div>
				</div>
				<!-- CARD 2 -->
				<div class="card" style="background:#2fc7cd;">
					<div class="projectcard">
						<div class="layer"></div>
						<!-- div class="cardimg"-->
						<p class="w3-circle w3-center" style="padding-top: 0%">
							<img src="images2/diamondback1.jpg" style="height: 120px; width: 120px; border-radius: 10%; margin: 0%; bottom: 0; left: 0;"
								style="margin-bottom: 60px; padding-top:10px"
								alt="Avatar">
						</p>

						<div class="details">
							<h2 id="cardy" class="card-text"><em style="padding-right:5px; padding-left:1opx">Details & Contact</em><br>
								<span> Location, Profile, Contact</span>
							</h2>
						</div>
					</div>
				</div>
				<!-- CARD 3 -->
				<div class="card" style="background:#2fc7cd;">
					<div class="projectcard">
						<div class="layer"></div>
						<!-- div class="cardimg" -->
						<p class="w3-circle w3-center" style="padding-top: 0%">
							<img src="images2/kuwahara.jpg" style="height: 120px; width: 120px; border-radius: 10%; margin: 0%; bottom: 0; left: 0;"
								style="margin-bottom: 60px; padding-top:10px"
								alt="Avatar">
						</p>
						<div class="details">
							<h2 id="cardy" class="card-text"><em style="padding-right:5px; padding-left:1opx">Details & Contact</em><br>
								<span> Location, Profile, Contact</span>
							</h2>
						</div>
					</div>
				</div>
				<!-- CARD 4 -->
				<div class="card" style="background:#2fc7cd;">
					<div class="projectcard">
						<div class="layer"></div>
						<!-- div class="cardimg" -->
						<p class="w3-circle w3-center" style="padding-top: 0%">
							<img src="images2/redline.png" style="height: 120px; width: 120px; border-radius: 10%; margin: 0%; bottom: 0; left: 0;"
								style="margin-bottom: 60px; padding-top:10px"
								alt="Avatar">
						</p>
						<div class="details">
							<h2 id="cardy" class="card-text"><em style="padding-right:5px; padding-left:1opx">Details & Contact</em><br>
								<span> Location, Profile, Contact</span>
							</h2>
						</div>
					</div>
				</div>
				<!-- div class="ianda6"></div-->
			</div><br><br>
			
		</div>

		<div class="ianda6">
			<div class="blank2">
			<p><br>"Definitely, injuries are tough, and they happen to every athlete in every sport. The best athletes put it behind them and keep pushing forward. I haven't really had a choice; I've had so many injuries." - Jamie Bestwick</p>
		</div></div>
		
		<div class="ianda7">
			<img src="images2/berm-blue2.png" style="width:100%">
		</div>
			<div class="ianda8">
			<div class="w3-padding-large" id="myfooter" style="height:100%; padding: 0px; font-size:30px; background-color: #2cc7cdfe;">
				<div class=""><br><br>
					<p class="w3-animate-bottom"></p>
					<ul class="mediame">
						<li><a href="#" class="fab fa-instagram fa-2x"></a></i>
						<li><a href="#" class="fab fa-facebook-f fa-2x"></a></i>
					</ul>
				</div>

		<address class="w3-animate-bottom">
        <strong>Branded BMX</strong><br>
        123 Hoxton Street<br>
        London, EC3 TQY<br>
        United Kingdom<br>
		0181 4532876<br>
    	</address>
			</div>
			</div>
	</div>
</div>
</body>
</html>