<?php
include('chunks/registan.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Computer Science & ICT</title>
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
                    <h3 class="panel-title">New Students Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="" name="myform">
                        <fieldset>
                            <div class="form-group">
<span style="color:skyblue; font-size:12px;"> <strong> First Name: </strong> </span> <input class="form-control" type="text" name="firstname" id="firstname" required />
<span style="color:skyblue; font-size:12px;"> <strong> Last Name: </strong> </span>  <input class="form-control" type="text" name="lastname" id="lastname" required />
<span style="color:skyblue; font-size:12px;"> <strong> Username: </strong> </span> <input class="form-control" type="text" name="username" id="username" onmouseout="validUser()" onblur="validUser()" required />
<span style="color:skyblue; font-size:12px;"> <strong> Password: </strong> </span> <input class="form-control" type="password" name="password" id="password" required />
<span style="color:skyblue; font-size:12px;"> <strong> Id Number: </strong> </span> <input class="form-control" type="text" name="idnumber" id="idnumber"   required />
<span style="color:skyblue; font-size:12px;"> <strong> Age: </strong> </span> <input class="form-control" type="text" name="age" id="age" />
<span style="color:skyblue; font-size:12px;"> <strong> Gender: </strong> </span> <select class="form-control" type="text" name="gender" id="gender" > <option value="male"> Male </option> <option value="female"> Female </option> required <select/>
<span style="color:skyblue; font-size:12px;"> <strong> Phone no: </strong> </span> <input class="form-control" type="text" name="phone" id="phone" required  />
<span style="color:skyblue; font-size:12px;"> <strong> Email : </strong> </span> <input class="form-control" type="email" name="email" id="email" required />
<span style="color:skyblue; font-size:12px;"> <strong> Date : </strong> </span> <input class="form-control" type="date" name="date" id="date"  />
                            </div>
<button class="btn btn-lg btn-success btn-block" type="submit" name="submit" id="submit" value="Register" onclick="tuma()" ;>Register</button>
<span> Already have an account? Login  <img src="images/images/next.png" alt="damn son! it didn't load!" /> <a class="logo" href="login.php"> here  </a> </span> <br/>
<span> You'd rather not? <a class="logo" href="index.php"> Go back to the home page <img src="images/images/close.png" alt="Universum" /> </a> </span>
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
