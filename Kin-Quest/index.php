<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="quiz.css" rel="stylesheet" type="text/css">
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
          <li><a href="index.php">Main</a></li>
           <li><a href="signout.php">Sign Out</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav> 
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
	if(mysql_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{	
echo "<h1 class='style8' align=center>Wel come to Kin Quest </h1>";
		echo '<table width="28%"  border="0" align="center">
  <tr>
    <td width="7%" height="65" valign="bottom"><img src="image/HLPBUTT2.JPG" width="50" height="50" align="middle"></td>
    <td width="93%" valign="bottom" bordercolor="#0000FF"> <a href="sublist.php" class="style4">Subject for Quiz </a></td>
  </tr>
  <tr>
    <td height="58" valign="bottom"><img src="image/DEGREE.JPG" width="43" height="43" align="absmiddle"></td>
    <td valign="bottom"> <a href="result.php" class="style4">Result </a></td>
  </tr>
</table>';
   
		exit;
		

}


?>

   


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