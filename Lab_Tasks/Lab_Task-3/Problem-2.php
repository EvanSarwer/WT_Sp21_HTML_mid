<html>
    <head><title>Lab Task 3 - Problem 2</title></head>
	<body>
		<?php
			
			$mark=59;
			$grade;
			
			if($mark>=90)
			{
				$grade="A+";
				echo "Your mark: ". $mark . "<br> Grade: " .$grade;
			}
			else if($mark>=80 && $mark<90)
			{
				$grade="A";
				echo "Your mark: ". $mark . "<br> Grade: " .$grade;
			}
			else if($mark>=70 && $mark<80)
			{
				$grade="B";
				echo "Your mark: ". $mark . "<br> Grade: " .$grade;
			}
			else if($mark>=60 && $mark<70)
			{
				$grade="C";
				echo "Your mark: ". $mark . "<br> Grade: " .$grade;
			}
			else
			{
				$grade="F";
				echo "Your mark: ". $mark . "<br> Grade: " .$grade;
			}
			
		?>
	</body>
    
</html>