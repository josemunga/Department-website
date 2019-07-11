<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password

// Connect to server and select database.
$connection = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($connection,"compscience")or die("Sorry unable to connect to database"); 

if(isset($_POST['firstname']) && isset($_POST['lastname'])  && isset ($_POST['username']) && isset ($_POST['password']) && isset($_POST['idnumber']) && isset( $_POST['age']) && isset ($_POST['gender']) && isset ($_POST['phone']) && isset($_POST['email']) && isset ($_POST['date']) ){ // Fetching variables of the form which travels in URL
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
if($fname !=''||$lname !=''||$uname !=''||$pass !=''||$idnum !=''||$age !=''||$gender !=''||$phone !=''||$email !=''||$date !=''){
//Insert Query of SQL
$query = mysqli_query("INSERT INTO newstudents(firstname, lastname, username, password, idnumber, age, gender, phone, email, date ) 
values ('$fname', '$lname', '$uname', '$pass', '$idnum', '$age', '$gender', '$phone', '$email', '$date')");
header( 'Location:registration.php');
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
mysqli_query($query);
}
mysqli_close($connection); 
// Closing Connection with Server
//header( 'Location:registration.php'); 
?>