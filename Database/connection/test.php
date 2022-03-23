<?php 



include 'conn.php';

$selectAll = "SELECT * from messages ";
$query_base  = mysqli_query($conn,$selectAll);

printf(mysqli_affected_rows($conn));


echo "<br>";
while($row_data = mysqli_fetch_assoc($query_base)){
	echo $row_data['message'];

}