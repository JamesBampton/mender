scripts3/<!DOCTYPE html>
<html ng-app lang="en">
<head>
<title>APM Natural Permanent Makeup Southampton Hampshire</title>
<!-- This will adjust view width to device size. -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- script type="text/javascript" src="scripts3/bootstrap.min.js"></script -->

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<link href="scripts\bootstrap.min.css" rel="stylesheet">

<!-- Custom Styles CSS -->
<link href="styles3\contact-form.css" rel="stylesheet">
<link href="styles3\cards.css" rel="stylesheet">
<link href="styles3\flip.css" rel="stylesheet">
<link href="styles3\icons.css" rel="stylesheet">
<link href="styles3\navbar.css" rel="stylesheet">
<link href="styles3\carousel.css" rel="stylesheet">
<link href="styles3\styles.css" rel="stylesheet">
<link href="styles3\cardspin-test.css" rel="stylesheet">
<!-- link href="styles3\navbarFlat.css" rel="stylesheet" -->
 
<!-- Bootstrap core CSS-->
<link href="scripts\bootstrap-theme.min.css" rel="stylesheet">

<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
	integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
	crossorigin="anonymous">

<!-- W3 CSS -->
<link href="scripts\w3.css" rel="stylesheet">


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
	/*color: #fff;*/
	/*font-family: 'Nunito Semibold';*/
	text-align: center;
}

.content {
	display: ms-grid;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
	grid-template-rows: repeat(1, minmax(200px, auto));
	margin: 0 auto;
	grid-gap: 10px;
}

.content .layer {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#ffffff, #CFD8DC);
	z-index: 1;
	opacity: 0.3;
	transition: 0.5s;
}

.content-folio {
	display: ms-grid;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
	grid-template-rows: repeat(1, minmax(200px, auto));
	margin: 0 auto;
	grid-gap: 10px;
}

.content-folio .layer {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	background: linear-gradient(#ffffff, #CFD8DC);
	z-index: 1;
	opacity: 0.3;
	transition: 0.5s;
}

.content .layer {
	position: absolute;
	top: calc(100% -2px);
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
}

.content .card {
	position: relative;
	width: 200px;
	margin: 0 auto;
	background: #333;
	padding-left: 20px;
	padding-right: 20px;
	padding-bottom: 20px;
	padding-top: 0px;
	box-sizing: border-box;
	text-align: center;
	border: 1px;
	border-radius: 10px;
	background: #fff;
	-webkit-box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	overflow: hidden;
}

.projectcontent {
	display: ms-grid;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
	/*grid-template-rows: repeat(1, minmax(200px, auto));*/
	margin: 0 auto;
	grid-gap: 10px;
}

.projectcontent .projectcard {
	position: relative;
	width: 100%;
	margin: 0 auto;
	background: #333;
	padding: 0px;
	box-sizing: border-box;
	text-align: center;
	border: 1px;
	border-radius: 20px;
	background: teal;
	-webkit-box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	box-shadow: 3px 3px 7px rgba(0, 0, 0, 0.3);
	overflow: hidden;
}

.details {
	position: relative;
	bottom: 30px;
	/*left: 0px;*/
	background: #fff;
	z-index: 4;
	/*width: 70%;*/
	height: 70px;
	box-sizing: border-box;
	padding: 6px;
	z-index: 1;
	/*margin-left: 130px;*/
}

.details h2 {
	margin: 10px 0 0;
	padding: 0;
	font-size: 16px;
	text-align: center;
}

.details h2 span {
	color: rgba(2, 40, 174, 0.90);
	font-size: 14px;
	opacity: .8;
	text-align: center;
}

.footer-details {
	position: absolute;
	bottom: 7px;
	left: 0px;
	background: #fff;
	z-index: 4;
	width: 100%;
	height: 80px;
	box-sizing: border-box;
	padding: 6px;
	z-index: 1;
}

.footer-details h2 {
	margin: 10px 0 0;
	padding: 0;
	font-size: 14px;
	text-align: center;
}

.footer-details h2 span {
	color: rgba(2, 40, 174, 0.90);
	font-size: 12px;
	opacity: .8;
	text-align: center;
}

.standard-font {
	color: #80cbc4;
	font-size: 16px;
	text-align: center;
	font-family: Montserrat, sans-serif;
}

.table-font {
	color: #80cbc4;
	font-size: 12px;
	text-align: center;
	font-family: Montserrat, sans-serif;
}

.button-style {
     background:lightbrown;
     border-radius: 30px;
     width: 15em;
     height: 6em;
     position:relative;
     display:table-cell;
     vertical-align:middle;
     font-weight: 900; 
     position: relative; 
     z-index: 100; 
     height: 30px; 
     width: 100px; 
     top: -92px;
     padding-top: 0px
 }
 .button-style h3 {
 	 vertical-align: center;
     text-align: center;
     margin: 0px;
     padding: 0px;
     padding-top: 0px;
}
.myTable {
	width: 80%;
	table-layout: fixed;
	height: 40px;
	text-align: left;
	padding: 10px;
}

.table-font {
	color: #80cbc4;
	font-size: 12px;
	text-align: center;
	font-family: Montserrat, sans-serif;
}
.header-bar {
	background: #bcc4c7ff;
	margin-top: 50px;
}

.footer-bar {
	background: #fff;
	color: #bcc4c7ff 
}

.para {
  /*border-bottom:5px dotted;*/
  margin-left:auto;
  margin-right:auto;
  text-align:left;
  font-size: 16px;
  width: 82%; /* whatever width you want */
  font-family: Montserrat, sans-serif;
  color:#bcc4c7ff;
} 

.para .ul{
  /*border-bottom:5px dotted;*/
  margin-left:auto;
  margin-right:auto;
  text-align:left;
  font-size: 16px;
  width: 82%; /* whatever width you want */
  font-family: Montserrat, sans-serif;
  color:#bcc4c7ff;
} 
.para-head {
  /*border-bottom:5px dotted;*/
  margin-left:auto;
  margin-right:auto;
  text-align:left;
  font-size: 16px;
  font-style: "bold";
  width: 70%; /* whatever width you want */
  font-family: Montserrat, sans-serif;
} 
.table-width {
padding-left: 100px;
padding-right: 100px;
}
.box-padding {
	margin-left: 5%;
	padding-left: 0px;
	margin-right: 5%;
	padding-right: 0px;
}

.box2-padding {
	margin-left: 10%;
	/*padding-left: 10px;*/
	margin-right: 10%;
	padding-right: 0px;
}

/* Container holding the image and the floating text */
.floating-box-test {
  position: relative;
  text-align: center;
  color: white;

}
/* Centered text inside container*/
.centered {
  display: flex;
  flex-wrap: nowrap;
  position: absolute;
  top: 50%;
  left: 50%;
  /*padding: 10px;*/
  /*font-size: 90px;*/
  font-size:5vw;
  font-style:"bold";
  font-family: Montserrat, sans-serif;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.33);
}

.noblock {display: none;}
 
</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-220197813-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-220197813-1');
</script>


</head>

<body id="landingPage" data-spy="scroll" data-target=".navbar"
	data-offset="60">

	<?php include 'includes2/navbar.php';?>
<br>
	

	<!-- <nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand" style="font-size: 1.0em"; color="#afb5ca">Natural Permanent Makeup
				<span><img src="images3/npmdecored-blue6.png" alt="NoImage" style="width: 5%">
		</span> </a>
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
		
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#profile">PROFILE</a></li>
					<li><a href="#treatments">TREATMENTS</a></li>
					<li><a href="#information">INFORMATION</a></li>
					<li><a href="#aftercare">AFTERCARE</a></li>
					<li><a href="index2.php">PORTFOLIOS</a></li>
					<li><a href="index.php">MENDER</a></li>
				</ul>
				
				</div>
				
			</div> 
		</div>
	</nav> -->
	<br>

	<header class="w3-container header-bar w3-theme w3-padding" id="myHeader"  >

		<div class="w3-center">
			<br><br><br><br>
			<h4>Alice Moneybags</h4>
			<h1 class="w3-xxxlarge w3-animate-bottom">PERMANENT MAKE-UP</h1>
			<br><br>
		</div>
	</header>
	<br>
	<br>
	<br>
	
	<br>

	<img src="images3/npmdecored-blue6.png" alt="NoImage" style="width: 20%">
	<br>
	<br>
	<br><br>

  <div class="floating-box-test">
  <img src="images3/beautistas-eyeliner.jpg" alt="Image" style="width:100%;">
  <div class="centered"> Natural beauty in you </div>
</div>

<!--------------------------------------- Container PROFILE -------------------------------------------------------------------->

	<div id="profile" class="container-fluid text-center bg-grey spread">
		<div class="container-fluid text-center bg-grey spread">
			<br> <br> <br>
			<span class="p-heading-heavy">PROFILE</span>
			<span class="p-heading-light"></span>
		</div>
	</div>
	<br>

	<div>
	<div id="status-table" class="box-padding container-fluid text-center bg-grey spread standard-font">
	<div class="container-fluid text-center bg-grey spread">

			<div class="w3-center">
				<div><p class="para">Natural Permanent Makeup uses a fully insured, professional permanent makeup clinic on the south coast of Hampshire. Using state-of-the-art equipment and the highest quality, vegan, cruelty free, medical grade hypo-allergenic pigments. 
Permanent makeup is for anyone looking for flawless makeup without the hassle of applying it every day! The methods are effective but most importantly so natural that they are almost undetectable to an untrained eye.
Rest assured you will receive the best quality of service from the free initial consultation, the treatment and through to the follow up appointment.
					
					Alice has been trained 1 to 1 by Katy Jobbins, multi award winning industry expert, author, founder and head trainer of the permanent Makeup Training Academy
</p></div>
			</div>
			<br>				
	</div></div></div>
	
	<!-------------------------------------------- Container (TREATMENT SECTION) ------------------------------------------------>
	
	<div id="treatments" class="box-padding container-fluid text-center bg-grey">
		<br> <br>
		<span class="p-heading-heavy">TREATMENT</span>
			<span class="p-heading-light"></span>
		<br>
		<br>
		<div class="w3-container">
			<div class="w3-center">
				<div><p class="para">Permanent makeup is a form of cosmetic tattooing also known as micropigmentation. The process involves implantation of pigments beneath the surface of your skin. This process uses pigments rather than inks meaning it will fade over time but will always remain in the skin. 
				Top ups may be required and are advised every few years for a fresh look. Treatments include...</p></div>
			</div>
			<br>

<h4 class="left-text para-left"><strong>For Eyebrows</strong> Microblading, Powder brows, Combination brows, Ombre brows and brow Lamination</h4>
<p class="para"></p><br>

<h4 class="left-text para-left"><strong>For Lips</strong> Eyeliner or Lash enhancement</h4>
<p class="para"></p><br>

<h4 class="left-text para-left"><strong>For Lips</strong> Lip liner, Lip line and Blush, Ombre lips, Lip full colour</h4>
<p class="para"></p>
		<br />

<p class="para">All treatements include: A free consultation, full aftercare treatment and a top-up appointment after 6 weeks</p></div></div>
<br><br>

 <div class="floating-box-test">
  <img src="images3/roll.jpg" alt="Image" style="width:100%;">
  <div class="centered"> A new beauty </div>
</div>
     
<!-------------------------------------------- Container (INFORMATION) ------------------------------------------------>
	
	<div id="information" class="box-padding container-fluid text-center bg-grey">
		<br> <br> <br>
		<span class="p-heading-heavy">INFORMATION</span>
		<span class="p-heading-light"></span>
		<br>
		<div class="w3-container">
			<div class="w3-center">
		<br><br>

<div><p class="para" style="color: #515151">Semi-permanent makeup usually lasts between 1-3 years. This can vary depending on individual skin type, exposure to UV rays, age, health and medication. This will vary from client to client. From replacing missing ends of eyebrows, adding hairs to sparse Areas or creating more symmetry. 
Define your eyes with minute dots of lash colour, the ultimate way to wake up, natural but noticeable. 
Permanent lip colour can replace naturally receding lips with a new perfect shape or just 
Total brow reconstruction created for both males and females undergoing chemotherapy or suffering with Alopecia universalis
</p><br>

<div><p class="para">The highest standards of hygiene are met. All pigments used are hypoallergenic and no treatment will be carried out before a patch test has been completed. All of the needle housing and needles are pre-sterilised and completely disposed of after each treatment. All Machinery is sterilised before treatment and a sterile clip cord cover will be applied to prevent any chance of cross contamination.
</p><br>

<div><p class="para" style="color: #515151">During the free consultation you will have the opportunity to discuss what it is you would like to achieve. With my knowledge I can help you decide what colours, shapes and styles would best suit your natural colouring, features, image and style. The consultation process also gives us the chance to identify any possible contraindications and enables you to make an informed choice.
</p><br>

<div><p class="para">Each procedure can take 1.5-2.5hrs. At the initial treatment there will be some paperwork to complete. Before and after photos will need to be taken and time will need to be spent discussing and perfecting design and colour, due to each treatment being different.
</p><br>

<div><p class="para" style="color: #515151">There should be minimal risks of complications if clients follow the aftercare instructions which will be issued prior to the procedure being carried out.
</p><br>
<div><p class="para">Many people can benefit from permanent makeup. Some may just want a subtle enhancement to their natural features, whilst others may desire a more dramatic look. It can be truly valuable to those with impaired vision, an unsteady hand or allergies to conventional makeup. Those that lead an active lifestyle and wish to look their best during activities such as swimming or going to the gym may also benefit. Many women can feel dissatisfied with their sparse eyebrows, or also others who have lost hair due to alopecia or chemotherapy. Some just want to look their best at all times or simply do not have time to apply makeup every morning.
</p><br>
<div><p class="para" style="color: #515151">
If you have had your permanent makeup performed elsewhere and not happy with the results, then do not despair, I can help.
Whatever the reason you are not happy with your previous permanent makeup, or just feel it is time for a change, then come in to see me and I will work out a brand new plan of action to make you love your permanent makeup again.
</p><br>
<div><p class="para">
During your initial consultation, I will discuss makeup colours that you currently use and take into consideration your hair colour and skin tone. Each client is treated individually and the colour will be selected jointly with you to get the best match for your individual needs.
 </p><br>
 
 <div><p class="para" style="color: #515151">You will be asked for a £50, non-refundable deposit, if you decide to go ahead with any treatment.
</p><br>
 
 
 </div></div></div></div></div></div></div></div></div></div></div></div></div>


 <div class="floating-box-test">
  <img src="images3/fine.jpg" alt="Image" style="width:100%;">
  <div class="centered"> Feel good </div>
</div>
  

	<!-------------------------------------------- Container (AFTERCARE Section) ---------------------------------------------->

	<div id="aftercare" class="container-fluid text-center bg-grey spread">
		<div class="container-fluid text-center bg-grey spread">
			<br> <br> <br>
			<span class="p-heading-heavy">AFTERCARE</span>
		    <span class="p-heading-light"></span>
	<br>
		<div class="w3-container">
			<div class="w3-center">
		<br><br>

	<div><p class="para">Semi-permanent makeup usually lasts between 1-3 years. This can vary depending on individual skin type, exposure to UV rays, age, health and medication. Your skin will be temporarily sensitised after the treatment and instructons will be provided to help avoid infection and allow skin to recover, up to 5 days after treatment. 
</p><br>

	<div>
	<div id="status-table" class="container-fluid text-center bg-grey spread standard-font">
	<div class="container-fluid text-center bg-grey spread">

	</div></div></div></div></div> 

<!-----------------------FORM SECTION ------------------------------------------------>

		<!--div id="intouch" class="container-fluid text-center bg-grey">
		<div class="text-center">
		<br> <br> <br>
		<span class="p-heading-heavy">CONTACT</span>
		<span class="p-heading-light"></span>
		<br>
		</div>
	<br>

<div id="form" class="container-fluid text-center bg-grey">
	<div class="row">
		<div class="col-sm-6">
		</div>
	<div class="form-container">
						
							 <div class="grid-item-folio">
							 <div class="fcf-body2">
    <div id="fcf-form">
    <h3 class="fcf-h4">SEND MESSAGE</h3><br>

    <form id="fcf-form-id" class="fcf-form-class" method="post" action="mail-working.php">
        
        <div class="fcf-form-group">
            <label for="name" class="fcf-label">Your name</label>
            <div class="fcf-input-group">
                <input type="text" id="name" name="name" placeholder="Jane Smith" pattern=[A-Z\sa-z]{3,20} class="fcf-form-control" required>
            </div>
        </div>

        <div class="fcf-form-group">
            <label for="Email" class="fcf-label">Your email address</label>
            <div class="fcf-input-group">
                <input type="email" id="Email" name="Email" placeholder="jane.smith@email.com"  class="fcf-form-control" required>
            </div>
</div>

		 <div class="fcf-form-group">
            <label for="subject" class="fcf-label">Subject</label>
            <div class="fcf-input-group">
                <input type="text" id="subject" name="subject" placeholder="Subject"  class="fcf-form-control"  maxlength="50" required>
            </div>
        </div>
		<br>

        <div class="fcf-form-group">
            <label for="message" class="fcf-label">Your message</label>
            <div class="fcf-input-group">
                <textarea id="message" name="message" placeholder="Ask a question or add a comment."  class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div class="fcf-form-group">
            <button type="submit" name="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send</button>
        </div>
    </form -->

    </div></div>
</div></div></div></div></div></div></div>
	</div></div></div>
	
	<br><br><br><hr><br>


	<footer class="footer footer-style" class="container-fluid text-center">
		</a>
		<br>
		<br>

	<div class="container-fluid box2-padding">
		<!-- CONTAINER 1 -->
		<!--  Funky Product -->
		<div class="row">
		<div class="col-sm-6">
		<div class="box2">
			<div class="boximg2">
			<p class="w3-center">
				<img src="images3/cherryhillwo-sun.png" 
				style="max-width: 95%; margin: 0%; padding-top: 10px; border-radius: 0px;"
					alt="Avatar"></p>

			</div>
			<ul class="icons">
				<li><a href="JavaScript:newPopup('https://www.google.com/maps/place/Long+Ln,+Bursledon,+Southampton/@50.8880954,-1.3214867,15z/data=!4m5!3m4!1s0x487471d1a8ea3617:0x79840d2ccfcc9fa2!8m2!3d50.8894302!4d-1.3100055');"><i class="fab fa-google" style="padding-top: 6px; color: red"></i></a></li>
			</ul>

			<a href="JavaScript:newPopup('/javascript/examples/sample_popup.cfm');"></a></p>

			<div class="footer-details">
				<h2>
					Natural Permannent Makeup<br> <span>LOCATION</span>
				</h2>
			</div>
		</div></div>
		
		
		<div class="col-sm-6">
		<div class="box2">
			<div class="boximg2">
			<p class="w3-center">
				<img src="images3/social-media4.png" 
				style="max-width: 95%; margin: 0%; padding-top: 10px; border-radius: 0px;"
					alt="Avatar"></p>

			</div>
			<ul class="icons">
				<li><a href="JavaScript:newPopup('https://www.instagram.com/naturalpermanentmakeup_?r=nametag');"><i class="fab fa-instagram" style="padding-top: 6px; color: red"></i></a></li>
				<li><a href="JavaScript:newPopup('https://www.facebook.com/alicesnpm/');"><i class="fab fa-facebook-f" style="padding-top: 7px; color: blue"></i></a></li>
			</ul>
			<div class="footer-details">
				<h2>
					Natural Permannent Makeup<br> <span>SOCIAL MEDIA</span>
				</h2>
			</div>
		</div></div>
</div></div></div>

</div>
<br> <br><br> <br>

<header class="w3-container footer-bar w3-theme-footer w3-padding" id="myfoot"  >
		<div class="w3-center">
			<br>
			<h2>CERTIFICATION</h2>
			<br>
			<div id="certs" class="flex-container">
			<div class="w3-center">
				<img src="images3/pmu.jpg" style="width:70%;" alt="Avatar">	
			</div>
		</div></div>
	</header>
		<hr>
		<br>
		<i class="fab fa-paypal fa-5x" aria-hidden="true" style="color:#afb5ca"></i><p style="font-size: 12pt">paypal accepted</p>
				 
		<br><br><br>
		
		<p style="font-size: 14px;">ANT POWER DESIGNS</style></p><p style="font-size: 12px">By James Bampton</style></p>
		<br> <br>
		
	</footer>
</body>
</html>