<html>
<?php
include('chunks/header.php');
include('chunks/contactan.php');
?>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->

      <div id="comments">
<?php	
	if (isset($_SESSION['username'])) {
		
		echo  ' <h2 style="vertical-alignment:center";> Submit your comments below <a href="#mash">' .$_SESSION['username'] . '</a> </h2> ' ; 
		echo '
		   <form action="contact.php" method="post">
           <div class="one_third">
           </div>
           <div class="block clear">
           <label for="comment">Your Comment</label>
           <textarea name="comment" id="comment" cols="25" rows="10"> </textarea>
           </div>
           <div style="horizontal-alignment: center">
           <input name="submit" type="submit" value="Submit Publicly">
           <input name="submittoo" type="submit" value="Submit Privately">
           &nbsp;
           <input name="reset" type="reset" value="Reset Form">
           </div>
           </form>
		    ' ;
	}
	else {
		echo  ' <h2 style="vertical-alignment:center";> Sorry, you cannot comment until you <a href="login.php"> log in </a> </h2> ' ; 
		echo '
		   <form action="#" method="post">
           <div class="one_third">
           </div>
           <div class="block clear">
           <label for="comment">Your Comment</label>
           <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
           </div>
           </form>
		    ' ;
	}
?>
        

 <?php
$query = "SELECT * FROM chatroom";
$result = mysqli_query($connection,$query);
$num_rows = mysqli_num_rows($result);
?>

         <h2>Recent public comments</h2>   
<?php
	 while($row = mysqli_fetch_array($result)){
			 $id =$row['autoincrement'];
			 $name =$row['name'];
			 $comment =$row['public_comment'];
			 
			 echo '<ul>
			 <article> 
			  <header>
			   <figure class="avatar"><img src="images/images/user.jpg" alt=""></figure>
				<address>
                By <a href="#">'
				.$name. '</a>
                </address>
				<time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
			  <div class="comcont">  
			  <p> ' .$comment. '
			</p>
              </div>
			
			  </header>
			 </article>
			 </ul> </br>';
	 }
?>

      </div>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<?php
include('chunks/footer.php');
?>
</body>
</html>