<?php
$server="remotemysql.com";
$username="LRNlZOZBZW";
$password="gE4pObIU81";
$database="LRNlZOZBZW";

$conn= mysqli_connect($server,$username,$password,$database);
if(!$conn) {
    echo "<script>alert('connection failed')</script>";
}
?>