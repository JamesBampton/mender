<?php 
include 'includes/sendmail.php';
?>

<!DOCTYPE html>
<html ng-app lang="en">
<head>
<title>MENDER</title>
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
<link href="styles\cards3.css" rel="stylesheet">
<link href="styles\flip.css" rel="stylesheet">
<link href="styles\icons3.css" rel="stylesheet">
<link href="styles\team-icons.css" rel="stylesheet">
<link href="styles\navbarFlat.css" rel="stylesheet">
<link href="styles\carousel.css" rel="stylesheet">
<link href="styles\stylesFlat.css" rel="stylesheet">
<link href="styles\cardspin-test.css" rel="stylesheet">
<link href="styles\jquery.dataTables.min.css" rel="stylesheet">
<link href="styles\bootstrapjb.css"rel="stylesheet">
<link href="styles\form-style.css" rel="stylesheet">

<link href="DataTables-1.13.8\css\dataTables.dataTables.min.css" rel="stylesheet">
<script src="DataTables-1.13.8\js\jquery.dataTables.min.js"></script>
 
<!-- Bootstrap core CSS-->
<link href="scripts\bootstrap.minjb.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<!-- W3 CSS -->
<link href="scripts\w3.css" rel="stylesheet">
<link href="scripts\w3-themeFlat.css" rel="stylesheet">


<script> 
$(document).ready( function () {
    $('#universal').DataTable({} );
} );
</script>

<script>
	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip({placement: "top"});
	});
</script>

<script type="text/javascript">
// Popup Google Maps window
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=500,width=600,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>

<style>

body {
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%;
	color: #fff;
	/*font-family: "Verdana,sans-serif";*/
	text-align: center;
	overflow: hidden;
	background-color: black;
	/*background-image: url('images/ink&arch-lg.png');
  	background-repeat: no-repeat;
  	background-attachment: fixed;  
  	background-size: cover;*/
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

@media only screen and (min-width: 768px){
.cards {
	display: grid;
	grid-template-columns: repeat(3, minmax(auto, 1fr));
	grid-template-rows: repeat(1, minmax(270px, auto));
	margin: 20px;
	grid-gap: 10px;
	margin-top: 0px;
		}
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
	/* background: linear-gradient(#A88468, #8a8a8a);*/
	/* background: #5986f0;*/
	z-index: 1;
	opacity: 0.8;
	transition: 0.5s;
	/*border-style: solid;
	border-width: 5px;*/
}

.content .layer {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#0079B1, #73543C);
	z-index: 1;
	opacity: 0.8;
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
	border-radius: 40px;
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
	font-size: 50px;
	text-align: center;
	font-family: "Anisette Std", Arial, Helvetica, sans-serif;
	letter-spacing: 5px;
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

.new-model-header{
	background-color: white;
	width: 100%;
	padding: 0px;
	margin: 0px;
}

.tag{
	text-align: right;
	padding-bottom: 10px;
}

.footer-details{
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

.ianda1 { grid-area: header; margin-top: 0px }
.ianda2 { grid-area: blank1; }
.ianda3 { grid-area: cards; }
.ianda6 { grid-area: blank2; }
.ianda7 { grid-area: footer;}

.grid-containerink {
  display: grid;
  grid-template-columns: auto 100% auto;
  /*grid-template-rows: 190px auto 250px;*/
  grid-template-areas:
  'header header header'
  'cards cards cards'
  'footer footer footer';
  grid-gap: 0px;
  background-color: black;
  padding: 0px;
  	/*background-image: url('images/ink&arch-med2.png');
	background-repeat: no-repeat;
  	background-attachment: fixed;  
  	background-size: 100%;
	margin:0px;*/
}

.box2-padding {
	margin-left: 10%;
	padding-left: 0px;
	margin-right: 10%;
	padding-right: 0px;
}


.grid-containerink > div {
  background-color: black;
  text-align: center;
  padding: 0px;
  /*font-size: 60px;*/
  font-family:"ATT Aleck Cd", Arial, Helvetica, sans-serif;
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
  width: 50px; height: 100%;
}

/* Hide first row (ID) in table*/
.hide-id tr th:nth-child(-n+1), .hide-id tr td:nth-child(-n+1){
	display:none;} 

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

.fab-twitter {
  background: #55ACEE;
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

.table.dataTable {

	font-family:"Courier New", "Arial";
	font-size:12px;
}

ul li:hover{
   cursor: pointer;
}

.modal-container{
  display: grid;
  grid-template-rows: auto auto;
  gap: 5px;
  /* background-color: #478f8dfa;*/
  padding: 5px;
  font-family:  Arial, Helvetica, sans-serif;
}

.modal-container > div {
  background-color: #fff;
  /*background: linear-gradient(#A88468, #8a8a8a);*/
  border: 1px solid black;
  text-align: center;
  font-size: 16px;
  font-family:  Arial, Helvetica, sans-serif;
}

.modal-container > div li {
  /*background-color: #fff;
*/  /*background: linear-gradient(#A88468, #8a8a8a);*/
  border: 0px solid black;
  text-align: left;
  font-size: 14px;
  color:Black;
  font-family:  Arial, Helvetica, sans-serif;
}

.modal-container-hor{
  display: grid;
  grid-template-columns: 50% 50%;
  gap: 5px;
  background-color: #478f8dfa;
  padding: 5px;
  font-family:  Arial, Helvetica, sans-serif;
}

.modal-container-hor > div {
  background-color: #fff;
  /*background: linear-gradient(#A88468, #8a8a8a);*/
  border: 1px solid black;
  text-align: center;
  font-size: 16px;
  font-family:  Arial, Helvetica, sans-serif;
}

.modal-container-hor > div li {
  background-color: #fff;
  /*background: linear-gradient(#A88468, #8a8a8a);*/
  border: 0px solid black;
  text-align: left;
  font-size: 14px;
  color:#478f8dfa;
  font-family:  Arial, Helvetica, sans-serif;
}

	.form-container {
		max-width:500px;
		width:100%;
		margin:0 auto;
	}
	.form-container form{
		width: 100%;
	}
	.form-container, label{
		font-weight: bold;
		margin-bottom: 10px;
	}
	.form-container fieldset {
		border: medium none !important;
		margin: 0 0 10px;
		min-width: 100%;
		/*padding: 0;*/
		width: 100%;
	}
	.form-button{
		cursor:pointer;
		width: 100%;
		border:none;
		background:rgb(3, 153, 212);
		color:#FFF;
		margin:0 0 5px;
		padding:10px;
		font-size:15px;
	}


</style>
</head>
<body id="landingPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<?php 
include 'includes/navbar.php';
?>
<br>
<br>
<!-- div><div class="floating-box-test">
  <img src="images/mender-circle2.png"  alt="" style="width:16%">
  <br>
  <br>
  <div class="centered myfontL"> The MENDER </div></div>
  <p class="myfontS">No job too small...</p>
	</div-->
	
	<!------------------------------------------- CONTAINER (TEAM PORTALS) -------------------------------------------------------------->
<div id="dashboard" class="content grid-containerink">

<div class="ianda1">
	<div class="w3-padding floating-box-test" id="myHeader">
		<br><br>
	<img src="images/mender-circle-black.png" alt="Image" style="width:50%">
	<br><br>
	<div class="centered myfontL"> THE MENDER <br>
  <p class="myfontS">No job too small...</p></div><br><br>
	</div>
</div>
	
<div class="ianda2 ianda3">
<div class="cards">
    <!-- CARD 1 -->
	<div class="card" style="background:#b38306" >
		<div class="projectcard">
				<div class="flipper">
					<div class="layer"></div>
						<!-- div class="cardimg"-->
						<p class="w3-circle w3-center" style="padding-top: 0%">
							<img src="images/icon-base-black-info.png" style="height: 90px; width: 90px; border: 5px solid #000000; border-radius: 90%; margin: 0; bottom: 0; left: 0;"
								style="margin-bottom: 60px; padding-top:10px"
								alt="Avatar">
						</p>
					<div class="show-icon back">

			<ul class="icons">
			<li><a><img class="w3-circle" src="images/general-icon.png"  style="height: 80px; width: 80px; border: 5px solid #000000; margin: 0%; position: absolute; bottom: 0; left: 0;" id="gm-click"></i></a></li>
			<li><a><img class="w3-circle" src="images/plastering-icon.png" style="height: 80px; width: 80px; border: 5px solid #000000; margin: 0%; position: absolute; bottom: 0; left: 0;" id="plaster-click"></i></a></li>
			<li><a><img class="w3-circle" src="images/chainsaw.png" style="height: 80px; width: 80px; border: 5px solid #000000; margin: 0%; position: absolute; bottom: 0; left: 0;" id="plumb-click"></i></a></li>
			</ul>
					</div>
				</div>
						<!-- ul class="card-icons">
							<li><a href="leadership.php"><i data-toggle="tooltip" data-placement="top"
									title="Visit Team Portal" class="fa fa-info-circle"
									style="color: black"></i></a></li>
						</ul -->
				<div class="details">
					<h2 id="cardy" class="card-text"><em style="padding-right:5px; padding-left:10px">Services</em><br>
							<span>   General Maintenance, Plumbing, Electrical, Garden and more</span>
					</h2>
				</div>
			</div></div>
<!-- CARD 2 -->
<div class="card" style="background:#b38306;">
   			<div class="projectcard" >
				<div class="flipper">
					<div class="layer"></div>
						<!-- div class="cardimg"-->
						<p class="w3-circle w3-center" style="padding-top: 0%">
							<img src="images/icon-base-black-info.png" style="height: 90px; width: 90px; border: 5px solid #000000; border-radius: 90%; margin: 0%; bottom: 0; left: 0;"
								style="margin-bottom: 60px; padding-top:10px"
								alt="Avatar">
						</p>
						<div class="show-icon back">
			<ul class="icons">
			<li><a><img class="w3-circle" src="images/icon-loc.png"  style="height: 80px; width: 80px; border: 5px solid #000000; margin: 0%; position: absolute; bottom: 0; left: 0;" id="location-click"></i></a></li>
			<li><a><img class="w3-circle" src="images/icon-art.png" style="height: 80px; width: 80px; border: 5px solid #000000; margin: 0%; position: absolute; bottom: 0; left: 0;" id="profile-click"></i></a></li>
			<li><a><img class="w3-circle" src="images/icon-con.png" style="height: 80px; width: 80px; border: 5px solid #000000; margin: 0%; position: absolute; bottom: 0; left: 0;" id="contact-click"></i></a></li>
			</ul>	
						</div>
				</div>
						<!-- ul class="card-icons">
							<li><a href="leadership.php"><i data-toggle="tooltip" data-placement="top"
									title="Visit Team Portal" class="fa fa-info-circle"
									style="color: black"></i></a></li>
						</ul -->
				<div class="details">
					<h2 id="cardy" class="card-text"><em style="padding-right:5px; padding-left:1opx">Details & Contact</em><br>
							<span>  Location, Profile, Contact</span>
					</h2>
				</div>
			</div></div>	
	
	   <!-- CARD 3 -->
	<div class="card" style="background:#b38306;" >
	   <<div class="projectcard">
				<div class="flipper">
					<div class="layer"></div>
						<!-- div class="cardimg"-->
						<p class="w3-circle w3-center" style="padding-top: 0%">
							<img src="images/icon-base-black-info.png" style="height: 90px; width: 90px; border: 5px solid #000000; border-radius: 90%; margin: 0%; bottom: 0; left: 0;"
								style="margin-bottom: 60px; padding-top:10px"
								alt="Avatar">
						</p>
						<div class="show-icon back">
			<ul class="icons2 myalign">
			<li><a><img class="w3-circle" src="images/icon-price.png" style="height: 80px; width: 80px; border: 5px solid #000000; margin: 0%; position: absolute; bottom: 0; left: 0;" id="price-click"></i></a></li>
			</ul>
						</div>
				</div>
				
						<!-- ul class="card-icons">
							<li><a href="leadership.php"><i data-toggle="tooltip" data-placement="top"
									title="Visit Team Portal" class="fa fa-info-circle"
									style="color: black"></i></a></li>
						</ul -->
				<div class="details">
					<h2 id="cardy" class="card-text"><em style="padding-right:5px; padding-left:10px">Prices</em><br>
							<span>  Price lists</span>
					</h2>
				</div>
		</div></div>

<!-- div class="ianda6"></div-->
</div></div></div></div>

	<div class="ianda7">
		<div class="w3-padding-large" id="myfooter" style="height:100%; font-size:30px";>
			<div class="w3-center">
				<p class="w3-animate-bottom">Social Media</p>
				<ul class="mediame">
				<li><a href="#" class="fab fa-instagram fa-2x"></a></i>
				<li><a href="#" class="fab fa-facebook-f fa-2x"></a></i>
				</ul>
				</div>
				</div>
	</div>
</div></div>
	
<!--------------------------------------------- END ------------------------------------------------------------->

<!----------------------------------------------MODALS----------------------------------------------------------->

<!--Services - General Maintenace-->
<div class="modal fade" id="gmmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"></button> 
				<h4 id="modhead1" class="modal-title">GENERAL MAINTENACE</h4>                                                             
			</div> 
		 
			<div class="container">  
	<br>  
	<div class="modal-container">
		<div style="background:#ede6bc; color: Black;">
		<p style="text-align: justify; padding:10px; font-size: 14px;">Offering general maintenance work around the home and garden. The list of works below, provides and insight into the type of work that can be covered.
			However, all type of work will be considered, if I can help, I will.
		</p>
		</div>
	<div>
<h5 style="color:#478f8dfa;">List of Works</h5>

<ul style="list-style-position: outside; list-style-type: square;">
			<li>Tiling / repairs</li>
			<li>Fencing / repairs</li>
			<li>Brickwork / repairs</li>
			<li>Painting, interior and exterior</li>
			<li>Fitting Shelving, hanging pictures</li>
			<li>Clearing Guttering (low level)</li>
			<li>Building Flat pack furniture</li>
			<li>Cleaning Windows</li>
			<li>Basic Plumbing</li>
			<li>Basic Electrical</li>
			<li>And anything inbetween</li>
		</ul>
</div></div></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
			</div>
		</div>                                                                       
	</div>                                      
</div>

<!-- Services Plastering-->
<div class="modal fade" id="plastermodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"></button> 
				<h4 id="modhead2" class="modal-title">PLASTERING</h4>                                                             
			</div> 
<div class="container">  
	<br>  
	<div class="modal-container">
		<div style="background:#ede6bc; color: Black;">
		<p style="text-align: justify; padding:10px; font-size: 14px;">Having obtained a plastering certification many years ago and plastering many ceilings and walls over the years, I maybe be able to help. My main focus is with wall and ceiling repairs, such as holes, cracks small re-skims. If you have any other issues let me know as I may be able to accomodate.</p>
		</div>
	<div>
<h5 style="color:#478f8dfa;">List of Works</h5>

<ul style="list-style-position: outside; list-style-type: square;">
			<li>Hole repairs, removing small problem areas and re-patching to a smooth finish</li>
			<li>Small area re-skims</li>
			<li>Whitewash and topcoat finishing</li>
			<li>Removing spotlights and reparing holes</li>
			<li>Plasterboard Installation</li>
		</ul>
</div></div></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
			</div>
		</div>                                                                       
	</div>                                      
</div>

<!-- Modal Garden -->
<div class="modal fade" id="plumbmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"></button> 
				<h4 id="modhead3" class="modal-title">Garden / Exterior</h4>                                                             
			</div> 
			<div class="container">  
	<br>  
	<div class="modal-container">
		<div style="background:#ede6bc; color: Black;">
		<p style="text-align: justify; padding:10px; font-size: 14px;">Minor gardening work undertaken. See list below and get in touch if you have a job in mind. I may be able to help</p>
		</div>
	<div>
<h5 style="color:#478f8dfa;">List of Works</h5>

<ul style="list-style-position: outside; list-style-type: square;">
			<li>Grass Cutting</li>
			<li>Strimming and Trimming</li>
			<li>Tree Maintenace (small branches cut)</li>
			<li>Loose Slab repairs</li>
			<li>Decking Repairs / painting</li>
			<li>Wall Repairs</li>
			<li>Fencing Repairs</li>
			<li>Gate Installation and Repairs</li>
			<li>Install security Cameras</li>
			<li>And anything inbetween</li>
		</ul>
</div></div></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
			</div>
		</div>                                                                       
	</div>                                      
</div>

<!-- Modal Location-->
<div class="modal fade" id="locationmodal">
	<div class="modal-dialog">
		<div class="modal-content";>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"></button> 
				<h4 id="modhead4" class="modal-title">LOCATION</h4>                                                             
			</div> 
<div class="container">  
	<br>

	<!-- CONTAINER 1 -->
		<!--  Funky Product -->
		<div class="box2">
			<div class="boximg2">
			<p class="w3-center">
				<img src="images/mymap.png" 
				style="height: 30%; width: 100%; margin: 0%; padding-top: 5px; border-radius: 0px;"
					alt="Avatar"></p>

			</div>
			<ul class="icons-google">
				<li><a href="JavaScript:newPopup('https://www.google.com/maps/place/Long+Ln,+Bursledon,+Southampton/@50.8880954,-1.3214867,15z/data=!4m5!3m4!1s0x487471d1a8ea3617:0x79840d2ccfcc9fa2!8m2!3d50.8894302!4d-1.3100055');"><i class="fab fa-google" style="padding-top: 6px; color: red; font-size: 100px"></i></a></li>
			</ul>

			<a href="JavaScript:newPopup('/javascript/examples/sample_popup.cfm');"></a></p>

			<div class="footer footer-details">
				<h2 style="font-size: 14px">
					Find our location on Google Maps<br> <span>BURSLEDON, SOUTHAMPTON, HANTS</span>
				</h2>
			</div>
		</div>
	</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
			</div>
		</div>                                                                       
	</div>                                      
</div>

<!-- Modal Profile -->
<div class="modal fade" id="profilemodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"></button> 
				<h4 id="modhead5" class="modal-title">PROFILE</h4>                                                             
			</div> 
			<div class="container"> 
 <div class="modal-container">
		<div style="background:#ede6bc; color: Black;">
		<p style="text-align: justify; padding:10px; font-size: 14px;">I have worked most of my life within a large telecommunication corporation. However, before my corporate working life began, my first ever job was installing and building fireplaces from granite, marble, slate, stone and brick. Over the last 25 years I have renovated various homes, including a house in France. 
and completed a plastering course. I'm happy to work on interior, exterior jobs as well as gardening tasks. I can also help fix tech problems and install and setup security cameras.
		</p>
		</div>
	<div>
<h5 style="color:#478f8dfa;">Qualifications</h5>

<ul style="list-style-position: outside; list-style-type: square;">
<li>Qualifications : <br>- Bsc Hons Degree in Computing<br>- Plastering Certification<br></li>
<li>Interests : <br>- Keeping Fit through running and circuit training. Listening to music and playing guitar</br></li>
</ul>
</div></div></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
			</div>
		</div>                                                                       
	</div>                                      
</div></div>

<!-- Modal Contact>
<div class="modal fade" id="contactmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"></button> 
				<h4 id="modhead6" class="modal-title">CONTACT</h4>                                                             
			</div> 
<div class="container">  
	<br> 
	<p style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; padding: 10px; color:#000000;">Please feel free to complete the following email form with any queries. <br> Or simply email us on jamesthemender@gmail.com or call 07887945460.</p>
	<br>
    <form method="post" enctype="text/plain">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="10" cols="30" required></textarea><br><br>

        <input type="submit" value="Send">
    </form>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
			</div>
		</div>                                                                       
	</div>                                      
</div></div -->

<!-- Modal Contact 2 -->

<div class="modal fade" id="contactmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"></button> 
				<h4 id="modhead6" class="modal-title">CONTACT</h4>                                                             
			</div> 
	<div class="form-container">  
	<form method="post">
			<fieldset>
				<label>Name</label>
				<input type="text" name="name" placeholder="Enter Name">
			</fieldset>
			<fieldset>
				<label>Mobile</label>
				<input type="text" name="mobile" placeholder="Enter Mobile">
			</fieldset>
			<fieldset>
				<label>Email</label>
				<input type="email" name="email" placeholder="Enter Email">
			</fieldset>
			<fieldset>
				<label>Message</label>
				<textarea name="message" placeholder="Type your Message..."></textarea>
			</fieldset>
			<fieldset>
				<button type="submit" name="submit">SUBMIT</button>
			</fieldset>
		</form>		
	</div>
	<div class="modal-footer">
				<button type="form-button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
	</div>                        
</div>
		</div>

<!-- Modal Prices -->
<div class="modal fade" id="pmodal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"></button> 
				<h4 id="modhead7" class="modal-title">PRICE LIST</h4>                                                             
			</div> 
			<div class="container">  
			<br>  
			<div class="modal-container">
		<div style="background:#ede6bc; color: Black;">
		<ul style="list-style-position: outside; list-style-type: square;">
			<li>Initial Charge: For the first hour: £XX.</li>
			<li>Subsequent Hours: Each additional hour: £XX.</li>
			<li>Daily rates (7 hrs): TBD</li>
		</ul>
		</div>
	<div>
<h5 style="color:#478f8dfa;"></h5>

<ul style="list-style-position: outside; list-style-type: square;">
			<li>Additional cost for clearance or removal of waste, if required.</li>
		</ul>
</div></div></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                        
			</div>
		</div>                                                                       
	</div>                                      
</div>
</body>
</html>