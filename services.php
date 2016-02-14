<?php
	$to = "jponce1330@gmail.com";
	$subject = "Xpertcom";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$topic = $_POST['topic'];
	$message = $_POST['message'];

$body = <<<EMAIL
	
	$message

	Sincerely,
	$name 

	P.S. Oh yeah, my email is $email.

EMAIL;

$header = "From: $email";

if ($_POST) {
	if ($name == '' || $email == '' || $message == '')
	{
			$feedback = 'Fill out all the fields';	
	} else {
			mail($to, $subject, $body, $header);
			$feedback = 'hey, this is actually working';
	}
}

?>
<!doctype html>
<html>
	<head>
		<title>Xpertcom</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div id="container" class="cf">
			<header>
				<img class="logo" src="_imgs/background.jpg" width="800" height="82">
			</header>
			<nav class="mainmenu">
				<ul class="mainmenu">
					<li><a href="index.php">Home</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="services.php" class="chosen">Services</a></li>
					<li><a href="mission.php">Mission</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
			<div class="row">
				<div class="col-xs-offset-2 col-md-offset-2 col-lg-offset-2">
					<p>
						We provide services to state of the art equipment from various manufacturers to meet the ever changing demands of our clients' voice and data networks. Some of the products we specialize in are:
					</p>

					<p>
						<li>Nortel Meridian 1 Option 11C to Meridian 1 Option 81C</li>
						<li>Nortel Meridian mail</li>
						<li>Nortel Call Pilot</li>
						<li>Nortel Norstar Key System Units 6x16 to 0x32</li>
						<li>Nortel Star Talk voice mail and Flash</li>
						<li>Nortel Application Module (NAM)</li>
						<li>Sonicwall firewall</li>
						<li>AVST CallXpress Unified Messaging System</li>
						<li>Captaris Rightfax Server and Mobility Server</li>
						<li>Cisco Network Solutions</li>
					</p>
					
					<p>
						Xpertcom Solutions, Inc. can tailor services and support to our client needs. We provide emergency dispatch 24 hours, 7 days a week.
					</p>
				
					<p>
						Our technical support team is ready to respond to service issues via phone or email. Please feel free to contact us for more information.
					</p>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Contact</button>
					<div class="modal fade" id="myModal" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Modal Header</h4>
				          <p id="feedback"><?php echo $feedback ?></p>
				        </div>
				        <div class="modal-body">
							<form method="post" action="?" class="form">
								<p class="name">
									<input type="text" name="name" id="name" placeholder="Full Name" />
									<label for="name">Name</label>
								</p>
								
								<p class="email">
									<input type="text" name="email" id="email" placeholder="Email" />
									<label for="email">Email</label>
								</p>
								
								<p class="web">
									<input type="text" name="web" id="web" placeholder="Inquiries" />
									<label for="web">Inquiries</label>
								</p>		
							
								<p class="text">
									<textarea  id="message" name="message" placeholder="Message" col="42" rows="9"/></textarea>
								</p>
								
								<p class="submit">
									<input type="submit" value="Send"/>
								</p>
							</form>				        
						</div>
				      </div>
				    </div>
				  </div>
				</div>
			</div>		
				<script src="js/jquery-1.12.0.min.js"></script>
				<script src="js/bootstrap.min.js"></script>
				<script src="js/java.js"></script>
				
				<footer id="closing">
					&copy; 2015. All rights reserved 
				</footer>
			</div>
	</body>
</html>

			
