<?php

if (isset($_SESSION['username'])) {
$thisnthat =  $_SESSION['username'];
include ('chunks/connect.php');

if(isset($_POST['submit101'])){ // Fetching variables of the form which travels in URL
$funny = $_POST['funny101'];

//If the posted values are equal to the database values, then session will be created for theuser.
//If the login credentials doesn't match, he will be shown with an error message.)
if($funny !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "INSERT INTO funcorner(username, message)
values ('$thisnthat', '$funny')");
mysqli_query($connection, $query); //or die(mysqli_error());
header("location:index.php");
}
else{
  echo '<script> alert ("Insertion Failed. the Field is Blank.... ") </script> <br />';
}
  //  header("location:login.php");
    mysqli_close($connection);
}
}

// Closing Connection with Server
//header( 'Location:registration.php');
?>
