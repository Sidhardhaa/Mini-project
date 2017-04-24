<?php
session_start();
$link = mysqli_connect('localhost', 'root', '','miniproject');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}

$state=$_SESSION['state'];
$season=$_SESSION['season'];
$crop=$_SESSION['crop'];
$area=$_SESSION['acre'];
$sql1 = "SELECT * from seedspacing WHERE crop= '$crop'";
$sql2="SELECT * from moisture WHERE crop= '$crop'";
$sql3="SELECT * from fertilizers WHERE crop= '$crop' AND season= '$season'";
$sql4="SELECT * from estimated_price WHERE crop= '$crop'";
$sql5="SELECT * from rainfall WHERE year='2017'";
$sql6="SELECT * from temperature WHERE year='2017'";
$sql7="SELECT * from Preference WHERE state='$state'";
$result1= mysqli_query($link,$sql1);
$result2= mysqli_query($link,$sql2);
$result3= mysqli_query($link,$sql3);
$result4= mysqli_query($link,$sql4);
$result5= mysqli_query($link,$sql5);
$result6= mysqli_query($link,$sql6);
$result7= mysqli_query($link,$sql7);
$row1 = $result1->fetch_assoc();
$row2 = $result2->fetch_assoc();
$row3 = $result3->fetch_assoc();
$row4 = $result4->fetch_assoc();
$row5 = $result5->fetch_row();
$row6 = $result6->fetch_row();
   
mysqli_close($link);
?>
<html>
<head>
<meta charset=utf-8>
<title><?php echo($crop); ?></title>
<style>
h1   {color: white;}
body {  background-attachment: fixed; }
</style>
<body  background="background1.jpg" width="200px" height="100px">
<h1 align=center><?php echo($crop);?></h1>
<table cellspacing="20" cellpadding=5 align=center bgcolor="#FFFFFF">
<tr>
<td>Crop:</td>
<td><?php echo($crop); ?><br>
    <img src="<?php 
	if($crop=='Paddy (Fine)')
	    echo('Paddy');
	elseif($crop=='Jowar (Hybrid)')
	    echo('Jowar1');
	elseif($crop=='Jowar (Maldandi)')
	    echo('Jowar2');
	elseif($crop=='Cotton F-414/H-777')
	    echo('Cotton');
	elseif($crop=='Cotton H-4 750')
	    echo('cotton2');
	elseif($crop=='Jute(TD-5)')
	    echo('Jute');
	elseif($crop=='Rapeseed/ mustard')
	    echo('rapeseed');
	elseif($crop=='Soyabean (Black)')
	    echo('soyabean');
	elseif($crop=='Soyabean (Yellow)')
	    echo('soyabean2');
	elseif($crop=='Copra (milling)')
	    echo('Copra');
	elseif($crop=='Copra balls')
	    echo('Copra2');
    else
		echo($crop);?>.jpg" width="500px" height="250px"></td>
</tr>


<td>STATE:</td>
<td><?php echo($state);?></td>
</tr>
<tr>
<td>SEASON:</td>
<td><?php echo($season);?></td>
</tr>
<tr>
<td>AREA ENTERED:</td>
<td><?php echo($area);?>acres</td>
</tr>
<tr>
<td>MOISTURE LEVEL:</td>
<td>DURING HARVEST: <?php echo($row2["moisture_harvest"]);?>%<br>DURING STORAGE: <?php echo($row2["moisture_storage"]);?>%</td>
</tr>
<tr>

<td>FERTILIZERS USED(kg/acre):</td>
<td>NITROGEN: <?php echo($row3["Nitrogen"]);?>&nbsp kg/acre<br>PHOSPHOROUS: <?php echo($row3["Phosphoros"]);?>&nbsp kg/acre<br>
    POTASSIUM: <?php echo($row3["Potassium"]);?>&nbsp kg/acre<br>TOTAL: <?php echo($row3["Total"]);?>&nbsp kg/acre</td>
</tr>
<tr>
<td>SEED SPACING:</td>
<td><?php echo($row1["seedspacing"]);?>cm</td>
</tr>
<tr>
<tr>
<td>ESTIMATED PRICE:</td>
<td>Rs.<?php echo($row4["price"]);?>\Quintal<br>
</tr>
<tr>
<tr>
<td>ESTIMATED RAINFALL:</td>
<td><?php 
         if($season=='Kharif')
			 echo($row5[2]);
		 elseif($season=='Rabi')
		     echo($row5[1]);
		 else
			 echo($row5[3]);?>cm</td>
</tr>
<tr>
<td>ESTIMATED TEMPERATURE:</td>
<td><?php 
         if($season=='Kharif')
			 echo($row6[1]);
		 elseif($season=='Rabi')
		     echo($row6[3]);
		 else
			 echo($row6[2]);?>&nbsp Celsius</td>
</tr>
<tr>
<td>MOST PREFERABLE CROPS:</td>
<td><?php  while($row7 = $result7->fetch_assoc()) {
        echo($row7["Crop"])."<br>"; ;
    }?></td>
</tr>
<tr colspan="2">
<td><a href="teluguprint.php"><input type=button value="తెలుగు"></a></td>
</tr>
</table>
</body>
</head>
</html>