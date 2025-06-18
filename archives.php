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

		/* .blank2 {
			display: grid;
			grid-template-columns: repeat(1, minmax(300px, 1fr));
			grid-template-rows: repeat(1, minmax(270px, auto));
			margin: 20px;
			grid-gap: 10px;
			font-size: 35px;
			text-align: center;
			text-align: justify;
			padding-right: 20%;
			padding-left: 20%;
			padding-top:20px;
		} */

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

		.standard-font {
			color: #80cbc4;
			font-size: 16px;
			text-align: center;
			font-family: "ATT Aleck Cd", Arial, Helvetica, sans-serif;
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
		.ianda6 {
			grid-area: blank2;
            display: flex;
            justify-content: center;
            align-items: center;
            /*min-height: 100vh;*/
            margin: 0;
            background-color: #f0f0f0;
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

  /*   .card-container {
      display: flex;
      gap: 20px;
    } */

    .cardy {
      width: 100%;
      height: 300px;
      /* background-color: #ffffff;*/
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.2rem;
      font-family: Arial, sans-serif;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    /* .card-container {
        display: grid;
        grid-template-columns: repeat(3, minmax(400px, 1fr));
        grid-template-rows: repeat(8, minmax(400px, auto));
        margin-left: 5%;
        margin-right: 5%;
        grid-gap: 10px;
        margin-top: 20px;
    } */

	@media only screen and (min-width: 768px) {
			.card-container {
				display: grid;
				grid-template-columns: repeat(3, minmax(400px, 1fr));
				grid-template-rows: repeat(1, minmax(300px, auto));
				margin-left: 5%;
				margin-right: 5%;
				grid-gap: 10px;
				margin-top: 20px;			
			}
		}
		

    /* Rotate cards at different angles */
    .cardy:nth-child(1) {
      transform: rotate(-10deg);
    }

    .cardy:nth-child(2) {
      transform: rotate(20deg);
    }

    .cardy:nth-child(3) {
      transform: rotate(-15deg);
    }

    .cardy:nth-child(4) {
      transform: rotate(10deg);
    }
    .cardy:nth-child(5) {
      transform: rotate(-10deg);
    }

    .cardy:nth-child(6) {
      transform: rotate(90deg);
    }

    .cardy:nth-child(7) {
      transform: rotate(-15deg);
    }

    .cardy:nth-child(8) {
      transform: rotate(10deg);
    }

	.cardy:nth-child(9) {
      transform: rotate(10deg);
    }

    /* Add hover effect for fun */
    .cardy:hover {
      transform: rotate(0deg);
      /* background-color:rgb(89, 97, 89);*/
    }

	.myfontS {
	color: #ffffff;
	font-size: 25px;
	text-align: center;
	font-family: "Anisette Std", Arial, Helvetica, sans-serif;
	letter-spacing: 5px;
}

.centered-new {
    position: absolute;
    top: 80%;
    left: 50%;
    padding: 0px;
    /* font-size: 50px; */
    font-family: Montserrat, sans-serif;
    transform: translate(-50%, -80%);
    background-color: rgba(0, 0, 0, 0.23);
}

	</style>
</head>

<body id="landingPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<?php
	include 'includes2/navbar.php';
	?>
	<br>
	<br>
	

	<!------------------------------------------- CONTAINER (TEAM PORTALS) -------------------------------------------------------------->
	<div id="dashboard" class="content grid-containerink">

		<div class="ianda1">
			<div class="w3-padding floating-box-test" id="myHeader"><br><br>
				<img src="images2/branded-logo-large2.png" alt="Image" style="width:40%"><br><br>
				<div class="centered-new myfontL"><br>
					<p class="myfontS">old skool archives...</p>
				</div><br><br>
			</div>
		</div>

        <div class="ianda6">
        <div class="card-container" style="width: 100%; object-fit: contain;">
        <div class="cardy"><img src="images2/ron.png" alt="Image" style="width:90%; height: 90%"></div>
        <div class="cardy"><img src="images2/Terry-Adams-BMX-Flatland.jpeg" alt="Image" style="width:80%"></div>
        <div class="cardy"><img src="images2/flat-hip.png" alt="Image" style="width:90%"></div>
        <div class="cardy"><img src="images2/flatland-rider.jpg" alt="Image" style="width:90%"></div>
        <div class="cardy"><img src="images2/bmx-jumper-bw.jpg" alt="Image" style="width:90%"></div>
        <div class="cardy"><img src="images2/crossup.png" alt="Image" style="width:90%"></div>
        <div class="cardy"><img src="images2/jumper-cross.jpg" alt="Image" style="width:85%"></div>
        <div class="cardy"><img src="images2/oh-shit.png" alt="Image" style="width:100%"></div>
		<div class="cardy"><img src="images2/racers-bw.jpg" alt="Image" style="width:90%"></div>
        </div></div>
        </div>
		<br><br>
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