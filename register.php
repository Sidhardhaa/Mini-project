<?php
ob_start();
$name=null;
$email=null;
$mobile=null;
$pass=null;

   $nameError = null;
   $emailError = null;
   $mobileError = null;
   $passError = null;

/* 
 session_start();
 if( isset($_SESSION['user'])!="" ){
  header("Location: home.php");
 }
 */
include("includes/db.php");
 $error = false;

 if ( isset($_POST['register']) ) {
  
  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $mobile = trim($_POST['mobile']);
  $mobile = strip_tags($mobile);
  $mobile = htmlspecialchars($mobile);

  
  $pass = trim($_POST['password']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

  
  // basic name validation
  if (empty($name)) {
   $error = true;
   $nameError = "* Please enter your full name. *";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "* Name must have atleat 3 characters.*";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
   $nameError = "* Name must contain alphabets and space. *";
  }
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "* Please enter valid email address. *";
  } else {
   // check email exist or not
   $query = "SELECT useremail FROM loginform WHERE useremail='$email'";
   $result = @mysqli_query($query);
   $count = @mysqli_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "* Provided Email is already in use. *";
   }
  }

// basic mobile_number validation

if (empty($mobile)) {
   $error = true;
   $mobileError = "* Please enter your mobile number. *";
  } else if (strlen($mobile) < 10) {
   $error = true;
   $mobileError = "* Mobile Number must have atleat 10 digits. *";
  } else if (!preg_match("/^[0-9]+$/",$mobile)) {
   $error = true;
   $mobileError = "* Mobile Number must contain only digits. *";
  }
  

  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "* Please enter password.*";
  } else if(strlen($pass) < 8) {
   $error = true;
   $passError = "* Password must have atleast 8 characters.*";
  }
  
  // password encrypt using SHA256();
  //$password = hash('sha256', $pass);
  
  // if there's no error, continue to signup
  if( !$error ) {
   
   $query = "INSERT INTO loginform(username,useremail,uesrmobile,userpassword) VALUES('$name','$email','$mobile','$pass')";
   
    
   if (mysqli_query($conn,$query)) {
    $errTyp = "success";
    $errMSG = "* Successfully registered, you may login now *";
    unset($name);
    unset($email);
    unset($mobile);
    unset($password);
   } else {
    $errTyp = "danger";
    $errMSG = "* Something went wrong, try again later...*"; 
   } 
    
  }
  
  
 }
?>




<!doctype html>

<html>
	
	<head>
		
	<title>Registration Page</title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	


	 <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontssss/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="css/skins/_all-skins.min.css">

     

	<!-- HOVER MASTER -->
	<link href="css/hover.css" rel="stylesheet">
      
    <link href="css/hover-min.css" rel="stylesheet">
      
    <link href="css/demo-page.css" rel="stylesheet">

<style type="text/css">
  
 .bodybackground{
  background-size:cover;
  background-image:url("images/startpagebackground.png");  
}

}
</style>

	
	</head>
	
	
	<body class="bodybackground">

 
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" enctype="multipart/form-data">
			


			<div class="jumbotron">


            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">  
             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
    
			
			<h3 align="center"> REGISTER </h3>
			<div id="formDiv">
				
				
				<div class="form-group">
				<div class="input-group">
				<label>Name:</label><br/>
				<input type="text" name="name" class="inputFields"  maxlength="15" value="<?php echo @$_SESSION['name'] ?>" required/><br/>
				<span class="text-danger"><?php echo $nameError; ?></span>
				</div>
				</div>

				<br/> <br/>

				<div class="form-group">
				<div class="input-group">
				<label>Email:</label><br/>
				<input type="text" name="email"  class="inputFields" maxlength="50" value="<?php echo @$_SESSION['email'] ?>"required/><br/>
				<span class="text-danger"><?php echo $emailError; ?></span>
				</div>
				</div>

				<br/> <br/>

				<div class="form-group">
				<div class="input-group">
				<label>Mobile Number: </label><br/>
				<input type="text" name="mobile"  class="inputFields" maxlength="15" value="<?php echo @$_SESSION['mobile'] ?>"  required/><br/>
				 <span class="text-danger"><?php echo $mobileError; ?></span>
				</div>
				</div>

				<br/> <br/>

				<div class="form-group">
				<div class="input-group">
				<label>Password:</label><br/>
				<input type="password" name="password" class="inputFields" maxlength="15"   required/><br/>
				<span class="text-danger"><?php echo $passError; ?></span>

        </div>
				 
                
				</div>
				
				<br/> <br/>
			
				<input type="checkbox" name="conditions" />
				<label>I am agree with terms and conditions</label><br/><br/>
				<a href="" class="hvr-float-shadow"><button type="submit" class="btn btn-primary"  style="width:200px" style="font-weight:bold" name="register" > Register </button> </a>
  

			
			</div>	
				
				
			
			

			</div>

		</form>
		


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
		
	</body>

</html>

<!--<form method="POST" action="index.php" enctype="multipart/form-data">The enctype is needed to upload files or images-->
<!--<label>First Name:</label>  Label tag is new in html5-->

<?php ob_end_flush(); ?>