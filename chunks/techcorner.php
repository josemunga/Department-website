
<li class="btmspace-15"><a href="#"><em class="heading">Tech Joke Of The Week</em> <img class="borderedbox" src="images/images/funny/fun.jpg" alt=""></a>
guess the sickest joke in computing? the ill algorithm!
</li>
<li class="btmspace-15"> <a href="#"><em class="heading">Tech Puzzle</em> <img class="borderedbox" src="images/images/funny/dog.jpg" alt=""></a>
<?php
include('chunks/comentan.php');
	if (isset($_SESSION['username'])) {

		echo  ' <h4> What did the dog post on the forum'.' ' .$_SESSION['username']. '?</h4> ' ;
		echo '
		<form class="clear" method="post" action="#">
          <fieldset>
            <input type="text" value="" placeholder="Funny message" name="funny101"/>
            <button class="fa fa-send" type="submit" title="Search" name="submit"> <em>Send</em></button>
          </fieldset>
        </form>
		';
	}
	else {
		echo ' <h4> Please Log in to comment on what the dog said </h4> ' ;
	}
?>
</li>


<?php
$query = "SELECT * FROM funcorner";
$result = mysqli_query($connection,$query);
$num_rows = mysqli_num_rows($result);
?>



<div id="twitter" >
<p>
<h1 style= "font-size:20px; color:orange;"> Responses from users about this image: </h1>

<?php
	 while($row = mysqli_fetch_array($result)){
			 $id =$row['id'];
			 $name =$row['name'];
			 $comment =$row['comment'];
			 echo '<li>' .$id. '. ' .$name.': '.$comment.'</li></br>';
	 }
?>
</p>

</div>
