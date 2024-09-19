<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Ex 3</title>
</head>

<body>

	<table style="border: 1px solid black; border-collapse: collapse;">
		<?php
			$n = 8;
			$m = 8;
			for($i = 0; $i < $n; $i++){
				echo "<tr style='border: 1px solid black; border-collapse: collapse'>";

				for($j = 0; $j < $m; $j++){
					$suma = $j+$i;
					echo"<td style='border: 1px solid black;border-collapse: collapse'>$suma</td>";
				}
				
				/*Forma alternativa*/
				/*for($j = $i; $j < $m+$i; $j++){
					
					echo"<td style='border: 1px solid black;border-collapse: collapse'>$j</td>";
				}*/

			echo"</tr>";
			}
	 	?>
	</table>
	
</body>
</html>