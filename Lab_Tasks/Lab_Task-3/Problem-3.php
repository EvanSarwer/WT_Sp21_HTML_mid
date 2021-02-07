<html>
    <head><title>Lab Task 3 - Problem 3</title></head>
	<body>

		<?php
			
			$length=30;
			$width=30;
			
			
			if($length== $width)
			{
				$area=$length*$width;
				$perimeter=2*($length+$width);
				echo "Area : ". $area . "<br>Perimeter: " . $perimeter. "<br> The shape is a square";
			}
			else
			{
				$area=$length*$width;
				$perimeter=2*($length+$width);
				echo "Area : ". $area . "<br>Perimeter: " . $perimeter;
			}
		?>
	</body>
    
</html>