<?php
include ('connect.php');

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$comment = $_POST['funny101'];
$name = $_SESSION['username'];

//If the posted values are equal to the database values, then session will be created for theuser.
//If the login credentials doesn't match, he will be shown with an error message.)

if($comment !=''||$name !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "INSERT INTO funcorner(comment, name )
values ('$comment', '$name')");
mysqli_query($connection, $query); //or die(mysqli_error());
  echo '<script> alert ("Comment successfull. Thanks for your feedback") </script> <br />';
//header( 'Location:contact.php');
}
else{
  echo '<script> alert ("Insertion Failed. Some Fields are Blank.... ") </script> <br />';
header( 'Location:contact.php');
}
    mysqli_close($connection);
  }
  
  
// Closing Connection with Server
//header( 'Location:registration.php');
?>
