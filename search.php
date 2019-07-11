<!DOCTYPE html>
<?php
include('chunks/header.php');

if (isset($_SESSION['search'])) {
$search_v = $_SESSION['search'];
	if(!$search_v ==''){
	include ('chunks/connect.php');
	}
}
else {
	echo '<script> alert ("Sorry dude, you might want to set your sessions first"); </script>';
	$search_v = $_SESSION['search'];
}
?>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>

<?php
$query = "SELECT * FROM search WHERE title LIKE '%$search_v%' OR page LIKE '%$search_v%' OR description LIKE '%$search_v%'";
$result = mysqli_query($connection,$query);
$num_rows = mysqli_num_rows($result);
?>

<strong>
<?php echo '<h3>' .$num_rows; ?>
&nbsp;&nbsp;</strong> results found for the search phrase:
<?php echo '"' .$search_v. '"'  ?> Click on the header to go to the page with the search term
</h3>
<?php
	 while($row=mysqli_fetch_array($result)){
			 $id =$row['id'];
			 $title =$row['title'];
			 $page =$row['page'];
			 $desc =$row['description'];
			 echo '<h3><a href ="' . $page.'">' .$title. '</a> </h3> <p>'.$desc.'</P></br>';
	 }
?>
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav>
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
</body>
</html>
