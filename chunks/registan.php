<?php
include ('connect.php');

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$uname = $_POST['username'];
$pass = $_POST['password'];
$idnum = $_POST['idnumber'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];

//If the posted values are equal to the database values, then session will be created for theuser.
//If the login credentials doesn't match, he will be shown with an error message.)

if($fname !=''||$lname !=''||$uname !=''||$pass !=''||$idnum !=''||$age !=''||$gender !=''||$phone !=''||$email !=''||$date !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "INSERT INTO newstudents(firstname, lastname, username, password, idnumber, age, gender, phone, email, date )
values ('$fname', '$lname', '$uname', '$pass', '$idnum', '$age', '$gender', '$phone', '$email', '$date')");
mysqli_query($connection, $query); //or die(mysqli_error());
header( 'Location:login.php');
}
else{
  echo '<script> alert ("Insertion Failed. Some Fields are Blank.... ") </script> <br />';
header( 'Location:register.php');
}
    mysqli_close($connection);
  }
// Closing Connection with Server
//header( 'Location:registration.php');
?>
