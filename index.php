<?php
// 	Write a program which can minimize the duplicates value of an array.. 
// You have to minimize code not array .. 
// For example... 
// Input : 
// a=['a67', 'b68', 'j24', 'k25', 'a67', 'b68' ,'a67', 'b68', 'j24', 'k25', 'a67', 'b68'];
// output :
// needs to return 
// a[0],a[4],a[6],a[10]=a67
// a[1],a[5],a[7],a[11]=b68
// a[2],a[8]=j24
// a[3],a[9]=k25



//Solution
$a=['a67', 'b68', 'j24', 'k25', 'a67', 'b68' ,'a67', 'b68', 'j24', 'k25', 'a67', 'b68'];

	$values = array_count_values($a);
	
	foreach ($values as $key => $value) {
		if(in_array($key, $a)){
			
			foreach ($a as $val => $vale) {
				if($key === $vale){
					$x = 0;
					$f = $key;
					$position = $f[0]."[".$val."]";
					echo $position;
					$value = $value - 1;
					if ($x < $value){
						echo ",";
					}
				}
				
			}
		}
		echo '='.$key.'<br>';	
	}


// a[0],a[4],a[6],a[10]=a67
// b[1],b[5],b[7],b[11]=b68
// j[2],j[8]=j24
// k[3],k[9]=k25
?>
<script type="text/javascript" src="ans.js"></script>