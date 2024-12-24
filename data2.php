<?php
//setting header to json
header('Content-Type: application/json');

include('koneksi.php');
$query = sprintf("SELECT SUM(sf.orderqty) total, p.NameSub category FROM sales_fact sf JOIN product_dimension p ON sf.ProductID = p.ProductID WHERE p.NameSub is NOT NULL GROUP BY p.NameSub ORDER BY total DESC LIMIT 10;");
$result2 = $koneksi->query($query);

$data2 = array();
foreach ($result2 as $row2){
	$data2[] = $row2;
}

$result2 -> close();

print json_encode($data2);
?>