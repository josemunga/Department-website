<?php
$sch = $_Get['search'];
if($sch=='Search Here'){
header('location:searcher.php');
}
if($sch!==''){
$connection = mysqli_connect('localhost', 'root', '');
}
if (!$connection){
die("Database Connection Failed" .mysqli_error());
}
$select_db = mysqli_select_db($connection ,'compscience');
if (!$select_db){
die("Database Selection Failed" . mysqli_error());
}
?>
