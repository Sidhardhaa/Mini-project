
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

    <title> PIS  |  MODIFY </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
      
    <link href="css/style.css" rel="stylesheet">

    <!-- Ui Kit -->

    <link href="css/hover.css" rel="stylesheet">
      
    <link href="css/hover-min.css" rel="stylesheet">

      
    <link href="css/demo-page.css" rel="stylesheet">

    
<style type="text/css">
  

.bodybackground{
  background-size:cover;
  background-image:url("images/startpagebackground.png");  
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
}
.loginlabel
{
  position:absolute;
  color:white;
  font-style:bold;
  margin-left:20px;
  margin-top:5px;
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
}
.signuplabel
{
  position:absolute;
  color:white;
  font-style:bold;
  margin-left:25px;
  margin-top:5px;
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

.setcol{
  color: white;
}






</style>


  </head>

  <body class="bodybackground">

    
<nav class="navbar navbar-static-top"  style="margin-bottom:10px">
    <div class="container" >
      <div>
<label class="title">Public Id System </label>
</div>
<div class="login" onclick="location.href='logout.php';">
<label id="loginlabel" class="loginlabel">  Logout </label>
</div>
<div class="signup" onclick="location.href='home.php';">
<label id="signuplabel" class="signuplabel"> Home </label>
</div>

</div>
</nav>
  



    <div class="container">

<div class="jumbotron" style="margin-top:50px" >
      <form method="post" name="frm" style="margin-top:40px">
          
  
 <a href="personalcard.php"> <input type="button"  name="personal" value="Personal Details" class="btn btn-primary" style="width:400px"> </a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!--  <a href="forgot_password.php"> Forget Password?</a> -->


 <a href="votercard.php"> <input type="button"  name="votercard" value="Voter Card" class="btn btn-primary" style="width:400px"> </a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  


</form>

</div>

      </div>


    
    <footer>
        
        <div class="container text-center setcol">
            <p> Copyright &copy; Public Id System 2016 </p>
        
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
