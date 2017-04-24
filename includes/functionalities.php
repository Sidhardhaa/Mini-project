
<?php 
	
	function mobile_exists($mobile, $con)
	{
		$result = mysqli_query($con,"SELECT id FROM logform WHERE mobile='$mobile'");
		
		if(mysqli_num_rows($result) == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
	
	function logged_in()
	{
			if(isset($_SESSION['mobile']) || isset($_COOKIE['mobile']))
			{
				return true;
			}
			else
			{
				return false;
			}
	}

?>


