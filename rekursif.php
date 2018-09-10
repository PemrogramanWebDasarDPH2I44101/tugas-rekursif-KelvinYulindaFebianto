<?php 
	function rekursif($kolom, $p){
		global $i;
		rekursif2($i, $kolom, $p);
		echo "<br>";
		if (--$kolom > $i) {
			rekursif($kolom, $p);
		}
	}
	function rekursif2($j, $kolom, $print){
		global $i;
		if ($j > $i - $kolom) {
			echo "$print";
			rekursif2($j - 1, $kolom, $print);
		}
	}
	$i = 0;
	rekursif(5,"&");

	echo "<br>======================================================================================<br><br>";
 	function recursive($L, $f){
 		global $col;
 		recursive2($col, $L, $f);
 		echo "<br>";
 		if (++$L < $col) {
 			recursive($L, $f);
 		}
 	}
 	function recursive2($k, $L, $c){
 		global $col;
 		if ($k > $col - $L - 1) {
 			echo "$c";
 			recursive2($k - 1, $L, $c + 1);
 		}
 	}
 	$col = 5;
 	recursive(0,1)
 ?>
