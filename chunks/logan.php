<?php
session_start();

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password

// Connect to server and select database.
$connection = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($connection,"compscience")or die("Sorry unable to connect to database");

// login.php
//include_once 'header.php';
//echo "<div class='main'><h3>Please enter your details to log in</h3>";
$error = $user = $pass = "";
if (isset($_POST['submit']))
{
$user = ($_POST['username']);
$pass = ($_POST['password']);
if ($user == "" || $pass == "")
{
  echo '<script> alert ("Please fill out all fields") </script> <br />';
}
else
{

$query = "SELECT * FROM newstudents WHERE username='$user' and password='$pass'";
$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);
if( $count == 0)
{
echo '<script> alert ("invalid email or password") </script> <br />';
}
else
{
  echo '<script> alert ("welcome to chuka computing department website.
  you will now be redirected to the home page") </script> <br />';
$_SESSION['username'] = $user;
$_SESSION['password'] = $pass;
header("location:index.php");
}
}
}


?>
