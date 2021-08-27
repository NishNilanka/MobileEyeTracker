<!doctype html>
<html lang="en">

<style>

.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 140px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -75px;
  opacity: 0;
  transition: opacity 0.3s;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}

</style>



  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/app.css">

    <!-- WSU favicon -->
    <link rel="icon" type="image/png" href="https://www.westernsydney.edu.au/__data/assets/file/0007/372562/WSU_Favicon-01.png?v=0.2.7"/>

    <title>Eye Tracking Study | Western Sydney University</title>
  </head>
  <body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-light navbar-light">
   <a class="navbar-brand" href="/">
    <img src="{{ asset('wsu_logo-removebg-preview.png') }}" alt="tag" width="240px;">
  </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      </li>
    </ul>
  </div>
</nav>
<div class="container">
<center>
  <div class="jumbotron">
    <img src="{{ asset('wsu_logo-removebg-preview.png') }}" srcset="wsu_logo-removebg-preview.png 900w" sizes="(min-width: 1200px) 50vw,100vw" alt="tag">
  <h1 class="display-4" style="padding-top: 30px;"><b>Thank You!</b></h1>
  <p class="lead">Make sure you have copied the following study code prior to close your browser window.</p><br>

</center>
</div>
<div>
<center>
<input type="text" value="" id="hashcode" readonly>

<!-- The button used to copy the text -->
<button onclick="copyfunction()">Copy text</button>
    </center>
	</div>

	<script>
	
	document.getElementById("hashcode").value = "00000000000000";
	
		function copyfunction() {
	  /* Get the text field */
	  var copyText = document.getElementById("myInput");

	  /* Select the text field */
	  copyText.select();
	  copyText.setSelectionRange(0, 99999); /* For mobile devices */

	   /* Copy the text inside the text field */
	  navigator.clipboard.writeText(copyText.value);

	  /* Alert the copied text */
	  alert("Copied the text: " + copyText.value);
	}

</script>
	
	
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>
