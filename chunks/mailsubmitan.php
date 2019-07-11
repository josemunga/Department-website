<?php
include ('connect.php');

if(isset($_POST['submit3'])){ // Fetching variables of the form which travels in URL
$mail = $_POST['mail'];

//If the posted values are equal to the database values, then session will be created for theuser.
//If the login credentials doesn't match, he will be shown with an error message.)

if($mail !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "INSERT INTO maillist(mail)
values ('$mail')");
mysqli_query($connection, $query); //or die(mysqli_error());
  echo '<script> alert ("Thanks for submitting your email to our mail list. well keep you updated monthly") </script> <br />';
//header( 'Location:contact.php');
}
else{
  echo '<script> alert ("Insertion Failed. Field Blank.... ") </script> <br />';
header( 'Location:contact.php');
}
    mysqli_close($connection);
  }


// Closing Connection with Server
//header( 'Location:registration.php');
?>
