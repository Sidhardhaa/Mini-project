/*

$emailError=null;
$passError=null;



include("includes/db.php");
session_start();
if($_SERVER["REQUEST_METHOD"]== "POST")
{
	mysqli_real_escape_string($conn,$_POST['email']);

	$myusername=mysqli_real_escape_string($conn,$_POST['email']);
	$mypassword=mysqli_real_escape_string($conn,$_POST['password']);
	$mypassword=sha1($mypassword);

	$sql="SELECT `userid` FROM `loginform` WHERE `useremail`='$myusername'and `userpassword`='$mypassword' ";
	if($res = $conn->query($sql))
	{
		if($res-> num_rows>0)
		{
			header("Location: home.php");

		}
	}
	else
	{
		$errMSG="Your Login and password is wrong";
	}
}
*/












// include("includes/functionalities.php");

// if(logged_in())
// {
// 	header("location:home.php");
// 	exit();
// }

// $error = "";

// if(isset($_POST['login']))
// {
// 	echo $_POST['mobile'];
// 	echo  $_POST['password'];

// 	$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
// 	$password = mysqli_real_escape_string($con, $_POST['password']);
// 	$checkBox = isset($_POST['remember_me']);


// 	if(mobile_exists($mobile,$con))
// 	{
// 		$result = mysqli_query($con, "SELECT password FROM logform WHERE mobile='$mobile'");
// 		$retrievepassword = mysqli_fetch_assoc($result);

// 		if(!password_verify($password, $retrievepassword['password']))
// 		{
// 			$error = "Password is incorrect";
// 		}
// 		else
// 		{
// 			$_SESSION['mobile'] = $mobile;

// 			if($checkBox == "on")
// 			{
// 				setcookie("mobile",$mobile, time()+3600);
// 			}

// 			header("location: home.php");
// 		}


// 	}
// 	else
// 	{
// 		$error = "Mobile Number Does not exists";
// 	}


// }












  $query="SELECT useremail, userpassword FROM loginform WHERE useremail='$email'";
  
   $res=@mysqli_query($conn,$query);

  $row=@mysqli_fetch_array($res);
   $count = @mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
   
   if($count==1 && $row['userpassword']==$password ) {
    $_SESSION['user'] = $row['userid'];
    header("Location: home.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
   






















    session_start();

$email=null;
$pass=null;
$emailError=null;
$passError=null;



 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: home.php");
  exit;
 }

 
include("includes/db.php");

$error = false;
 
 if( isset($_POST['login']) ) { 
  
  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['password']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs
  
  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }
  
  // if there's no error, continue to login
  if (!$error) {
   
   $password = hash('sha256', $pass); // password hashing using SHA256
  

   $sql="SELECT userid FROM loginform WHERE useremail = $email and userpassword = $pass ";
	if($res = $conn->query($sql))
	{
		if($res-> num_rows>0)
		{
			header("Location: home.php");

		}
	}
	else
	{
		$errMSG="Your Login and password is wrong";
	}

 
  }
  
 }
 