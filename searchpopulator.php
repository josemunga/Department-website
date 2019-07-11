<?php
include_once('chunks/populatan.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Search Populator || ICT</title>
    <!--CSS-->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
     <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />


 <!--  <link rel="shortcut icon" type="image/png" href="images/images/favicon.png" /> -->
 <link href="assets/css/style.css" rel="stylesheet" />
 <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

<div class="container">

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Add New Search Page Detail</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="" name="myform">
                        <fieldset>
                            <div class="form-group">
<span style="color:skyblue; font-size:12px;"> <strong> Page Name (eg: index.php): </strong> </span> <input class="form-control" type="text" name="page" id="page" required />
<span style="color:skyblue; font-size:12px;"> <strong> Page Title (eg: From The About Us Page): </strong> </span>  <input class="form-control" type="text" name="title" id="title" required />
<span style="color:skyblue; font-size:12px;"> <strong> The description (Loads of it!): </strong> </span> <input class="form-control" type="text" name="description" id="description"  required />
                            </div>
<button class="btn btn-lg btn-success btn-block" type="submit" name="submit" id="submit" value="Register" onclick="sandemwami()" ;>Add The Above Crap To The DB<a href="#"></a></button>
<span> Better yet,View current search results <img src="images/images/next.png" alt="damn son! it didn't load!" /> <a class="logo" href="search.php">here  </a> </span> <br/>
<span> No? Take your ass back to the <a class="logo" href="index.php">  home page <img src="images/images/close.png" alt="Universum" /> </a> </span>
							</div>

                <!-- Change this to a button or input when using this as a form -->
                </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="assets/plugins/jquery-1.10.2.js"></script>
<script src="assets/scripts/tuma.js"></script>
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
