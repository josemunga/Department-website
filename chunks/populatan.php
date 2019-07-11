<?php

include ('connect.php');

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$page = $_POST['page'];
$title = $_POST['title'];
$descr = $_POST['description'];
//If the posted values are equal to the database values, then session will be created for theuser.
//If the login credentials doesn't match, he will be shown with an error message.)

 if($indexe !=''||$title !=''||$desc !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "INSERT INTO search(page, title, description)
values ('$page', '$title', '$descr')");
mysqli_query($connection, $query); //or die(mysqli_error());
header("location:search.php");
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
  //  header("location:login.php");
    mysqli_close($connection);
}

// Closing Connection with Server
//header( 'Location:registration.php');
?>
