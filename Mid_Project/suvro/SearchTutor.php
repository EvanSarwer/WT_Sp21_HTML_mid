		<?php
			$district="";
			$err_district="";
			
			$area="";
			$err_area="";
			
			$gender="";
			$err_gender="";
			
			$class;
			$err_class="";
			
			$category="";
			$err_category="";
			
			$Extrainfo="";
			$err_Extrainfo="";
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				
				
				if(isset($_POST["district"]) && ($_POST["district"] == '0')) { 
				  $err_district="*please select District";
				}
				else{
					$district=$_POST["district"];
				}
				
				if(isset($_POST["area"]) && ($_POST["area"] == '0')) { 
				  $err_area="*please select Area";
				}
				else{
					$area=$_POST["area"];
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
				
				
				if(isset($_POST["class"])) {
					$class=$_POST["class"];
				}
				else{
					$err_class="*please select Class";
				}
			
				if(isset($_POST["category"]) && ($_POST["category"] == '0')) { 
				  $err_category="*please select category";
				}
				else{
					$category=$_POST["category"];
				}
				
				if(empty($_POST["Extrainfo"])){
					$err_Extrainfo="*this  Box is Empty";
				}
				else{
					$Extrainfo=$_POST["Extrainfo"];
				}
			}
		
		?>
		
		<html>
			<head>
		    <title> Search For Tutors </title> 
			</head>
		   
		    <body style="background-color:powderblue;">
			
			<h2 style="margin-top:30px;margin-left:35px;margin-right:93%;color:pink;background-color:RGB(80, 159, 0)"><b><a href="Home.php">Home</a></b></h3>
			
			<fieldset style="width:800px;border:solid 2px" >
			<legend> <h1> Search Tution</h1></legend>
		      
			  <form action="" method="post">
			   <table>
			   <tr>
					<td><span> Select District  </span></td>
					<td>:
						<select name="district"  >
							<option value="0">District </option>
							<option>Dhaka </option>
							<option>NarayanGanj </option>
							<option>Faridpur  </option>
						    <option>Gopalganj </option>
							<option>Gazipur </option>
							<option>kishoreganj </option>
							<option>Rajbari </option>
							<option>Narsingdi </option>
							<option>Shariatpur</option>
							<option>Tangail </option>
						</select><span style="color:red"><?php echo $err_district;?></span>
					</td>
						   <tr>
					<td><span> Select Area  </span></td>
					<td>:
						<select name="area">
							<option value="0">Area</option>
							<option>Bashudara Residential area  </option>
							<option>tangail area  </option>
							<option>Savar  </option>
						  </select><span style="color:red"><?php echo $err_area;?></span>
					</td>
					</tr>
					
					<tr>
						<td><span>Select Gender</span></td>
						<td>:<input type="radio" value="<?php echo $gender;?>" name="gender">Male<input type="radio" value="<?php echo $gender;?>" name="gender">Female
						<span style="color:red"><?php echo $err_gender;?></span></td>
					</tr>
				
				    <tr>
					<td><span>Select Category </span></td>
					<td>:
						<select name="category" >
							<option value="0">Bangla</option>
							<option>Bangla</option>
							<option>English</option>
							<option>Religious Studies </option>
						     <option>Arts </option>
							<option>Admission Test </option>
							<option>Special Skill Learning  </option>
						</select><span style="color:red"><?php echo $err_category;?></span>
					</td>
				</tr>
				<tr>
					<td><span>Select class </span></td>
					<td>:<input type="checkbox" value="playpen" name="class[]">playpen
					     <input type="checkbox" value="Secondary " name="class[]">secondary 
						 <input type="checkbox" value="Higher Secondary" name="class[]">higher secondary
						 <input type="checkbox" value="Admission test" name="class[]">playpen 
						 <span style="color:red"><?php echo $err_class;?></span></td>
				</tr>
				
				
				<tr>
					<td><span> Leave a comment </span></td>
					<td>:<textarea value="<?php echo $Extrainfo;?>" name="Extrainfo"></textarea>
					<span style="color:red"><?php echo $err_Extrainfo;?></span></td>
					
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="submit"></td>
				</tr>

			</table>


		</form>
	</body>
</html>