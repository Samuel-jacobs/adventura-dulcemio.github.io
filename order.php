<!Doctype HTML>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
	<link href="order.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Averia Serif Libre' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Caveat Brush' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Sedgwick Ave Display' rel='stylesheet'>
	<title> Order </title>
	
</head>
<body>

<div data-spy="scroll" data-target=".navbar" data-offset="50" id="navcolor">
<nav class="navbar navbar-expand-md fixed-top navbar-light shadow  bg">
	<a class="navbar-brand" href="#"> <img src="imgs/logo.jpg" height = "50px" width="50px"></a>
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon">
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav ">
			<li class="nav-item">
				<a class="nav-link font-weight-bolder" href="index.html"> Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bolder" href="about.html"> About </a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bolder" href="index.html/"> Products </a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bolder" href="order.php"> Order </a>
			</li>
			<li class="nav-item">
				<a class="nav-link font-weight-bolder" href="#footersection"> Contact us </a>
			</li>
		</ul>
	</div>
</nav>
</div>

<!-- carousel -->
<div id="slides"  class="carousel slide" data-ride="carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1" ></li>
	
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="imgs/img15.jpg" class="rounded-circle" width="1100" height="500" >
		<div class="carousel-caption">
			<h1 class="caption1 font-weight-bolder"> Place an Order </h1>
		</div>
	</div>
	<div class="carousel-item">
		<img src="imgs/image2.jpg"  >
		<div class="carousel-caption">
			<h1 class="caption1 font-weight-bolder"> Nationwide delivery, Free within abuja  </h1>
		</div>
	</div>
	<a class="carousel-control-prev" href="#slides" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#slides" data-slide="next">
		<span class="carousel-control-next-icon"></span> 
	</a>
</div>
</div>



<!-- order form -->
<?php include("form-handler.php"); ?>
<div id="orderform" class="mb-0">
	<h1 class="display-4"> Place An Order </h1>
	<p class="text-center ordertext"> We offer a discount of 20% on each purchase of up to 6 bottles. We give a higher discount for bulk purchases.
	Please <a href="contact.php"> contact us </a> if you wish to make purchase in wholesale or retail quantity.
	Delivery is free within abuja. </p> 
	
	
	<form role="form" class="orderform1" id="theForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<h3 class="pt-3"> Contact Information  </h3>
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<label for="name" class="font-weight-bolder"> Name </label>
				<input type="text" class="form-control" id="name" placeholder="your name" name="name" value="<?= $name ?>">
				<span class="error"> <?= $name_error ?>
			</div>
			<div class="col-lg-4 col-md-4">
				<label for="email"> Email </label>
				<input type="text" class="form-control" id="email" placeholder="example@email.com" name="email" value="<?= $email ?>"> 
				<span class="error"> <?= $email_error ?>
			</div>
			<div class="col-lg-4 col-md-4">
				<label for="number"> Phone </label>
				<input type="text" class="form-control" id="phone" placeholder="080 123 456 78" name="phone" value="<?= $phone ?>"> 
				<span class="error"> <?= $phone_error ?>
			</div>
			
		</div>
		<h3 class="pt-3"> Order Information </h3>
		
			<hr class="my-41">
            <div class="pb-3 ordercheck">
				<div class="form-check">
					<input type="hidden" name="checkList1" value="" />
                    <input tabIndex="1" class="form-check-input"  id="checkbox" name="checkList1" type="checkbox"  value="Santa Esperanca"
					onClick="total(this.form)" />Santa Esperanca		
				</div>
				<div class="pt-2">
					<span class="pl-4 pr-1"> Price: N2500 per 750ml</span><br>	
					<span class="pl-4 pr-1"> Quantity: </span>
					<input tabIndex="1" id="quantity" name="quantity" min="1" max="1000" type="number" class="quantity form-control" value=""
					onClick="total(this.form)"/>	
				</div> 
				
				<span  class="pl-3" id="subtotal"> Total: </span>
			</div> 
			<hr class="my-41">
            <div class="pb-4 ordercheck">
				<div class="form-check">  
					<input type="hidden" name="checkList2" value="" />
					<input tabIndex="2" class="form-check-input"  id="checkbox" name="checkList2" type="checkbox" value="Beroni" 
					onClick="total(this.form)"/> 
					Beroni		
				</div>
				<div class="pt-2">
					<span class="pl-4 pr-1"> Price: N2500 per 750ml</span><br>
					<span class="pl-4 pr-1"> Quantity: </span>
					<input tabIndex="2" id="quantity" name="quantity" min="1" max="1000" type="number" class="quantity form-control" value=""
					onClick="total(this.form)"/>	
				</div>
				
				<span  class="pl-3" id="subtotal2"> Total: </span>
			</div>
			<hr class="my-41">
            <div class="pb-4 ordercheck">  
                <div class="form-check">
					<input type="hidden" name="checkList3" value="" />
                    <input tabIndex="3" class="form-check-input"  id="checkbox" name="checkList3" type="checkbox"  value="Adega Do Moleiro" 
					onClick="total(this.form)"/> Adega Do Moleiro 
				</div>
				<div class="pt-2">
					<span class="pl-4 pr-1"> Price : N2500 per 750ml</span><br>
					<span class="pl-4 pr-1"> Quantity: </span>
					<input tabIndex="3" id="quantity" name="quantity" min="1" max="1000" type="number" class="quantity form-control" value=""
					onClick="total(this.form)"/>	
				</div> 
				
				<span class="pl-3" id="subtotal3"> Total: </span>
            </div>  
			
			<hr class="my-41">
			
			<div id="totalDiv">
			
				Grand Total:    
			</div>
			<button class="btn btn-primary btn-sm mt-3" name="review" type="button" onClick="checkout()"> review order </button>
			<hr class="my-41">
			<h1 class="pt-3"> Delivery Address </h1>
			
			<div class="row form-group">
				
				<div class="col-lg-4 col-md-4">
					<label for="State"> State: </label>
					<input type="text" class="form-control" id="state" placeholder="your state" name="state" required>
				</div>
				<div class="col-lg-4 col-md-4">
					<label for="LGA"> LGA </label>
					<input type="text" class="form-control" id="LGA" placeholder="your LGA" name="LGA" required>
				</div>
				<div class="col-lg-4 col-md-4">
					<label for="Address">House Address: </label>
					<input type="text" class="form-control" id="address" placeholder="your House address" name="address" required>
				</div>
			</div>
			
		<div>
			<label for="message" > Additional Requests: </label>
			<textarea class="form-control" placeholder="Message:" type="textarea" id="message"  value="<?= $message ?>" name="message"
			maxlength="6000" rows="5"></textarea>
		</div>
		<span class="error"> <?= $checkList_error ?> </span> <br>
        <div class="pt-3">
            <input class="btn btn-primary btn-sm" name="submit" type="submit" value="submit" />
        </div>
		<div class="success"> <?= $success ?> </div>
	</form>
</div> 
 

<!-- footer -->
<div id="footersection">
<div id="footer" class="mt-0">
<div class="row">
	
	<div class="col-lg-3 col-md-3 footer-logo">
		<img src="imgs/logo.jpg" alt="logo" class="rounded-circle" height="70px" width="70px">
		<h3 class="font-weight-bolder pt-3 logo-text"> Adventura Dulcemio Ltd</h3>
	</div>
	<div class="col-lg-3 col-md-3">
		<h3> Contact Us</h3>
		<hr class="my-2">
		<br>
		<p><i class="fa fa-envelope"> </i> Email: adventuradulcemio01@ gmail.com </p> 
		<p><i class="fa fa-phone"> </i> phone: 08012345678, 08012345678 </p>
		<p><i class="fa fa-map-marker-alt"> </i> Address: No 120 lungi multipurpose market, maitama, abuja. </p>
	</div>
	<div class="col-lg-3 col-md-3">
		
		<h3> Site Links </h3>
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
</div>
<hr class="my-1">
<p class="text-center pb-0 mb-0 "> &copy; Copyright Adventura Dulcemio ltd. </p> <br>
<p class="text-center"> <a class="footerlinks" href="samueljacobs.netlify.app"> By Samuel jacobs 2020 </a> </p>
</div>
</div>




<!-- scripts -->
	<script src="control.js"> </script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>

	<script>
		$(window).scroll(function(){
		$('nav').toggleClass('scrolled', $(this).scrollTop() > 250);
		});
	</script> 
	
	<script>
	function checkout() {
		var price = 2500;
		var message = "";
		var checkboxes  = document.forms["theForm"].elements["checkbox"];
		var quants      = document.forms["theForm"].elements["quantity"];
		
		for (var i = 0; i < checkboxes.length; i++) {
			if (checkboxes[i].checked) {
				switch(checkboxes[i].tabIndex) {
					case 1: message += "Santa esperanca"; break;
					case 2: message += "Beroni"; break;
					case 3: message += "Adega Do Moleiro"; break;
					default: message += "";
				}
				message += "     Quantity:   " + Number(quants[i].value) + 
				"     Price: N" +                       price * Number(quants[i].value) + "\n";
        }
			}
			 message += "" + document.getElementById("totalDiv").firstChild.data;
			  alert(message);   
		}
	</script>
	<script>
		function total(frm){
			
			var tot = 0;
			var subtotal = 0;
			var subtotal2 = 0
			var subtotal3 = 0
			var price = 2500;
			
			
			
			
			var checkboxes  = document.forms["theForm"].elements["checkbox"];
			var quants      = document.forms["theForm"].elements["quantity"];
				
			for (var i = 0; i < checkboxes.length; i++) 
				{
				if (checkboxes[i].checked) 
						{
							// if tabIndex correctly specified
							if (checkboxes[i].tabIndex == quants[i].tabIndex ) {
								// add to total
							tot += Number(quants[i].value) * price;
								
							}
							/*else{
								// notify of bug
							alert('Bug in code: tabIndex of checkbox '+i+' is not the same as tabIndex quantity '+i);}*/
							
						}
						document.getElementById("totalDiv").firstChild.data = "Total: N" + tot;
					
				}	
			
			for (var i = 0; i < checkboxes.length; i++) {
				if (checkboxes[i].checked){
					
					if (checkboxes[i].tabIndex == quants[i].tabIndex && checkboxes[i].tabIndex == 1){
						subtotal += Number(quants[i].value) * price;
						document.getElementById("subtotal").innerHTML = "Total: N" + subtotal; 
					}  
				    if (checkboxes[i].tabIndex == quants[i].tabIndex && checkboxes[i].tabIndex == 2) {
						subtotal2 += Number(quants[i].value) * price;
						document.getElementById("subtotal2").innerHTML = "Total: N" + subtotal2; 
					}
					if (checkboxes[i].tabIndex == quants[i].tabIndex && checkboxes[i].tabIndex == 3) {
						subtotal3 += Number(quants[i].value) * price;
						document.getElementById("subtotal3").innerHTML = "Total: N" + subtotal3; 
					}
					
						/*else{
								// notify of bug
					alert('Bug in code: tabIndex of checkbox '+i+' is not the same as tabIndex quantity '+i);}*/
				}
				
			}
		} 
	
	</script>
</body>
</html>






















