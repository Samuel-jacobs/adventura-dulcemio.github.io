<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
	<link href="contact.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Eater' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Averia Serif Libre' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Caveat Brush' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Sedgwick Ave Display' rel='stylesheet'>
	<title> Contact Us </title>
</head>
<body>
<!-- navigation -->
<div data-spy="scroll" data-target=".navbar" data-offset="50" id="navcolor">
<nav class="navbar navbar-expand-md fixed-top navbar-light shadow bg">
	<a class="navbar-brand" href="#"> <img src="imgs/logo.jpg" class="rounded-circle" height = "50px" width="50px"> </a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon">
	</button>
	<div class="collapse navbar-collapse bg" id="collapsibleNavbar">
		<ul class="navbar-nav bg-nav">
			<li class="nav-item">
				<a class="nav-link font-weight-bolder" href="index.html"> Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bolder" href="about.html"> About </a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bolder" href="#products"> Products </a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bolder" href="order.php"> Order </a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bolder" href="contact.html "> Contact us </a>
			</li>
		</ul>
	</div>
</nav>
</div>

<!-- carousel -->
<div id="slides"  class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	
</ul> 
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="imgs/img15.jpg" width="1100" height="500" >
		<div class="carousel-caption">
			<h1 class="caption1 font-weight-bolder"> Contact Us </h1> 
		</div>
	</div>
	
</div>
</div>
<!-- contact -->
<div id="contact">
<div class="row">
	<div class="col-lg-6 col-md-6 contact">
		<h1> Contact Information </h1>
		
		<div class="pt-3 pb-3">
			<i class="fa fa-map-marker-alt location"> </i> 
			<h5 class="pl-4 font-weight-bolder">Office Address </h5>
			<p class="pl-4"> No. 120 lungi multi purpose market, maitama, Abuja Nigeria </p>
		</div>
		<div class="pt-3 pb-3">
			<i class="fa fa-phone phone"> </i> 
			<h5 class="pl-4 font-weight-bolder"> Call Us </h3>
			<p class="pl-4"> 07011861800</p>
			<p class="pl-4"> 08054185420</p> 
		</div>
		<div class="pt-3 ">
			<i class="fa fa-envelope email"> </i>
			<h5 class="pl-4 font-weight-bolder">Email US </h5>
			<p class="pl-4"> jacobssamuel57@ gmail.com</p>
		</div>
	</div>
	
<?php include("contact-handler.php"); ?>
	<div class="col-lg-6 col-md-6 contactform">
		<h1> Send a Message </h1>
		
		<div class="myform pt-3 mt-4 ">
		<form role="form" class="myform1 mt-0 pt-0" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="POST">
			<div class="form-group">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<label for="name" >Name: </label>
						<input type="text" placeholder="Your name" class="form-control" id="name" name="name" >
						<span class="error"> <?= $name_error ?> 
					</div>
					<div class="col-lg-6 col-md-6">
						<label for="phone" >Phone: </label>
						<input type="text" placeholder="Phone number" class="form-control" id="phone" name="phone" >
						<span class="error"> <?= $phone_error ?> 
					</div>
				</div>
				<div class="pt-2">
					<label for="email">Email:</label>
					<input type="text"  placeholder="Email Address" class="form-control" id="email" name="email" >
					<span class="error"> <?= $email_error ?> 
				</div>
				<div class="pt-2">
					<label for="subject">Subject: </label>
					<input type="text" placeholder="subject" class="form-control" id="subject" name="subject" >
					<span class="error"> <?= $subject_error ?> 
				</div>
				<div class="pt-2">
					<label for="message" >Message: </label>
					<textarea class="form-control" placeholder="your message.." type="textarea" id="message" name="message"
					maxlength="6000" rows="5"></textarea>
					
				</div>	
			<div class="submitbtn">
				<button  type="submit" name="submit" class="btn btn-primary btn-sm mt-3"> send </button>
			</div>
			<div class="success"> <?= $success ?> </div>
		</div>
		</form> 
		</div>
	</div>
</div>
</div>




<!-- footer -->
<footer id="footersection">
<div id="footer">
<div class="row">
	
	<div class="col-lg-3 col-md-3 footer-logo">
		<img src="imgs/logo.jpg" alt="logo" class="rounded-circle" height="70px" width="70px">
		<h3 class="font-weight-bolder pt-3 logo-text"> Adventura Dulcemio Ltd</h3>
	</div>
	<div class="col-lg-3 col-md-3 ">
		<h3> Contact </h3>
		<hr class="my-2">
		<br>
		<p><i class="fa fa-envelope"> </i> Email: adventuradulcemio01@ gmail.com </p> 
		<p><i class="fa fa-phone"> </i> phone: 08012345678, 08012345678 </p>
		<p><i class="fa fa-map-marker-alt"> </i> Address: No 120 lungi multipurpose market, maitama, abuja. </p>
	</div>
	<div class="col-lg-3 col-md-3 pl-4">
		
		<h3> Quick Links </h3>
		<hr class="my-2">
		<br>
		<a class="footerlinks" href="index.html"> Home </a><br>
		<a class="footerlinks" href="about.html"> About </a><br>
		<a class="footerlinks" href="index.html"> Products  </a><br>
		<a class="footerlinks" href="order.php"> Order </a><br>
		<a class="footerlinks" href="contact.php"> Contact </a><br><br>
		
	</div>
	<div class="col-lg-3 col-md-3 mb-3 pb-3">
		<h3> Follow Us </h3>
		<hr class="my-2">
		<br>
		<a href="https://www.instagram.com/_samueljacobs_/"> <i class="fab fa-instagram"> </i> </a>
		<a href="https://www.facebook.com/samuel.jacobs.982845"><i class="fab fa-facebook"> </i> </a>
		<a href="https://twitter.com/_Samueljacobs_"><i class="fab fa-twitter"> </i> </a>
	</div>
</div> <br>
<hr class="my-1">
<p class="text-center pb-0 mb-0 "> &copy; Copyright Adventura Dulcemio ltd. </p> <br>
<p class="text-center"> <a class="footerlinks" href="samueljacobs.netlify.app"> By Samuel jacobs 2020 </a> </p>
</div>

</footer>



	<!-- scripts -->
	<script src="control.js"> </script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
		$(window).scroll(function(){
		$('nav').toggleClass('scrolled', $(this).scrollTop() > 250);
		});
	</script> 
</body>
</html>