[20,10,100,30,15,5]
<p><b>JAWAB</b></p>
<p>a.</p>
<p>Ascending</p>
<?php
$angka=array (20,10,100,30,15,5);
sort($angka);

$arrlength=count($angka);
for($x=0;$x<$arrlength;$x++)
   {
   echo $angka[$x].",";
   }
?>
<p>Descending</p>
<?php
$angka=array (20,10,100,30,15,5);
rsort($angka);

$arrlength=count($angka);
for($x=0;$x<$arrlength;$x++)
   {
   echo $angka[$x].",";
   }
?>
<p>b.</p>
<?php
$angka=array (20,10,100,30,15,5);
array_push($angka, "180");

$arrlength=count($angka);
for($x=0;$x<$arrlength;$x++)
   {
   echo $angka[$x].",";
   }
?>
<p>c.</p>
<?php
$angka=array ("20","10","100","30","15","5", "180");
unset($angka[3]);
print_r($angka)
?>
<p><a href="index.php">back</a></p>