<?php
include("includes/db.php");
session_start();


$emailError=null;
$passError=null;
$result=null;
$num1=null;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	//mysqli_real_escape_string($conn,$_POST['email']);

	$myuseremail=mysqli_real_escape_string($conn,$_POST['email']);
	$mypassword=mysqli_real_escape_string($conn,$_POST['password']);
	//$mypassword=sha1($mypassword);
   echo $myuseremail;
   echo $mypassword;
      

	$sql="SELECT userid FROM loginform WHERE useremail= '$myuseremail' and userpassword = '$mypassword' ";
	
     $result=mysqli_query($conn,$sql);
     $num1=mysqli_num_rows($result);

    //$num1=mysqli_num_rows($sql,$con)

	//if(num)
	/*if(mysqli_query($conn,$sql))
	{
			header("Location: home.php");

	}*/
      if ($num1 >0)
      {
	     echo "logged in";
	     header("Location:home.php");
      }

	else
	{
		$errMSG="Your Login and password is wrong";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title> ADF |  LOGIN </title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.css" rel="stylesheet">
	
	<link href="css/style.css" rel="stylesheet">

	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">

	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	
	<!-- HOVER MASTER -->
	<link href="css/hover.css" rel="stylesheet">
	
	<link href="css/hover-min.css" rel="stylesheet">
	
	<link href="css/demo-page.css" rel="stylesheet">

<style type="text/css">
	
.bodybackground{
	background-size:cover;
	background-image:url("images/agri_image.jpg");  
}


.title
{
	color:white;
	margin-left:30px;
	font-style:italic;
	font-size:20px;
	font-family:verdana;
}
.login
{
	background-color:transparent;
	float:right;
	margin-top:-23px;
	border:1px solid white;
	border-radius:5px;
	height:30px;
	width:90px;
	cursor: pointer;
}
.loginlabel
{
	position:absolute;
	color:white;
	font-style:bold;
	margin-left:25px;
	margin-top:5px;
	cursor: pointer;
}
.signup
{
	background-color:transparent;
	float:right;
	margin-top:-23px;
	border:1px solid white;
	border-radius:5px;
	height:30px;
	width:90px;
	margin-right:15px;
	cursor: pointer;
}
.signuplabel
{
	position:absolute;
	color:white;
	font-style:bold;
	margin-left:22px;
	margin-top:5px;
	cursor: pointer;
}
.signup:hover
{
	background-color:white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.signup:hover #signuplabel
{
	color:black;
}
.login:hover
{
	color:black;
	background-color:white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.login:hover #loginlabel
{
	color:black;
}


</style>
	

	
</head>

<body class="bodybackground">


	<nav class="navbar navbar-static-top"  style="margin-bottom:10px">
		<div class="container" >
			<div>
<label class="title">AGRICULTURE DEVELOPMENT FORUMS </label>
</div>
<div class="login" onclick="location.href='index.php';">
<label id="loginlabel" class="loginlabel">Log in</label>
</div>
<div class="signup" onclick="location.href='register.php';">
<label id="signuplabel" class="signuplabel">Sign up</label>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="support1.html"><button type="submit" class="btn btn-primary" style="width:180px" style="font-weight:bold" name="guest login" > Guest login\అతిథి లాగిన్ </button> </a>

</div>
</nav>
					
		
	<div class="container">

		<div id="formDiv">

			<form method="POST" name="frm" style="margin-top:40px" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">


            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>

				<div class="jumbotron" style="margin-top:50px">

					<h3> AGRICULTURE  DEVELOPMENT FORUMS</h3>

					<div class="form-group" >


						<label for="exampleInputEmail1"></label>
						<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-user"></span></span>
							<input type="email" name="email" class="form-control" placeholder="Email Address" value="" maxlength="50" required="required"> 
						</div>
						<span class="text-danger"></span>
					</div>	


					<div class="form-group">

						<label for="exampleInputPassword1"></label>
						<div class="input-group">
							<span class="input-group-addon"><span class="fa fa-lock"></span></span>

							<input  type="password" name="password" class="form-control" placeholder="Password"  maxlength="256" required="required"> 
						</div>
						<span class="text-danger"></span>
					</div>
					
					<button type="submit" class="btn btn-primary" style="width:180px" style="font-weight:bold" name="login" > Login </button> <br><br>
					
					
					<!--  <a href="forgot_password.php"> Forget Password?</a> -->
			       
		<!--	       <div class="form-group fonfam">
             <a href="register.php"><h4> Sign Up Here... </h4> </a>
            </div>
        
			    </div> -->

			</form>
			
			
	   </div>

    </div>
			
<footer>
	
	<div class="container text-center setcol">
		<p> Copyright &copy;  AFRICULTURE DEVELOPMENT FORUMS 2016 </p>
		
	</div>
	
</footer>

<!-- /.container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>








<?php ob_end_flush();?>