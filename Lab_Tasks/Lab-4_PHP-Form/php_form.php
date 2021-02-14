<html>
	<head></head>
	<body>
	
		<?php
			$uname="";
			$err_uname="";
			$password="";
			$err_password="";
			$gender="";
			$err_gender="";
			$hobbies[]=array();
			$err_hobies="";
			$bio="";
			$err_bio="";
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["uname"])){
					$err_uname="*Username Required";
				}
				else if(strlen($_POST["uname"])<6){
					$err_uname="*Username should be at least 5 characters";
				}
				else{
					$uname=$_POST["uname"];
				}
				if(empty($_POST["pass"])){
					$err_password="*Password Required";
				}
				else{
					$password=$_POST["pass"];
				}
				if (!isset($_POST["gender"])){
                    $err_gender="*Gender Not Selected";
                }
				else{
					if (isset($gender) && $gender=="Male"){
						$gender=$_POST["gender"];
					}
					else{
						if (isset($gender) && $gender=="Female"){
							$gender=$_POST["gender"];
						}
				    }
				}
				if(!empty($_POST["hobbies"])){
                    foreach($_POST["Hobbies"] as $checked){
                        //echo $checked . '<br>';
                    }
                }
				else {
                    $err_hobies="*Hobbies is not selected";
                }
				if(empty($_POST["bio"])){
					$err_bio="*Bio Box is Empty";
				}
				
				else{
					$bio=$_POST["bio"];
				}
				
			}
			
		?>
	
		<form action="" method="post">
			<table>
				<tr>
					<td rowspan="2"><span>User access </span></td>
					<td>:<input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname">
					<span><?php echo $err_uname;?></span></td>
					
				</tr>
				<tr>
					<!--<td ><span>Password </span></td>-->
					<td>:<input type="password" placeholder="Password" value="<?php echo $password;?>" name="pass">
					<span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="<?php echo $gender;?>" name="gender">Male<input type="radio" value="<?php echo $gender;?>" name="gender">Female
					<span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td><span>Hobbies</span></td>
					<td>:<input type="checkbox" value="<?php echo $hobbies;?>" name="hobbies[]">Movies 
					     <input type="checkbox" value="<?php echo $Hobbies;?>" name="hobbies[]">Music 
						 <input type="checkbox" value="<?php echo $Hobbies;?>" name="hobbies[]">Games
						 <span><?php echo $err_hobies;?></span></td>
				</tr>
				<tr>
					<td><span>Profession </span></td>
					<td>:
						<select name="profession">
							<option>Teaching</option>
							<option>Business</option>
							<option>Service</option>
						</select> 
					</td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea value="<?php echo $bio;?>" name="bio"></textarea>
					<span><?php echo $err_bio;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
			 
			
		</form>
	</body>
</html>