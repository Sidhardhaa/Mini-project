

<?php


$firnam=null;
$lasnam=null;
$emil=null;
$phonnum=null;
$counry=null;
$staat=null;
$ciiti=null;
$piincod=null;
$fathernam=null;
$mothernam=null;
$addrees=null;


require_once('includes/db.php');

if ( isset($_POST['upload']) ){


  $fname = trim($_POST['fname']);
  $fname = strip_tags($fname);
  $fname = htmlspecialchars($fname);

  $lname = trim($_POST['lname']);
  $lname = strip_tags($lname);
  $lname = htmlspecialchars($lname);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $cntry = trim($_POST['cntry']);
  $cntry = strip_tags($cntry);
  $cntry = htmlspecialchars($cntry);

  $stat = trim($_POST['stat']);
  $stat = strip_tags($stat);
  $stat = htmlspecialchars($stat);

  $citi = trim($_POST['citi']);
  $citi = strip_tags($citi);
  $citi = htmlspecialchars($citi);

  $mobile = trim($_POST['phnnum']);
  $mobile = strip_tags($mobile);
  $mobile = htmlspecialchars($mobile);

  $pncod = trim($_POST['pncod']);
  $pncod = strip_tags($pncod);
  $pncod = htmlspecialchars($pncod);

  $fathrnam = trim($_POST['fathrnam']);
  $fathrnam = strip_tags($fathrnam);
  $fathrnam = htmlspecialchars($fathrnam);

  $mothrnam = trim($_POST['mothrnam']);
  $mothrnam = strip_tags($mothrnam);
  $mothrnam = htmlspecialchars($mothrnam);

  $addres = trim($_POST['addres']);
  $addres = strip_tags($addres);
  $addres = htmlspecialchars($addres);



  if (empty($fname)) {
   $error = true;
   $fnameError = "* Please enter your full name. *";
} else if (strlen($fname) < 3) {
   $error = true;
   $fnameError = "* Name must have atleat 3 characters.*";
} else if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
   $error = true;
   $fnameError = "* Name must contain alphabets and space. *";
}


if (empty($lname)) {
   $error = true;
   $lnameError = "* Please enter your full name. *";
} else if (strlen($lname) < 3) {
   $error = true;
   $lnameError = "* Name must have atleat 3 characters.*";
} else if (!preg_match("/^[a-zA-Z ]+$/",$lname)) {
   $error = true;
   $lnameError = "* Name must contain alphabets and space. *";
}



if (empty($fathrnam)) {
   $error = true;
   $fanameError = "* Please enter your full name. *";
} else if (strlen($fathrnam) < 3) {
   $error = true;
   $fanameError = "* Name must have atleat 3 characters.*";
} else if (!preg_match("/^[a-zA-Z ]+$/",$fathrnam)) {
   $error = true;
   $fanameError = "* Name must contain alphabets and space. *";
}


if (empty($mothrnam)) {
   $error = true;
   $monameError = "* Please enter your full name. *";
} else if (strlen($mothrnam) < 3) {
   $error = true;
   $monameError = "* Name must have atleat 3 characters.*";
} else if (!preg_match("/^[a-zA-Z ]+$/",$mothrnam)) {
   $error = true;
   $monameError = "* Name must contain alphabets and space. *";
}


if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "* Please enter valid email address. *";
} else {
   // check email exist or not
   $query = "SELECT useremail FROM persoanlcard WHERE useremail='$email'";
   $result = @mysqli_query($query);
   $count = @mysqli_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "* Provided Email is already in use. *";
}
}



if (empty($phnnum)) {
   $error = true;
   $phnError = "* Please enter your mobile number. *";
} else if (strlen($phnnum) < 10) {
   $error = true;
   $phnError = "* Mobile Number must have atleat 10 digits. *";
} else if (!preg_match("/^[0-9]+$/",$phnnum)) {
   $error = true;
   $phnError = "* Mobile Number must contain only digits. *";
}


if (empty($cntry)) {
   $error = true;
   $cntryError = "* Please enter your Country *";

} 


if (empty($stat)) {
   $error = true;
   $statError = "* Please enter your State *";
} 


if (empty($citi)) {
   $error = true;
   $citiError = "* Please enter your City *";
} 



if (empty($addres)) {
   $error = true;
   $addresError = "* Please enter your address *";
} 


if( !$error ) {

   $sql="INSERT INTO persoanlcard(firstname,lastname,email,phonenumber,country,state,city,pincode,fathername,mothername,address) VALUES ('$firnam','$lasnam''$emil','$phonnum','$counry','$staat','$ciiti','$piincod','$fathernam','$mothernam', '$addrees');";


   if (mysqli_query($conn,$query)) {
       echo "Successfully Inserted"; 

   } else {

    echo "* Something went wrong, try again later...*"; 
} 


}

}



?>



<!doctype html>

<html>
	
	<head>
		
	<title> PersonalCard Page </title>
	<link rel="stylesheet" href="css/styles.css"  />
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	


	 <link href="css/bootstrap.css" rel="stylesheet">
  
  <link href="css/style.css" rel="stylesheet">

  <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

     

	<!-- HOVER MASTER -->
	<link href="css/hover.css" rel="stylesheet">
      
    <link href="css/hover-min.css" rel="stylesheet">
      
    <link href="css/demo-page.css" rel="stylesheet">


	<style type="text/css">


		
		.per
		{
			margin-top: 10px;

			

		}

	</style>
	</head>
	
	
	<body>

    <nav class="navbar-default navbar-fixed-top">
      <div class="container" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="about.php">Public Id System</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <a href="index.php" class="navbar-brand" > <li class="active"> Login </li> </a>

            <a href="index.php" class="navbar-brand" > <li class="active"> Logout </li> </a> 

            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>




			<div class="jumbotron">
			
			<h3 align="center"> PERSONALCARD </h3>
			<div id="formDiv">
				
				<form method="POST" action="personalaction.php" enctype="multipart/form-data">
			  
				<div class="per"> <h3 style="align:center; margin-bottom: 10px " > ----  Personal Details  ---- </h1>
				<label>First Name:</label><br/>
				<input type="text" name="fname" class="inputFields" required/><br/><br/>
				
				<label>Last Name:</label><br/>
				<input type="text" name="lname"  class="inputFields" required/><br/><br/>
				
				<label>Email:</label><br/>
				<input type="email" name="email"  class="inputFields" required/><br/><br/>
				
				<label>Phone Number </label><br/>
				<input type="text" name="phnnum" class="inputFields"  required/><br/><br/>

         <label> Date of Birth </label><br/>
        <input type="date" name="date" class="inputFields"  required/><br/><br/>

        <!-- radio -->
                    <div class="form-group per">
                    <label> Gender </label><br/>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                          Male
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Female
                        </label>
                      </div>
                      </div>

                      <div class="form-group">
                    <label> Blood Group </label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected"> A </option>
                      <option> B </option>
                      <option> AB </option>
                      <option> O </option>
                    </select>
                  </div><!-- /.form-group -->



				</div>
				
				<div class="per"> <h3 style="align:center; margin-bottom: 10px" > ----  Country Details  ---- </h1>
				<!-- /.form-group -->

				<label>Country </label><br/>
				<input type="text" name="cntry" class="inputFields"  required/><br/><br/>

				<label>State </label><br/>
				<input type="text" name="stat" class="inputFields"  required/><br/><br/>

				<label> City </label><br/>
				<input type="text" name="citi" class="inputFields"  required/><br/><br/>


				<label> Pin Code </label><br/>
				<input type="text" name="pncod"  class="inputFields" required/><br/><br/>
				</div>

				<div class="per" > <h3 style="align:center; margin-bottom: 10px" > ----  Family Details  ---- </h1>

				<label>Father Name:</label><br/>
				<input type="text" name="fathrnam"  class="inputFields" required/><br/><br/>

				<label>Mother Name:</label><br/>
				<input type="text" name="mothrnam"  class="inputFields" required/><br/><br/>

				<label>Residental Address:</label><br/>
				</div>
				<textarea rows="5" cols="40" wrap="hard" name="addres">
					
				</textarea>

        <div class="per" > <h3 style="align:center; margin-bottom: 10px" > ----  Education Details  ---- </h1>
          
                      <label> Upload Education Files </label><br/>
                     <input type="file" id="exampleInputFile">
                      <p class="help-block"> To Upload can type text also.</p>
                    </div>


			
			<a href="" class="hvr-float-shadow"><button type="submit" class="btn btn-primary"  style="width:200px" style="font-weight:bold" name="upload" > Upload </button> </a>
  

			
			</div>	
				
				</form>
			
			

			</div>

		
		


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