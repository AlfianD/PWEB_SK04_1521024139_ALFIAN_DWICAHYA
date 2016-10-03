<html>
<head>
	<title>AKN BOJONEGORO</title>
</head>
<body>
	<?php
	$x = "MB25";
	if ($x == "MB25") {
		echo 'Nama Barang = Motherboard<br>';
		echo 'Harga 250';
	}
	elseif ($x == "PR80") {
		echo 'Nama Barang = Printer<br>';
		echo 'Harga 750';
	}
	elseif ($x == "M717") {
		echo 'Nama Barang = Mouse<br>';
		echo 'Harga 30';
	}
	elseif ($x == "MM34") {
		echo 'Nama Barang = Memori<br>';
		echo 'Harga 150';
	}
	elseif ($x == "K987") {
		echo 'Nama Barang = Keyboard<br>';
		echo 'Harga 35';
	}
	else {
		echo 'Kode Barang Salah';
	}
	?>
</body>
</html>