<!DOCTYPE html>

<?php include('contactfunc.php'); ?>

<html>

	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Kevin Miles, Game Developer</title>
		<link rel="icon" href="Assets/asterash_ico.jpg">

		<!-- CSS -->
		
		<link rel="stylesheet" type="text/css" href="CSS/main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="CSS/modifiers.css">

		<!-- FONTS -->

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic SC">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Carter+One" rel="stylesheet">

		<style>
			.dropdown-item.active, .dropdown-item:active {
			  color: orange;
			  text-decoration: none;
			  background-color: #007bff;
			}

			.dropdown-item:hover, .dropdown-item:focus {
			  color: orange;
			  text-decoration: none;
			  background-color: #f8f9fa;
			}
		</style>

	</head>
		<header class="navbar-inverse" role="banner">		
			<div class="container">		
				<nav class="navbar-expand-lg navbar navbar-dark rounded" style="background-color: #222";>

						<a class="navbar-brand">Kevin Miles
					  		<p class="description">Videogame Developer</p>
					  	</a>
					  	<a class="custom-navbar-space-md d-none d-sm-block"></a>			  	
					  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  	</button>

						 <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav mr-auto">
						      	<li class="nav-item active">
						        	<a class="nav-link" href="/index.html">Home <span class="sr-only">(current)</span></a>
						      	</li>
						      	<li class="nav-item">
						        	<a class="nav-link" href="/about.html">About</a>
						      	</li>
						      	<li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          Projects
						        </a>
						 			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="/helldivers.html">Helldivers 2</a>
										<a class="dropdown-item" href="/sniperelite.html">Sniper Elite Resistance</a>
										<a class="dropdown-item" href="/ufc4.html">UFC 4</a>
										<a class="dropdown-item" href="/keendreams.html">Keen Dreams</a>
										<a class="dropdown-item" href="/elementspace.html">Element Space</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="/mobile&web.html">Mobile & Web</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="/jamgames.html">Jam Games</a>
						 			</div>
						      	</li>
						    	<li class="nav-item">
						    	    <a class="nav-link" href="">Contact</a>
						    	</li>
						    </ul>
						</div>
				</nav>				

			</div>

		</header>

		<!-- HEADER END -->
		
		<!-- BODY -->

		<body class="darkBG view">

		<div class = "container">					
			<div class = "jumbotron-secondary top-space shadow">
				<h4 class="text-center" style="color:white"></h4>

				<div class="row no-gutters justify-content-center jumbotron-secondary">
					
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">

						<!-- LOCATION & SOCIAL NETWORKS -->
						<div class = "container d-none d-md-block">	
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
								<!--Google map-->
									<label style="color:white">Where in the world...</label>
									<div id="map-container" class="rounded top-space z-depth-1-half map-container mb-5" style="height: 300px">
									</div>							
							</div>
						</div>				 
					

						<!-- SOCIAL MEDIA -->

						<!-- DESKTOP / TABLET -->
						<div class = "container d-none d-md-block">	
							<div class="row no-gutters justify-content-center jumbotron-secondary">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
									<div>
										<aadress style="color:white">On The Web</aadress>
									</div> 
									<a href="https://www.linkedin.com/in/kevmiles/"><img src="/Assets/Logos/linkedin.png" class="img-fluid rounded-circle shadow text-center" alt="Code" style="width: 8%"></a>
									<a href="https://x.com/_kevmiles"><img src="/Assets/Logos/x-logo-white.png" class="img-fluid rounded-circle shadow text-center" alt="Code" style="width: 8%">
									<a href="https://kmiles.newgrounds.com/"><img src="/Assets/Logos/newgrounds.png" class="img-fluid rounded-circle shadow text-center" alt="Code" style="width: 8%"></a>									
								</div>	
							</div>
						</div>						
					</div>

					<!-- CONTACT FORM -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
						<form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
							<div class="row no-gutters justify-content-center jumbotron-secondary">						
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center form-group">
									<fieldset>
										<label style="color:white">Name</label>
										<input type="text" class="form-control" name="name" value="<?= $name ?>">
										<span class="error" style="color:red"><?=$name_error ?></span>
									</fieldset>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center form-group">
									<fieldset>
										<label style="color:white">Email</label>
										<input type="text" class="form-control" name="email" value="<?= $email ?>">
										<span class="error" style="color:red"><?=$email_error ?></span>
									</fieldset>							
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center form-group">
									<fieldset>
										<label style="color:white">Subject</label>
										<input type="text" class="form-control" name="mailsubject" value="<?= $mailsubject ?>">
										<span class="error" style="color:red"><?=$mailsubject_error ?></span>
									</fieldset>
								</div>

								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center form-group">
									<fieldset>
										<label style="color:white">Message</label>
										<textarea class="form-control" rows="6" name="message" value="<?= $message ?>"></textarea>
									</fieldset>
									
								</div>
								
								<div class="form-group">
									<fieldset>
										<button name="submit" class="btn btn-outline-info" type="submit" id="contact-submit" data-submit="Sending...">SEND</button>
									</fieldset> 
								</div>								
							</div>
						</form>

						<div class="form-group">
								<span class="success" style="color:green"><?= $success ?></span>
						</div>

							<!-- SOCIAL MEDIA -->

							<!-- MOBILE -->
						<div class = "container d-md-none">	
							<div class="row justify-content-center jumbotron-secondary">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
									<div>
										<aadress style="color:white">On The Web</aadress>
									</div>
									<a href="https://www.linkedin.com/in/kevmiles/"><img src="/Assets/Logos/linkedin.png" class="img-fluid rounded-circle shadow text-center" alt="Code" style="width: 20%"></a>
									<a href="https://x.com/_1Kevo_"><img src="/Assets/Logos/twitter.png" class="img-fluid rounded-circle shadow text-center" alt="Code" style="width: 20%"></a>
									<a href="https://kmiles.newgrounds.com/"><img src="/Assets/Logos/newgrounds.png" class="img-fluid rounded-circle shadow text-center" alt="Code" style="width: 20%"></a>	
								</div>	
							</div>
						</div> 	
					</div>					
				</div>		
			</div>																			
		</div>	

		<!-- BODY END -->

		<!-- FOOTER -->

		<div class = "container">
			<footer = class="secondary text-center top-space">&#169 Kevin Miles
				<script>
					document.write(new Date().getFullYear())
				</script>
			</footer>
		</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places&key=AIzaSyBT_0AudAx9eTfh72yYlzf5O9QDTu-M9Aw"></script>
	
	<!-- Google Maps settings -->

	<script>
		  // Regular map
		  function regular_map() {
		      var var_location = new google.maps.LatLng(53.993178, -1.537608);

		      var var_mapoptions = {
		          center: var_location,
		          zoom: 10
		      };

		      var var_map = new google.maps.Map(document.getElementById("map-container"),
		          var_mapoptions);

		      var var_marker = new google.maps.Marker({
		          position: var_location,
		          map: var_map,
		          title: "Location"
		      });
		  }

		   // Initialize maps
	 	google.maps.event.addDomListener(window, 'load', regular_map);
	</script>  

	</body>

</html>