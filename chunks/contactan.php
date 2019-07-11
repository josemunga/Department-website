<?php
include ('connect.php');

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$public_comment = $_POST['comment'];
$private_comment = "0";
$name = $_SESSION['username'];

//If the posted values are equal to the database values, then session will be created for theuser.
//If the login credentials doesn't match, he will be shown with an error message.)

if($public_comment !=''||$name !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "INSERT INTO chatroom(public_comment, private_comment, name )
values ('$public_comment', $private_comment, '$name')");
mysqli_query($connection, $query); //or die(mysqli_error());
  echo '<script> alert (" Public Comment successfull. Thanks for your feedback") </script> <br />';
//header( 'Location:contact.php');
}
else{
  echo '<script> alert ("Insertion Failed. Some Fields are Blank.... ") </script> <br />';
header( 'Location:contact.php');
}
    mysqli_close($connection);
  }
  
  
  
/* else if(isset($_POST['Submittoo'])){ // Fetching variables of the form which travels in URL
$private_comment = $_POST['comment'];
$public_comment = "0";
$name = $_SESSION['username'];

//If the posted values are equal to the database values, then session will be created for theuser.
//If the login credentials doesn't match, he will be shown with an error message.)

if($private_comment !=''||$name !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "INSERT INTO chatroom(public_comment, private_comment, name )
values ('$public_comment', $private_comment, '$name')");
mysqli_query($connection, $query); //or die(mysqli_error());
  echo '<script> alert (" Private Comment successfull. Thanks for your feedback") </script> <br />';
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
*/
?>
