<?php

	for($i =0 ; $i< 10; $i++){
		echo ("Kiirtam $i. <br />");
	}
	$i=0;
	while( $i<=4){
		echo ("$i kisebb mint 5 <br />");
		$i++;
	}
	
	$i =0;
	
	do{
		echo("A $i kisebb mint 6 <br/>");
		$i++;
	}while($i <= 5);
	
	
	$array = array(1,22,55,345,65634,2525,234245,25235,254254);
	echo count($array)."<br />";
	
	for($i=0; $i< count($array); $i++){
		if($array[$i] % 2 == 0){
			echo $array[$i]." páros szám. <br />";
		}
	
	}
	
	$szinek = array("fekete","feher","piros");
	echo "Méret: ".count($szinek)."<br />";
	array_push($szinek,"kek","lila","barna");
	print_r($szinek);
	echo "<br />";
	echo "Array_pop <br />";
	array_pop($szinek);
	print_r($szinek);
	echo "<br />";
	echo "array_unshift <br />";
	array_unshift($szinek, "citrom","narancs");
	print_r($szinek);
	echo "<br />";
	echo "array_shift <br />";
	array_shift($szinek);
	print_r($szinek);
	
	
	$autok = array(
		array("xyz123","BMW",4),
		array("abc123","Mercedes",4),
		array("abc456","Lambo",2),
		array("fsd456","Mercedes",2)
	);
	echo "<br />";

	echo $autok[2][1];
	echo "<br />";
	echo "<br />";
	
	echo '<table border="1">';
	echo "<tr><td> Rendszám: </td><td> Típus: </td><td>Ajtók száma: </td></tr>";
	for($i=0; $i<count($autok); $i++){
		echo "<tr>";
		for($j=0; $j< count($autok[$i]); $j++){
			echo "<td>".$autok[$i][$j]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	
	
	echo "<br />";
	echo "<br />";
	
	$whey = array(
		// a 2. 3. 4. dimenziós tomböket eltudom nevezni?
		array(

		array("PureWhey","IsoWhey"),
		array("100% WheyPro","hydrolyzedWhey")
		
		
		),
		array(

		array("VeganWhey","VeganProtein"),
		array("vmi","nem jut eszembe")
		
		)
	);
	
	
	echo "<br />";

	
	
	for($i=0; $i< count($whey); $i++){
		for($j= 0; $j < count($whey[$i]); $j++){
			echo "<br />";
			for($k = 0; $k < count($whey[$i][$j]); $k++){
					echo $whey[$i][$j][$k]." <br />";
			}
		
		
		
		}
		
		
	}
	
	
	

?>