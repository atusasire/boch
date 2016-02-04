<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>BOCH INTERNATIONAL</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="bgimage">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/logo.png" width="170" style="margin-top: -25px"/></a>
          <br/>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <h2>BODY OF CHRIST INTERNATIONAL MINISTRIES</h3>
            <h4>EVANGELIZING DISCIPLING EDIFYING IN LOVE</h4>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>>
              <a href="index.php"><i class="fa fa-home fa-lg"></i></a>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"' ?>>
              <a href="about.php">About</a>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"' ?>>
              <a href="contact.php">Contact</a>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'devotion.php') echo 'class="active"' ?>>
              <a href="devotion.php">Devotionals</a>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'event.php') echo 'class="active"' ?>>
              <a href="event.php">Events</a>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'forum.php') echo 'class="active"' ?>>
              <a href="forum.php">Forum</a>
            </li>
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ministries <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Ministy</a></li>
                <li><a href="#">Ministy</a></li>
                <li><a href="#">Ministy</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">More Ministries</li>
                <li><a href="#">Ministy</a></li>
                <li><a href="#">Ministy</a></li>
              </ul>
            </li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'login.php') echo 'class="active"' ?>><a href="login.php"><i class="fa fa-user"></i></a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'twitter.php') echo 'class="active"' ?>><a href="twitter.php"><i class="fa fa-twitter"></i></a></li>
            <li <?php if (basename($_SERVER['PHP_SELF']) == 'facebook.php') echo 'class="active"' ?>><a href="facebook.php"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div style="margin-top:95px;"></div>