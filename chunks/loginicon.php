<div  >
    

<?php
	if (isset($_SESSION['username'])) {
	echo '';
	$thisnthat =  $_SESSION['username'];
	$alsothis = "  ";
		echo  '
<div class="wrapper row1">
 <div class="rounded">
	<nav id="mainav">
		
		<li> <img  src="images/images/userlogin.png" alternative="crap! i didnt load again!!"> </img> logged in as: ' .$thisnthat. '' .$alsothis. ' <a href="logout.php">Logout</a> </li>
		
	</nav>
 </div>
</div>
		' ;

	}
	
	
	else {
echo '
<div class="wrapper row1">
<div class="rounded">
	<nav id="mainav">
	
        <ul>
        <li> <img  src="images/images/userlogin.png" alt="crap! i didnt load again!!"> </img> <a  href="#">You are not logged in</a>
        <ul>
		<li><a href="login.php"> Login</a></li>
		<li><a href="register.php">Register</a></li>
		</ul>
        </li>
		</ul>
		
	</nav>
 </div>
</div>
		
		';
	}
?>

</div>
