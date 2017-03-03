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

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
}

  .section1 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;} 
  .section2 {padding-top:50px;height:250px;color: #fff; background-color: #00bcd4;align-content: center;}
  .section3 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;} 

.content {
    max-width: 650px;
    margin: auto;
}
 .modal-header, .close {
      background-color: #F44336;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
  <script language="javascript">
function check()
{

 if(document.form2.lid.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form2.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form2.pass.focus();
	return false;
  } 
  if(document.form2.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form2.cpass.focus();
	return false;
  }
  if(document.form2.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form2.cpass.focus();
	return false;
  }
  if(document.form2.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form2.name.focus();
	return false;
  }
  if(document.form2.address.value=="")
  {
    alert("Plese Enter Address");
	document.form2.address.focus();
	return false;
  }
  if(document.form2.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form2.city.focus();
	return false;
  }
  if(document.form2.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form2.phone.focus();
	return false;
  }
  if(document.form2.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form2.email.focus();
	return false;
  }
  e=document.form2.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form2.email.focus();
			return false;
		}
  return true;
  }
  
</script>
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


<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="BTS1.jpg" alt="BTS" width="460" height="345">
        <div class="carousel-caption">
          <h3>BTS Quiz Site</h3>
          <p>The place to test your knowledge on the Princes of Kpop.</p>
        </div>
      </div>

      <div class="item">
        <img src="BTS2.jpg" alt="BTS" width="460" height="345">
        <div class="carousel-caption">
          <h3>Test your knwledge.</h3>
          <p>Was it Jimin who sings the first chorus in 'I Need U' or Jungkook ?.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="BTS3.jpg" alt="BTS" width="460" height="345">
        <div class="carousel-caption">
          <h3>Review</h3>
          <p>Cannot answer some question? New Army? No Problem. Review amd get the right answers.</p>
        </div>
      </div>

      <div class="item">
        <img src="BTS4.jpg" alt="BTS" width="460" height="345">
        <div class="carousel-caption">
          <h3>Give Tests Again and again.</h3>
          <p>Because why not !</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
 <div class="container-fluid">   
    <div class="content">
       <p><h1>Welcome, first time with Kintown?</h1></p>
       <p><h4>Fellow Army can test their knowledge of BTS here. </br></p>
       <p>Take the test.Are you ready ladies and gentlemen ?</h4></p>
    </div>
 </div>
 <br><br>
<div class="container">
<div class="jumbotron">

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" id="myBtn1">Login</button>
  <button type="button" class="btn btn-default btn-lg" id="myBtn2">  Sign Up</button>
  <!-- Modal -->
  <div class="modal fade" id="Log" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" name="form1" method="post" action="index.php">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Login ID</label>
              <input type="text" class="form-control" id="loginid2" placeholder="Enter email" name="loginid">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="pass2" placeholder="Enter password" name="pass">
            </div>
             <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
              <button type="submit" class="btn btn-success btn-block" name="submit" id="submit"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>
<script>
$(document).ready(function(){
    $("#myBtn1").click(function(){
        $("#Log").modal();
    });
});
</script>
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="Sign" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Sign Up</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" name="form2" method="post" action="signupuser.php" onsubmit="return check();">
           <div class="form-group">
              <label for="logid"><span class="glyphicon glyphicon-eye-open"></span> Login Id</label>
              <input type="text" class="form-control" placeholder="Enter Login ID" name="lid">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="name" placeholder="Enter email" name="name">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="pass" placeholder="Enter password" name="pass">
            </div>
             <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
              <input type="text" class="form-control" id="cpass" placeholder="Re-enter password" name="cpass">
            </div>

 <div class="form-group">
              <label for="address"><span class="glyphicon glyphicon-user"></span> Address</label>
              <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
            </div>
             <div class="form-group">
              <label for="city"><span class="glyphicon glyphicon-user"></span> City</label>
              <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
            </div>
             <div class="form-group">
              <label for="phone"><span class="glyphicon glyphicon-user"></span> Phone</label>
              <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
            </div>
			<div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off" name="Submit"></span> Sign Up</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 


<script>
$(document).ready(function(){
    $("#myBtn2").click(function(){
        $("#Sign").modal();
    });
});
</script>
</div>
</div>

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