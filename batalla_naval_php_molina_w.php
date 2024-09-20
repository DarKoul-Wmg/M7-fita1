<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Ex 4</title>
</head>

<body>

	<table style="border: 1px solid black; border-collapse: collapse;">
		<?php
			$n = 5;
			$m = 5;

			for($i = 0; $i <= $n; $i++){
				echo "<tr style='text-align:center'>";

				for($j = 0; $j <= $m; $j++){
					if($i == 0 && $j == 0){
						echo"<td style='width:20px;border: 1px solid black;border-collapse: collapse; background-color:black;'></td>";
						
					} else if($j == 0){
						$char = chr($i + 64);
						echo"<td style='width:20px;border: 1px solid black;border-collapse: collapse'><strong>$char</strong></td>";
					} else if($i == 0){
						echo"<td style='width:20px;border: 1px solid black;border-collapse: collapse'><strong>$j</strong></td>";
					} else {
						echo"<td style='width:20px;border: 1px solid black;border-collapse: collapse'>0</td>";
					}
					
				}

			echo"</tr>";
			}
	 	?>
	</table>
	
</body>
</html>
