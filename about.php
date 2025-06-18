<?php
	/*include_once 'includes/dbconnection2.php';*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>About</title>
    <meta name="viewport" content="width=device-width">

    <script type="text/javascript" src="scripts/jquery.min.js"></script>  
    <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
      <!-- Bootstrap core CSS-->
      <link href="scripts\bootstrap.minjb.css" rel="stylesheet">

      <!-- Custom Styles CSS --CHANGED BOOTSTRAP MIN TO USE \CSS\bootstrap-->	
    <link href="styles\icons3.css" rel="stylesheet">
    <link href="styles\team-icons.css" rel="stylesheet">
    <link href="styles\navbarFlat.css" rel="stylesheet">
    <link href="styles\stylesFlat.css" rel="stylesheet">
    <link href="styles\bootstrapjb.css"rel="stylesheet">
    <link href="styles\blogs.css"rel="stylesheet">
    <link href="styles\bootstrapjb.css"rel="stylesheet">
    <link href="styles\bio.css"rel="stylesheet">

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

      body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      color: #fff;
      font-family: "ATT Aleck Cd", Arial, Helvetica, sans-serif;
      text-align: center;
      overflow: hidden;
      /*background-image: url('images/ink&arch-lg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;*/
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

.fab-twitter {
  background: #55ACEE;
  color: white;
}

.fab-instagram {
  background: #125688;
  color: white;
}

/* Start Ink and Arch grid */

.ianda1 { grid-area: header; margin-top: 0px }
.ianda2 { grid-area: blank1; }
.ianda3 { grid-area: bio; }
.ianda6 { grid-area: blank2; }
.ianda7 { grid-area: footer;}

.grid-containerink {
  display: grid;
  grid-template-columns: auto 100% auto;
  grid-template-rows: 190px auto 250px;
  grid-template-areas:
  'header header header'
  'blank1 bio blank2'
  'footer footer footer';
  grid-gap: 0px;
  /*background-color: #2196F3;*/
  	padding: 0px;
  	/*background-image: url('images/ink&arch-med2.png');
	background-repeat: no-repeat;
  	background-attachment: fixed;  
  	background-size: 100%;
	margin:0px;*/
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

</style>
  
  </head>
    <body id="landingPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  
    <?php include 'includes/navbar.php'; ?>

    <br>
  <br>
 
 <div class="gallery-container">
   
    <!--HEADER-->
    <header class="box-head" id="headBox">
        <p><h1>ABOUT</h1></p>
    </header>
        <!--img src="images/head4.png" alt="Avatar"!-->
</div>
    <!--CONTENT-->
    <main class="box-con" id="conBox">
        
    <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="title text-center">
          <h1>JAMES BAMPTON B.s.c Hons</h1>
          <h3></h3>
          <h4></h4>
          <hr />
          <ul class="list-inline">
            <li><i class="devicon-laravel-plain colored"></i></li>
            <li><i class="devicon-javascript-plain colored"></i></li>
            <li><i class="devicon-html5-plain colored"></i></li>
            <li><i class="devicon-angularjs-plain colored"></i></li>
            <li><i class="devicon-linux-plain"></i></li>
          </ul>
        </div>
        
        <!-- summary section -->
        <div class="summary">
          <h2 class="text-center;">Summary</h2>
          <p style="font-size: 16px ;";>A degree qualified, DIY and renovation enthusiast with a building trade background and a portfolio highlighting a variety of skills obtained over two decades renovating properties in the UK and France. 
            My first ever job was building and installing fireplaces in materials such as Slate, Marble, Stone, Brick and Granite. I decided to re-educate and studied for a Degree in
            Computing at Portsmouth University. After completing my degree I went straight into a job at IBM. During this 25 year period at IBM, my passion for building never left me, I have renovateed multiple home and helpd friends and family
            with various jobs. I have now decided to offer my services to others. My aim is to assist with the small jobs around the home. 
            While larger, more complex jobs are not off the table. Whatever the job, however small, im happy to help.</p>
            <br>
          
          <!-- div class="row">
            <div class="col-md-3 col-sm-3">
              <p style="font-size: 14px;";><b>Plastering</b></p>
              <p style="font-size: 14px;";>Holes repaired</p>
              <p style="font-size: 14px;";>Small areas reskimmed</p>
            </div>
            <div class="col-md-3 col-sm-3">
              <p style="font-size: 14px;";>Basic Electical</p>
              <p style="font-size: 14px;";>Lights replaced, installed</p>
              <p style="font-size: 14px;";>Sockets replaced</p>
            </div>
            <div class="col-md-3 col-sm-3">
              <p style="font-size: 14px;";>Basic Plumbing</p>
              <p style="font-size: 14px;";>Replace Taps</p>
              <p style="font-size: 14px;";>Fix small leaks</p>
            </div>
            <div class="col-md-3 col-sm-3">
              <p style="font-size: 14px;";>Painting & Decorating</p>
              <p style="font-size: 14px;";>Interior, exterior</p>
              <p style="font-size: 14px;";>Guttering repaired</p>
            </div>
        </div -->      
        
        <!-- work experience section -->
        <div class="summary">
          <h2 class="text-center">Interests</h2>
          <p style="font-size: 16px;";>In my spare time, I keep fit by attending running classes, boxfit classes and gym work. I enjoy music both listening and playing the guitar in a band. I have also restored a classic mini and enjoy tinkering around under the bonnet.
            I am very interested in graphics design and web design, I designed and created this website and all the graphics and icons within.
          </p>
        </div>
      </div>
    </div>
  </div>
  </main>  
 <!--FOOTER-->
<div class="footer footer-details">      
      
    <?php include 'templates/footer.php'; ?>

</div>
  
  </body>
</html>