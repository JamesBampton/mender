<!DOCTYPE html>
<html ng-app lang="en">
<head>
	<title>images</title>
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
</head>

<style>

.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
  border: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
}
  </style>

<body>
<?php
	include 'includes2/navbar.php';
	?>
	<br>
	<br>
	<br>
	<br>
	<div class="row">
  <div class="column">
    <img src="images/images/antidote-screen-shot.png">
    <img src="images/images/brain-teaser5.png">
    <img src="images/images/brand-poster-lg.png">
    <img src="images/images/infoview2.png">
    <img src="images/images/logan.png">
    <img src="images/images/ng-blue.png">
  </div>
  <div class="column">
  	<img src="images/images/ng-log0.png">
    <img src="images/images/pathtrace-new.png">
    <img src="images/images/pathview-new.png">
    <img src="images/images/poster3.png">
    <img src="images/images/Dashboard-support.png">
    <img src="images/images/UI-flow.png">
  </div>
  <div class="column">
  	<img src="images/images/boarding-flow.png">
    <img src="images/images/Quiz-Poster-Template-Tamer.png">
    <img src="images/images/Dashboard-images.png">
    <img src="images/images/Screenshot-orange-font.png">
    <img src="images/images/chezHill-double.png">
    <img src="images/images/npmdecored1.png">
  </div>
</div>
</body>
</html>