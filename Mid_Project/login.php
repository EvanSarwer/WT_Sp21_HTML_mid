<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$err_message="";
	$userType="";
	$err_userType="";
	$err_message="";
	$userSG=array("Mina"=>"1234");
	$userTU=array("Raju"=>"2564");
	$link="";
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hassError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		if (!isset($_POST["userType"])){
            $err_userType="*User Type Not Selected";
			$hasError = true;
        }
		else{
			if (isset($_POST["userType"]) && ($_POST["userType"]=="Student/Guardian")){
				$userType=$_POST["userType"];
				
			}
			else{
				if (isset($_POST["userType"]) && ($_POST["userType"]=="Tutor")){
					$userType=$_POST["userType"];
					
				}
			}
		}
		if(!$hasError){
			if(($_POST["userType"]=="Student/Guardian")){
				foreach($userSG as $u=>$p){
					if($u==$uname && $p==$pass){
						
						header("Location: suvro/Home.php");
						/*$link="suvro/Home.php";*/
					}
				}
			}
			else if(($_POST["userType"]=="Tutor")){
				foreach($userTU as $u=>$p){
					if($u==$uname && $p==$pass){
						
						header("Location: TutorHome.php");
						/*$link="TutorHome.php";*/
					}
				}
			}
			else{
				$err_message="Invalid username, password or User Type";
			}			
		}
		$err_message="Invalid username, password or User Type";
		
	}
?>



<html>
	<head>
	    <title>Tution Station</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
	<body style="background:rgb(151, 117, 250);">
	    
		
		<div class="menu-bar">
		
			<a href="tution_station.php"><img src="logo.png" class="logo"></a>
		
			<ul>
				
				<li class="active"><a href="signup.php"><i class="fa fa-sign-in"></i>Sign Up</a></li>
				
				<li><a href="#"><i class="fa fa-clone"></i>Find A Tutor</a>
					<div class="sub-menu-1">
						<ul>
								<li><a href="#">Search for Tutors</a></li>
								<li><a href="#">Rrequest A Tutor</a></li>
								<li><a href="#">Online Tutoring</a></li>
						 </ul>	
					 </div>	
				</li>					 
				<li><a href="#"><i class="fa fa-clone"></i>How It Works</a>
					<div class="sub-menu-1">
						<ul>
								<li><a href="#">For Student</a></li>
								<li><a href="#">For Higher Ed</a></li>
								<li><a href="#">What Customer Say</a></li>
						 </ul>	
					 </div>
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
				
			</ul>
			
		</div>
		<div>
			
			<div class="center">
				<fieldset style="border:solid 10px;color:rgb(177, 151, 252);background-color:rgb(208, 191, 255);padding:20px" >
				<legend> <h1 style="color:rgb(166, 30, 77);font-weight:250px;font-size:50px;padding-bottom:30%;">Log in</h1></legend>
					
					<form action="<?php echo $link;?>" method="post">
						<table align="center">
							<tr>
								<td colspan="2" align="center"><span class="err-msg"><?php echo $err_message;?></span></td>
							</tr>
							<tr>
								<td><span class="my-font1">Username:</span> </td>
								<td style="padding:8px 0px 10px 0px"><input class="my-font my-text-field" type="text" value="<?php echo $uname;?>" placeholder="username" name="uname">
								<br><span class="err-msg"><?php echo $err_uname;?></span>
								</td>
							</tr>
							<tr>
								<td><span class="my-font1">Password: </span></td>
								<td style="padding:8px 0px 15px 0px"><input class="my-font my-text-field" type="password" placeholder="password"  name="pass">
								<br><span class="err-msg"><?php echo $err_pass;?></span></td>
							</tr>
							<tr>
								<td class="radio-style" ><input type="radio" value="Tutor" name="userType"><div class="radio-back"><img src="tutor.png" class="logo2"><span class="radio-text">as a<br>Tutor</span></div></td>
								<td class="radio-style" ><input type="radio" value="Student/Guardian" name="userType"><div class="radio-back"><img src="StudentGuardian.png" class="logo2"><span class="radio-text">as a<br> Student/Guardian</span></div>
								
								<span style="color:red"><?php echo $err_userType;?></span></td>
						    </tr>
							<tr>
								<td style="padding:20px 0 0 23px" colspan="2" align="right" ><input class="btn-mine my-font" type="submit"  value="Login" name="login">
							</tr>
						</table>
					</form>
				</fieldset>	
				
			<div class="buttons">
			<p><br></p>
			<span><h2>Don't have account, Please <a href="signup.php" class="signup-text" >Sign Up</a> first.</h2></span>
			
			</div>
		</div>
		
	</body>
</html>