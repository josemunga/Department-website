<div id="twitter" >
    <img src="images/images/userlogin.png" alternative="crap! i didn't load again!!"> </a>

<?php
	if (isset($_SESSION['username'])) {
  $thisnthat =  $_SESSION['username'];
  $alsothis = "  ";

  
		echo  '<h4> <a href="#'.$thisnthat.'"> logged in as: ' .$thisnthat. '</a>' .$alsothis. '      <a href="logout.php">Logout</a> </h4>' ;
		echo "";
	}
	else {
		echo ' <a href="login.php"> Sorry, you are not logged in </a>';
	}
?>

</div>
