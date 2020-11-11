2020-05-01

<p><b>JAWAB</b></p>
<p>a.</p>
<?php 
 $input_string = "2020-05-01";
//menjadi: 05-20-01
//substr(string,start,length)
$year = substr($input_string, 2, 2);
$month = substr($input_string, 5, 2);
$day = substr($input_string, 8, 2);

echo $month . "-" . $year . "-" . $day;
 ?>

 <p>b.</p>
 <?php 
$input_string = "2020-05-01";
//menjadi: 05-20-01 dengan date format php        
$date_input = date_create($input_string);        
echo date_format($date_input, "m-y-d");
  ?>


 <p>c.</p>
 <?php 
  $input_string = "2020-05-01";
        //tampilkan 6 bulan ke depan dari tanggal di atas
        $time = strtotime($input_string);
        $final = date("d-m-Y", strtotime("+6 month", $time));
        echo $final;
  ?>
  <p>d.</p>
  <?php
$date1=date_create("1999-01-18");
$date2=date_create("2020-05-01");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
  ?>
<p><a href="index.php">back</a></p>