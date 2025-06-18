<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!--This will adjust view width to device size-->
<meta name="viewport" content="width=device-width">

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>

<script type="text/javascript" src="scripts/myscripts.js"></script>

<!-- Custom Styles CSS --CHANGED BOOTSTRAP MIN TO USE \CSS\bootstrap-->	
<link href="styles4\cards.css" rel="stylesheet">
<link href="styles4\navbar.css" rel="stylesheet">
<link href="styles4\styles.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.js">
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
 
<!-- Bootstrap core CSS-->
<link href="scripts4\bootstrap.min.css" rel="stylesheet">

<!-- W3 CSS -->
<link href="scripts4\w3.css" rel="stylesheet">
<link href="scripts4\w3-theme-teal.css" rel="stylesheet">

  <title>Responsive Grid Layout</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: grid;
      grid-template-rows: auto 1fr auto;
      grid-template-columns: 1fr;
      min-height: 100vh;
      background:black;
    }

    header {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 1rem;
    }


    footer {
      position:fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: black;
      color: white;
      text-align: center;
      height: 5%;
      font-size:20px;
      text-align: center;
    }

    footer, p{
      font-size:18px;
      text-align: center;
      color:black;
    }

    .grid-container-new {
      display: grid;
      grid-template-columns: auto;
      justify-content: center;
      gap: 20px;
      padding: 2rem;    
    }

     .content {
      background-color:rgb(105, 90, 90);
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .content img {
      max-width: 100%;
      border-radius: 8px;
    }

    .content p {
      margin-top: 0.5rem;
    }

    /* Container holding the image and the floating text */
    .floating-box-test {
      position: relative;
      text-align: center;
      color: white;
    }

    .section{
      /*height: 600px;*/
      border-radius: 20px;
      border-color: black;
      background: black;
      border-bottom: 50px;
    }
  
    h2 {
            font-weight: bold;
            text-align: center;
            color: white;
            margin-left: 0%;
        }


  </style>
</head>
<body>
  <header>
  <?php
	include 'includes2/navbar.php';
	?>
  </header>
<div>
	<div class="w3-padding floating-box-test"><br><br><br><br><br>
	  <div class="centered myfontL">DESIGN<br>
      <p style="color:white" class="myfontS">Analysis...</p>
    </div>
	</div><br><br><br><br>
  <h2>Design Justification</h2>
    <p style="text-align:justify; color:white; margin:5%">The challenge was to present data from multiple sources within a unified, intuitive view. To ensure clarity and ease of use, the information needed to be logically structured into distinct sections, allowing for seamless navigation and a consistent experience. Maintaining simplicity was crucial—if the interface became cumbersome or time-consuming, users might abandon it in favor of their previous, less efficient methods of accessing data. By prioritizing organization, accessibility, and consistency, the design aimed to encourage adoption and improve overall user experience.</p>
  <div class="grid-container-new">
  
       <div class="section">
       <p style="color: white">Fig 1. M&R page</p>
        <img src="images/images/dash-analysis-thin.png" style="width:100%; Height:95%; margin-bottom:20px" alt="Placeholder Image 1">
      </div><br><br><br>
      <div class="section">
       <p style="color: white">Fig 2. Orchestrator page</p>
        <img src="images/images/dash-analysis2-thin.png" style="width:100%; Height:95%; margin-bottom:20px" alt="Placeholder Image 1">
      </div><br><br><br>
      <div class="section">
       <p style="color: white">Fig 3. Icon drill down</p>
        <img src="images/images/dash-analysis3-thin.png" style="width:100%; Height:95%; margin-bottom:20px" alt="Placeholder Image 1">
      </div><br><br><br>
  <footer class="footer">
    <br>
    <p>Responsive Grid Layout. James Bampton.</p>
  </footer>

</body>
</html>