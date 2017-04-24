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