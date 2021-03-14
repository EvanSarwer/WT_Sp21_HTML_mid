  <html>
	<head></head>
	<body style="background-color:powderblue;">
	
		<?php
		    $title="";
			$err_title="";
			
			$name="";
			$err_name="";
			
	        $email="";
			$err_email="";
			
			$instituate="";
			$err_instituate="";
			
			$medium="";
			$err_medium="";
			
			$class="";
			$err_class="";
			
			$day="";
			$err_day="";
			
			$salary="";
			$err_salary="";
			
			$number="";
			$err_phone="";
			
			$gender="";
			$err_gender="";
			
			
			$street="";
			$err_location="";
			
			$Extrainfo="";
			$err_Extrainfo="";
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["title "])){
					$err_title="*title Required@exmple:need a tutor...";
				}
				else{
					$name=htmlspecialchars($_POST["title"]);
				}
				if(empty($_POST["name"])){
					$err_name="*name Required";
				}
				else if(strlen($_POST["name"])<6){
					$err_name="*name should be at least 6 characters";
				}
				else{
					if(ctype_alnum($_POST["name"])){
					
						$name=htmlspecialchars($_POST["name"]);
				    }
					else{
						
					$err_name="*name only contain characters(space,symbols not allowed)";
					}
				}
				
				if (!isset($_POST["gender"])){
					$err_gender="*Gender Not Selected";
				}
				else{
					if (isset($_POST["gender"]) && ($_POST["gender"]=="Male")){
						$gender=$_POST["gender"];
					}
					else{
						if (isset($_POST["gender"]) && ($_POST["gender"]=="Female")){
							$gender=$_POST["gender"];
						}
					}
				}
				
				
				if (!isset($_POST["medium"])){
					$err_medium="*medium Not Selected";
				}
				else{
					if (isset($_POST["medium"]) && ($_POST["medium"]=="Bangla")){
						$medium=$_POST["medium"];
					}
					else{
						if (isset($_POST["medium"]) && ($_POST["medium"]=="English")){
							$medium=$_POST["medium"];
						}
					}
				}
			
				if(empty($_POST["email"])){
					$err_email="*Email Required";
				}
				else if(strpos($_POST["email"],"@")!=null){
					$s= strpos($_POST["email"],"@");
					if(strpos($_POST["email"],".",$s+1)!=null){
						$email=$_POST["email"];
					}
					else{
						$err_email="*Email missing (.) after @";
					}
				}
				else{
					$err_email="*Email missing @";
					
				}
				if(empty($_POST["instituate"])){
					$err_instituate="*write your institiation name";  
				}
				else{
					$instituate=$_POST["instituate"];
				}
				
				if(isset($_POST["class"]) && ($_POST["class"] == '0')) { 
				  $err_class="*please select Class";
				}
				else{
					$class=$_POST["class"];
				}
				
				if(isset($_POST["day"]) && ($_POST["day"] == '0')) { 
				  $err_day="*please select Day";
				}
				else{
					$day=$_POST["day"];
				}
				
				if(isset($_POST["salary"]) && ($_POST["salary"] == '0')) { 
				  $err_salary="*please select salary";
				}
				else{
					$salary=$_POST["salary"];
				}
			
				
				if(empty($_POST["number"])){
					$err_phone="*Phone Number Required";
				}
				else{
					if(ctype_digit($_POST["number"])){
						$number=$_POST["number"];
				    }
					else{
						$err_phone="*Number must be numeric";
					}
				}
				if(empty($_POST["street"])){
					$err_location="*please provide your location";
				}
				else{
					$street=$_POST["street"];
					}
			
				
				if(empty($_POST["Extrainfo"])){
					$err_Extrainfo="*this  Box is Empty";
				}
				else{
					$Extrainfo=$_POST["Extrainfo"];
				}
			}
			
			
		?>
		<h2 style="margin-top:30px;margin-left:35px;margin-right:93%;color:pink;background-color:RGB(80, 159, 0)"><b><a href="Home.php">Home</a></b></h3>
		<fieldset style="width:800px;border:solid 2px" >
			<legend> <h1>Make Tution Advertisement</h1></legend>
			<form action="" method="post">
				<table style="margin-left:5px">
				    <tr>
						<td align="right"><span> Title </span></td>
						<td>:<input size="29" type="text" value="<?php echo $title;?>" name="title">
						<span style="color:red"><?php echo $err_title;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span> Name </span></td>
						<td>:<input size="29" type="text" value="<?php echo $name;?>" name="name">
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
					 <tr>
						<td align="right"><span> Name of the Instituation</span></td>
						<td>:<input size="29" type="text" value="<?php echo $instituate;?>" name="instituate">
						<span style="color:red"><?php echo $err_instituate;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Email </span></td>
						<td>:<input size="29" type="text" value="<?php echo $email;?>" name="email">
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span>Select  medium </span></td>
						<td>:<input type="radio" value="Bangla" name="medium">Bangla <input type="radio" value="English" name="medium">English
						<span style="color:red"><?php echo $err_medium;?></span></td>
					</tr>
					
					<tr><td align="right"><span>Select Class </span></td>
					<td>:
						<select name="class">
							<option value="0">  Kg*  </option>
							<option>  Kg*  </option>
							<option> Nursery</option>
							<option>playpen </option>
							<option>class 1 </option>
							<option>class 2</option>
							<option> class 3 </option>
						     <option>class 4</option>
							<option>class 5</option>
							<option> class 6</option>
							<option>class 7 </option>
							<option>class 8</option>
							<option> class 9 </option>
							<option>class 10</option>
							<option> class 11 </option>
						     <option>class 12 </option>
							<option>Secondary</option>
							<option> Higher Secondary </option>
							<option>Admission test </option>
							<option>others</option>
						
						</select><span style="color:red"><?php echo $err_class;?></span>
					</td>
				</tr>
					<tr>
						<td align="right"><span>Phone </span></td>
						<td>:<input size="29" type="text" placeholder="Number" value="<?php echo $number;?>" name="number">
						<span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td align="right" style="vertical-align: top" ><span> Select  Location  </span></td>
						<td>:<input size="29" type="text" placeholder="Select location" value="<?php echo $street;?>" name="street">
						<span style="color:red"><?php echo $err_location;?></span></td></td>
					</tr>
					
					 
					<tr>
					<td align="right">Day per week </td>
					<td>:<select name="day">
					
						<option value="0">Day</option>
						<?php
							for($i=1;$i<=7;$i++){
								echo "<option>$i</option>";	
							}
						?>
					</select><span style="color:red"><?php echo $err_day;?></span>
					</td>
					</tr>
					
					<tr>
					<td align="right">Salary range  </td>
						<td>:<select name="salary">
						
								<option value="0">Salary</option>
								
								<?php
									$salary = array("1000tk/month","2000tk/month","3000tk/month","4000tk/month","5000tk/month","6000tk/month","7000tk/month","8000tk/month","9000tk/month","10,000tk/month");
									foreach($salary as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select><span style="color:red"><?php echo $err_salary;?></span>
							
						</td>
					</tr>
					
					<tr>
						<td align="right"><span>Tutor Gender</span></td>
						<td style="padding:8px 0px 15px 0px"><span class="my-font1">: <input type="radio" value="Male" name="gender">Male <span class="my-font1"><input type="radio" value="Female" name="gender">Female</span></span>
						<span style="color:red"><?php echo $err_gender;?></span></td>
					</tr>
					
					<tr>
						<td align="right"><span>Extra Information :</span></td>
						<td><textarea value="<?php echo $Extrainfo;?>" name="Extrainfo"></textarea>
						<span style="color:red"><?php echo $err_Extrainfo;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Post Tution"></td>
					</tr>
					
				</table>
				 
				
			</form>
		</fieldset>	
	</body>
</html>