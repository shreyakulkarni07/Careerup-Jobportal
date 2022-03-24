<?php
$server="bmeecvph6tboduoyzj2d-mysql.services.clever-cloud.com";
$username="ugh0nneixo3zmltu";
$password="3PH814MuGlb1PrVhMUkT";
$database="bmeecvph6tboduoyzj2d";

$conn= mysqli_connect($server,$username,$password,$database);
if(!$conn) {
    echo "<script>alert('connection failed')</script>";
}
?>