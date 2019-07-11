<?php
include_once('chunks/logan.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Computer Science & ICT</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
     <link rel="shortcut icon" type="image/png" href="images/assets/favicon.png" />

</head>

<body class="body-Login-back">

    <div class="container">

        <div class="row">
           

            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="" name="myform">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" id="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="password" name="password" id="password" type="password">
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" id="submit" value="Register">Login</button>
                            </fieldset>
                        </form>
                       <span> Dont have an account? <a class="logo" href="register.php"> Sign up here <img src="images/images/userlogin.png" alt="Universum" /> </a> </span> <div />
					   <span> You'd rather not? <a class="logo" href="index.php"> Go back to the home page <img src="images/images/close.png" alt="Universum" /> </a> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>