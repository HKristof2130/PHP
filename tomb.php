<?php

	$x = array(5,2,-6,14,9);
	
	
	function tombkiir($arr){
		
		foreach( $arr as $temp){
			echo $temp."<br />";
		}
		
	}
	
	function namedArrayPrint($arr){
		
		foreach($arr as $key=>$value){
			
			echo "Név: ".$key." kor: ".$value."<br />";
		}
		
	}
	
	sort($x);
	tombkiir($x);
	rsort($x);
	echo "<br/>";
	tombkiir($x);
	
	echo "<br/>";
	
	$person = array("Kristóf"=>20, "Timi"=>21, "Lotti"=> 30, "Adrián"=> 11);
	asort($person);
	namedArrayPrint($person);
	echo "<br/>";
	arsort($person);
	namedArrayPrint($person);
	echo "<br/>";
	ksort($person);
	namedArrayPrint($person);
	echo "<br/>";
	krsort($person);
	namedArrayPrint($person);
	echo "<br/>";
	
	
	$y = 5;
	$z = 6;
	
	function kiertek(){
		global $y;
		echo $y."<br />";
		$GLOBALS['z']= $GLOBALS['y'] + $GLOBALS['z'];
	}
	
	kiertek();
	echo $z."<br />";





?>