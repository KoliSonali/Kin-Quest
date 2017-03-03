<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
<title>ADMIN</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="../quiz.css" rel="stylesheet" type="text/css">
  <style>
  body {
      position: relative; 
  }
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;}


  .section1 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;} 
  .section2 {padding-top:50px;height:250px;color: #fff; background-color: #00bcd4;align-content: center;}
  .section3 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;} 

.content {
    max-width: 650px;
    margin: auto;
}

  </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:150px;"> 
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Kin Quest </a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="home.php">Home</a></li>
           <li><a href="about.php">About</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav> 
<?php
include("header.php");
?>

<p class="head1">Adminstrative Login </p>
<form name="form1" method="post" action="login.php">
<table width="490" border="0">
  <tr>
    <td width="106"><span class="style2"></span></td>
    <td width="132"><span class="style2"><span class="head1"><img src="login.jpg" width="131" height="155"></span></span></td>
    <td width="238"><table width="219" border="0" align="center">
  <tr>
    <td width="163" class="style2">Login ID </td>
    <td width="149"><input name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td class="style2">Password</td>
    <td><input name="pass" type="password" id="pass"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input name="submit" type="submit" id="submit" value="Login"></td>
  </tr>
</table></td>
  </tr>
</table>

</form>
<div class="container-fluid" style="background-color:#F44336;color:#fff;height:70px;">
<footer>
<br>
  <a href="#"><i class="fa fa-google-plus"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-github-square"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <p>
  <h4>  Developed by Sonali Koli </h4>
  </p>
</footer>
</div>
</body>
</html>
