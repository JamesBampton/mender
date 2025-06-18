<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Gallery</title>
    <meta
      content="width=device-width, initial-scale=1, maximum-scale=1"
      name="viewport">

    <script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>

      <!-- Custom Styles CSS --CHANGED BOOTSTRAP MIN TO USE \CSS\bootstrap-->	
    <link href="styles\icons3.css" rel="stylesheet">
    <link href="styles\team-icons.css" rel="stylesheet">
    <link href="styles\navbarFlat.css" rel="stylesheet">
    <link href="styles\stylesFlat.css" rel="stylesheet">
    <link href="styles\bootstrapjb.css"rel="stylesheet">
    
    <!-- Bootstrap core CSS-->
    <link href="scripts\bootstrap.minjb.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">    
    <link rel="stylesheet" href="styles/blogs.css">

     <!-- Bootstrap core CSS-->
     <link href="scripts\bootstrap.minjb.css" rel="stylesheet">

    <!-- W3 CSS -->
    <link href="scripts\w3.css" rel="stylesheet">
    <link href="scripts\w3-themeFlat.css" rel="stylesheet">

    <style>
      img {max-height:100%;}
      img {height: 100%; width: 100%}
    
    
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


body {
	margin: 0;
	padding: 0;
	width: 100%;
	height: 100%;
	color: #fff;
	font-family: "Courier New", Arial, Helvetica, sans-serif;
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
	background: black;
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
	width: 90%;
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
	border-radius: 0px;
	background: #fff;
	-webkit-box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	overflow: hidden;
	border-style: solid;
	border-width: 5px;
}

.content .card2 {
	position: relative;
	width: 100%;
	Height: 400px;
	margin-top: 0px;
	background: #333;
	padding-left: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-top: 0px;
	box-sizing: border-box;
	text-align: center;
	border: 1px;
	border-radius: 0px;
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
	font-size: 56px;
	text-align: center;
	font-family: "ATT Aleck Cd", Arial, Helvetica, sans-serif;
}

.myfontS {
	color: #ffffff;
	font-size: 18px;
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

/* .cap {
  text-align: middle;
  color: #009FDB;
  font-size: 12px;
  font-family: "ATT Aleck Cd", Arial, Helvetica, sans-serif;
  padding: 10px;
  
}*/

.button {
	background-color: #FFB000;
	color: #fff;
  border-color: #AF29BB;
	/*align: left;*/
	justify-content: left;
}

.card-text em {
text-align: middle;
  color: #000000;
  font-size: 16px;
  font-family: "Courier New", Arial, Helvetica, sans-serif;
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
	font-family: "Courier New", Arial, Helvetica, sans-serif;
}

.footer {
  font-family: "Courier New", Arial, Helvetica, sans-serif;
  color: #cad1d1;
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
  padding: 20px 0;
  /*font-size: 60px;*/
  font-family:"Courier New", arial;
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
  font-size: 45px;
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
  background-color: #478f8dfa;
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
  background-color: #fff;
  /*background: linear-gradient(#A88468, #8a8a8a);*/
  border: 0px solid black;
  text-align: left;
  font-size: 14px;
  color:#478f8dfa;
  font-family:  Arial, Helvetica, sans-serif;
}

.modal-container-hor{
  display: grid;
  grid-template-columns: auto auto;
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
   
    </style>
  </head>

<body id="landingPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  
    <?php include 'includes/navbar.php';?>

    <br>
  <br>
 
<div class="gallery-container" style="background-color: black;">

    <!--HEADER-->

    <header class="box-head" id="headBox" style="background-color:black;">
        <p><h1>GALLERY</h1></p>
    </header>
        <!--img src="images/head4.png" alt="Avatar"!-->

        	<!-- div class="contacts-fixed" style="align:center">
				<ul id="contacts" style="align:center">
					<li id="welcome"><span>Customer Experience Dashboard</span></li>
				</ul> 
				</div-->
    
    <!--CONTENT-->
    <main class="box-con" id="conBox" style="background-color:black;">
        <div id="nestedGrid-container" style="color:black">            
          <!--div id="nestedBox-con"-->
            
            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork1"> 
            <img src="images/gallery/loft-1.png" alt="Avatar">French House Studs Walls</div>

            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork2"> 
            <img src="images/gallery/loft-2.png" alt="Avatar">French House Insulation</div>

            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork4"> 
            <img src="images/gallery/loft-3.png" alt="Avatar">French House Plaster Boarding</div>

            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork5"> 
            <img src="images/gallery/loft-4.png" alt="Avatar">French House Plaster Boarding</div>

            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork6"> 
            <img src="images/gallery/loft-5.png" alt="Avatar">French House Exposed Beams</div>

            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork7"> 
            <img src="images/gallery/loft-6.png" alt="Avatar">French House Ceilings Plastered</div>

            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork8"> 
            <img src="images/gallery/loft-7.png" alt="Avatar">French House Plastered and Painted</div>

            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork9"> 
            <img src="images/gallery/loft-8.png" alt="Avatar">French House Plastered and Painted</div>

            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork10"> 
            <img src="images/gallery/fireA.png" alt="Avatar">Brick Fire Surround Part 1</div>

            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork11"> 
            <img src="images/gallery/fireB.png" alt="Avatar">Brick Fire Surround Part 2</div>

             <!--div id="imgOne" class="imgBox"--> 
             <div class="imgBox" id="imgWork12"> 
            <img src="images/gallery/fireC.png" alt="Avatar">Stove Installed</div>

             <!--div id="imgOne" class="imgBox"--> 
             <div class="imgBox" id="imgWork13"> 
            <img src="images/gallery/Sink.png" alt="Avatar">New Sink Installation</div>

             <!--div id="imgOne" class="imgBox"--> 
             <div class="imgBox" id="imgWork14"> 
            <img src="images/gallery/underfloor.png" alt="Avatar">Underfloor Heating</div>

             <!--div id="imgOne" class="imgBox"--> 
             <div class="imgBox" id="imgWork15"> 
            <img src="images/gallery/shower-1.png" alt="Avatar">Bathroom - New Shower</div>

             <!--div id="imgOne" class="imgBox"--> 
             <div class="imgBox" id="imgWork16"> 
            <img src="images/gallery/shower-2.png" alt="Avatar">Bathroon - Floor Tiles</div>

             <!--div id="imgOne" class="imgBox"--> 
             <div class="imgBox" id="imgWork17"> 
            <img src="images/gallery/shower-3.png" alt="Avatar">Bathroom Finished</div>

             <!--div id="imgOne" class="imgBox"--> 
             <div class="imgBox" id="imgWork18"> 
            <img src="images/gallery/shower-4.png" alt="Avatar">Bathroom Sink Installation</div>

             <!--div id="imgOne" class="imgBox"--> 
             <div class="imgBox" id="imgWork19"> 
            <img src="images/gallery/utility-1.jpg" alt="Avatar">Outhouse Conversion Part 1</div>

             <!--div id="imgOne" class="imgBox"--> 
             <div class="imgBox" id="imgWork20"> 
            <img src="images/gallery/utility-2.png" alt="Avatar">Outhouse Conversion Part 2</div>

             <!--div id="imgOne" class="imgBox"--> 
             <div class="imgBox" id="imgWork21"> 
            <img src="images/gallery/utility-3.png" alt="Avatar">Outhouse Conversion Completed</div>

            <!--div id="imgOne" class="imgBox"--> 
            <div class="imgBox" id="imgWork22"> 
            <img src="images/gallery/spotlights.png" alt="Avatar">Spot lighting Installation</div>
         </div>
      </main>     
          <?php include 'templates/footer.php';?>  
</div>
  </body>
</html>