Tampilkan urutan angka di bawah ini, menggunakan fungsi perulangan.
<p>$angka = "1,3,5,7,9,11,13,15";</p>
<p><b>JAWAB</b></p>
<?php
$i=1;
while($i <= 15){
	if($i % 2 != 0){
		echo $i.",";
	}
	$i++;
}
?>
<p><a href="index.php">back</a></p>