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
		<a href="#"/> </a>
		<li> <a href="carttotal.php"> <img  src="images/logo.png" alternative="crap! i didnt load again!!"> </img> Items in Cart: ' .$cart_no.' </a> </li>
		
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
        <li> <img  src="images/images/userlogin.png" alt="crap! i didnt load again!!"> </img> <a class="drop" href="#"> Please log in to shop</a>
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
