<html>
	<head>
	    <title>Tution Station</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<body style="background:rgb(151, 117, 250);">
	    
		
		<div class="menu-bar">
		
				<a href="Tution_station.php"><img src="logo.png" class="logo"></a>
			
			
				<ul>
					
					<li class="active"><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
					
					<li><a href="#"><i class="fa fa-clone"></i>Find Tution</a>
						<!--<div class="sub-menu-1">
							<ul>
									<li><a href="#">Search for Tutors</a></li>
									<li><a href="#">Rrequest A Tutor</a></li>
									<li><a href="#">Online Tutoring</a></li>
							 </ul>	
						 </div>-->
					</li>					 
					<li><a href="#"><i class="fa fa-clone"></i>How It Works</a>
						<!--<div class="sub-menu-1">
							<ul>
									<li><a href="#">For Student</a></li>
									<li><a href="#">For Higher Ed</a></li>
									<li><a href="#">What Customer Say</a></li>
							 </ul>	
						 </div>-->
					</li>
					<li><a href="#"><i class="fa fa-user"></i>About Us</a>
						<div class="sub-menu-1">
							<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Our Team</a></li>
									<li><a href="#"></i>Contact Us</a></li>
							 </ul>	
						 </div>	
					</li>
					<li><a href="Tution_station.php"><i class="fa fa-sign-out"></i>Log Out</a>
					
				</ul>
			
		</div>
		
		<div>
			<div class="left">
			
			<h1 style="color:rgb(0, 140, 0)">------Form Submited-----</h1>
			<p><br></p>
			<p><br></p>
			<p><br></p>
			
			<h2><?php
			echo "Name: ". $_POST["name"]."<br>";
			echo "Username: ". $_POST["uname"]."<br>";
			echo "Password: ". $_POST["pass"]."<br>";
			echo "Email: ".$_POST["email"]."<br>";
			echo "Phone: ".$_POST["number"]."<br>";
			echo "Address: ".$_POST["street"].",".$_POST["city"].",".$_POST["state"]."<br>";
			echo "Birt Date: ".$_POST["day"]."/".$_POST["month"]."/".$_POST["year"]."<br>";
			echo "Gender: ".$_POST["gender"]."<br>";
			echo "User Type: ".$_POST["userType"]."<br>";
			?>
			</h2>
			<div class="buttons">
			<p><br></p>
			<button onclick="window.location.href='login.php';">Go to Login</button>
		</div>
		
	</body>
</html>