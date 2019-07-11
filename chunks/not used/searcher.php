<html>
<header>
<title> my cow is pregnant </title>
</header>
<body>
<h3> this cow is amazing! </h3>

<?php
if (isset($_POST['search']))
{
$sch = ($_POST['search']);
if ($sch == "")
{
$error = "not set mate <br />";
}
else
{
  $query = mysqli_query($connection," SELECT * FROM search WHERE title = '%$sch%' || description = '%$sch%'");
  $num_rows = mysqli_num_rows($query);

$query = "SELECT * FROM search WHERE title LIKE '%$sch%' OR description LIKE '%$sch%'";
$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);
echo '<p><strong>'.$num_rows.'&nbsp &nbsp</strong> results for '.$sch.'</p>';
while($row=mysqli_fetch_array($query)){
    $id =$row['id'];
    $title =$row['title'];
    $desc =$row['description'];

echo '<h3><a href ="' . $id.'php">' .$title.'</a></h3><p> '.$desc.'</P></br>';
}
if( $count == 0)
{
$error = "<span class='error'>Username/Password
invalid</span><br /><br />";
echo "invalid email or password";
}
else
{
$_SESSION['username'] = $user;
header("location:index.php");
}
}
}
?>
</body>
</html>
