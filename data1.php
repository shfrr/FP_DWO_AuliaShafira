<?php
//setting header to json
header('Content-Type: application/json');

include('koneksi.php');
$query = sprintf("SELECT SUM(sf.orderqty) total, p.Name product FROM sales_fact sf JOIN product_dimension p ON sf.ProductID = p.ProductID GROUP BY p.Name ORDER BY total DESC LIMIT 10");
$result1 = $koneksi->query($query);

$data1 = array();
foreach ($result1 as $row1){
	$data1[] = $row1;
}

$result1 -> close();

print json_encode($data1);
?>