<?php
include("chunks/connect.php");
session_start();

if (isset($_POST['Searchbtn'])){
$search_v = ($_POST['search']);
if ($search_v == ""){
echo '<script> alert ("dude! please input something to search in the search box!"); </script>';
//header('location:index.php');
}
elseif ($search_v !== ""){
$_SESSION['search'] = $search_v;
header('location:search.php');
}
}
?>



<!DOCTYPE html>
<html>
<head>
<title> Computer Science & ICT</title>
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top"/>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear">
    <!-- ################################################################################################ -->

    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1> <img src="images/logo.png"> </img>
	  <a href="index.php"> COMP SCIENCE & ICT DEPARTMENT </a> </h1>
         <h2 style="text-align:center">  Step by step through technology </h2>
    </div>


    <div class="fl_right">
	<?php include_once ('chunks/loginicon.php'); ?>
      <form class="clear" method="Post" action="search.php">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" placeholder="Search Here" name="search"> </input>
          <button class="fa fa-search" type="submit" name="Searchbtn" id="search"> <em>Search</em> </button>
        </fieldset>
		
      </form>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear">
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>


           <li><a class="drop" href="#">Pages</a>

                  <ul>
            <li><a href="gallery.php">Gallery</a></li>
		<!--	<li><a href="shopping.php">Shop</a></li>  -->
            <li><a href="timetable.php">Time Table, News & Events</a></li>
          <!--  <li><a href="#">Sidebar Left 2</a></li>
            <li><a href="#">Sidebar Right</a></li>
            <li><a href="#l">Sidebar Right 2</a></li>
            <li><a href="#">Basic Grid</a></li> -->
          </ul>
               </li>
      <!--  <li><a href="gallery.php">Organisation</a></li> -->

        <li><a href="contact.php">Contact</a></li>
        	 <li><a href="profile.php">Profile page</a></li>
        <li><a class="drop" href="#">Register & Login</a>
          <ul>
            <li><a href="register.php"> Register</a></li>
            <li><a class="drop" href="#">Login</a>
              <ul>
                <li><a href="login.php"> Student</a></li>

                <li><a href="login.php">Staff</a></li>
              </ul>
            </li>
          </ul>

        </li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
</div>
