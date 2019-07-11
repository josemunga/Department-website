<?php
session_start();
$words=$_POST['words'];
if ($words)
{
    include_once ('connect.php;);
    $user=$_SESSION["logged"] ;
    $time=date('Y-m-d H:i:s'); //get current time
    $str="INSERT INTO chatroom(time,user,message) values ('$time','$user','$words');" ;
    mysql_query($str); //save message record into database
    mysql_close();
}
header( 'Location:chatroom.php');
?>