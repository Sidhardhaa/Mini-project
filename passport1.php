
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
			
			<h3 align="center"> REGISTER </h3>
			<div id="formDiv">
				
				<form method="POST" action="index.php" enctype="multipart/form-data">
			
				
				<label>First Name:</label><br/>
				<input type="text" name="fname" class="inputFields" required/><br/><br/>
				
				<label>Last Name:</label><br/>
				<input type="text" name="lname"  class="inputFields" required/><br/><br/>
				
				<label>Email:</label><br/>
				<input type="text" name="email"  class="inputFields" required/><br/><br/>
				
				<label>Password:</label><br/>
				<input type="password" name="password" class="inputFields"  required/><br/><br/>
				
				<label>Re-enter Password:</label><br/>
				<input type="password" name="passwordConfirm"  class="inputFields" required/><br/><br/>
				
				
			
				<input type="checkbox" name="conditions" />
				<label>I am agree with terms and conditions</label><br/><br/>
				<a href="" class="hvr-float-shadow"><button type="submit" class="btn btn-primary"  style="width:200px" style="font-weight:bold" name="login" > Log In </button> </a>
  

			
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