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
			//Army con todos los barcos almacenados:
			$army = [];

			/* 4 * 1, 3 * 2, 2 * 3, 4 * 1       SHIP = [A1,2,[A1,A2]]*/
			/* SHIP = [posicion inicial,direccion de generación,impactos]*/
			/*direccion de generación:  0= ^, 1= >,  2= |, 3= < */	
			$BattleShip1 =[[1,1],[2,1],[3,1],[4,1]];
			$army[] = $BattleShip1;

			$Destroyer1 =[[1,3],[2,3],[3,3]];
			$Destroyer2 =[[4,4],[4,5],[4,6]];
			$army[] = $Destroyer1;
			$army[] = $Destroyer2;

			$Cruiser1 =[[8,1],[8,2]];
			$Cruiser2 =[[5,2],[6,2]];
			$Cruiser3 =[[7,7],[8,7]];
			$army[] = $Cruiser1;
			$army[] = $Cruiser2;
			$army[] = $Cruiser3;

			$Fragate1 =[[1,7]];
			$Fragate2 =[[2,9]];
			$Fragate3 =[[7,5]];
			$Fragate4 =[[6,8]];
			$army[] =$Fragate1;
			$army[] =$Fragate2;
			$army[] =$Fragate3;
			$army[] =$Fragate4;

			//Array para generar coordenadas de barcos? y priterar en mapa? "X"
			$shipCoords = [];
			//Para generar las de cada barco: Se genera coord inicial y con random + compobacion de que se puede generar en esa direccion
			$initialCoord = 0;
			//otra array para comporbar las coordenadas ocupadas por otros barcos:
			$ocupedCoords = [];

			$n = 9;
			$m = 9;

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
						$coordFound= false;
						foreach ($army as $ship){
							foreach ($ship as $coord) {
								if($coord[0] == $i && $coord[1] == $j){
									echo"<td style='width:20px;border: 1px solid black;border-collapse: collapse'>X</td>";
									$coordFound = true;
									break;
								}
							}
							if($coordFound){
								break; //Salir si esta ocupada
							}
						}
						if(!$coordFound){
							echo"<td style='width:20px;border: 1px solid black;border-collapse: collapse'>~</td>"; //genera agua si esta libre
						}
					}				
				}
			echo"</tr>";
			}
	 	?>
	</table>
</body>
</html>
