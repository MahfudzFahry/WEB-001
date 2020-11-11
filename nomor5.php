$buah = array(
<p>array( "NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),</p>
<p>array( "NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),</p>
<p>array( "NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),</p>
<p>array( "NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),</p>
<p>array( "NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),</p>
<p>array( "NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")</p>
<p>);</p>
<p><b>JAWAB</b></p>
<p>a.</p>
<?php 
$request = [];
$request['NAMA_BUAH'] = "PISANG";
$request['HARGA_BUAH'] = 5000;
$request['RASA_BUAH'] = "MANIS";

$buah = array(
	array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
	array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
	array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
	array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
	array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
	array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
);

array_push($buah,
	array("NAMA" => $request['NAMA_BUAH'], "HARGA" => $request['HARGA_BUAH'], "RASA" => $request['RASA_BUAH'])
);
$keys = array_column($buah, 'NAMA');

array_multisort($keys, SORT_DESC, $buah);

print_r($buah);

?>
<p>b</p>
<?php 
$buah = array(
	array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
	array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
	array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
	array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
	array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
	array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
);                

$index = 0;
foreach ($buah as $row) {

	if (strpos($row["NAMA"], 'K') === false) {
		unset($buah[$index]);
	}
	$index++;
}        

print_r($buah);
?>
<p>c.</p>
<?php       
        $buah = array(
            array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
            array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
            array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
            array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
            array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
            array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
        );                

        $index = 0;
        foreach ($buah as $row) {
            
            if ( ($row["RASA"] !== "MANIS") || ($row['HARGA'] >= 10000) ) {
                unset($buah[$index]);
            }
            $index++;
        }        
        print_r($buah);
?>
<p><a href="index.php">back</a></p>