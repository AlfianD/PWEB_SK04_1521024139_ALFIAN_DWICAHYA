<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
<?php
	echo "Segitiga setengah ke kanan";
	echo "</br>";
	for( $a=5;$a>0;$a--)
	{
	for($b=6;$b>$a;$b--)
	{
	echo "*";
	}
	echo"</br>";
	}

	echo "Segitiga setengah ke kiri";
	echo "</br>";
	for ($i=1; $i <=5 ; $i++) {
 for ($j=4; $j>=$i ; $j--) {
 echo "&nbsp;&nbsp;";
 }
for ($k=$i; $k >=1 ; $k--) {
 echo "*";
 }
 echo "</br>";
}
		echo "Segitiga Penuh";
		echo '<br/>';
	for ($i = 0; $i < 5; $i++) {
 		for ($j = 5; $j > $i; $j--) {
 			echo '&nbsp;';
 		}
 		for ($k = 0; $k <= $i; $k++) {
 			echo '*';
 		}
 		echo '<br/>';
 	}
	?>
</body>
</html>