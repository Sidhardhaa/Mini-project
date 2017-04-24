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
$statet=$_SESSION['statet'];
$seasont=$_SESSION['seasont'];
$cropt=$_SESSION['cropt'];
$sql1 = "SELECT * from seedspacing WHERE crop= '$crop'";
$sql2="SELECT * from moisture WHERE crop= '$crop'";
$sql3="SELECT * from fertilizers WHERE crop= '$crop' AND season= '$season'";
$sql4="SELECT * from estimated_price WHERE crop= '$crop'";
$sql5="SELECT * from rainfall WHERE year='2017'";
$sql6="SELECT * from temperature WHERE year='2017'";
$result1= mysqli_query($link,$sql1);
$result2= mysqli_query($link,$sql2);
$result3= mysqli_query($link,$sql3);
$result4= mysqli_query($link,$sql4);
$result5= mysqli_query($link,$sql5);
$result6= mysqli_query($link,$sql6);
$row1 = $result1->fetch_assoc();
$row2 = $result2->fetch_assoc();
$row3 = $result3->fetch_assoc();
$row4 = $result4->fetch_assoc();
$row5 = $result5->fetch_row();
$row6 = $result6->fetch_row();
   /* while($row = $result1->fetch_assoc()) {
        echo "<br>crop: " . $row["crop"]. " <br>Seed spacing:" . $row["seedspacing"].  "<br>";
    }

echo('Moisture Level:');
    while($row = $result2->fetch_assoc()) {
        echo "<br>crop:" . $row["crop"]. "<br>Moisture(Harvest):" . $row["moisture_harvest"]. "<br>Moisture(Storage):" . $row["moisture_storege"]. "<br>";
    }
echo('Fertilizers:');
    while($row = $result3->fetch_assoc()) {
        echo "<br>crop: " . $row["crop"]. "<br>Season:" . $row["season"]. "<br>Nitrogen:" . $row["Nitrogen"]."<br>Phosphoros:" . $row["Phosphoros"]."<br>Potassium:" . $row["Potassium"]."<br>Total:" . $row["Total"]."<br>";
    }	*/
mysqli_close($link);
?>
<html>
<head>
<title><?php echo($cropt); ?></title>
<style>
h1   {color: white;}
body {  background-attachment: fixed; }
</style>
<body  background="background1.jpg" width="200px" height="100px">
<h1 align=center><?php echo($cropt);?></h1>
<table cellspacing="20" cellpadding=5 align=center bgcolor="#FFFFFF">
<tr>
<td>పంట:</td>
<td><?php echo($cropt); ?><br>
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


<td>రాష్ట్రం</td>
<td><?php echo($statet);?></td>
</tr>
<tr>
<td>సీజన్:</td>
<td><?php echo($seasont);?></td>
</tr>
<tr>
<td>ఈ ప్రాంతంలో ప్రవేశించి:</td>
<td><?php echo($area);?>ఎకరాల</td>
</tr>
<tr>
<td>తేమ స్థాయిని:</td>
<td>పంట సమయంలో:
 <?php echo($row2["moisture_harvest"]);?>%<br>నిల్వ సమయంలో: <?php echo($row2["moisture_storage"]);?>%</td>
</tr>
<tr>

<td>వాడిన ఎరువులు (అన్నీ kg / ఎకరాల)
:</td>
<td>నిత్రొగెన్: <?php echo($row3["Nitrogen"]);?>&nbsp అన్నీ kg / ఎకరాల<br>ఫొస్ఫొరౌస్ : <?php echo($row3["Phosphoros"]);?>&nbsp అన్నీ kg / ఎకరాల<br>
    ఫోటాశ్శీఊం: <?php echo($row3["Potassium"]);?>&nbsp అన్నీ kg / ఎకరాల<br>మొత్తం
: <?php echo($row3["Total"]);?>&nbsp అన్నీ kg / ఎకరాల</td>
</tr>
<tr>
<td>సీడ్ అంతరం:</td>
<td><?php echo($row1["seedspacing"]);?>cm</td>
</tr>
<tr>
<tr>
<td>అంచనా ధర
:</td>
<td>Rs.<?php echo($row4["price"]);?>/క్వింటాల్<br>
   </td>
</tr>
<tr>
<tr>
<td>అంచనా వర్షపాతం:</td>
<td><?php 
         if($season=='Kharif')
			 echo($row5[2]);
		 elseif($season=='Rabi')
		     echo($row5[1]);
		 else
			 echo($row5[3]);?>cm</td>
</tr>
<tr>
<td>అంచనా ఉష్ణోగ్రత:</td>
<td><?php 
         if($season=='Kharif')
			 echo($row6[1]);
		 elseif($season=='Rabi')
		     echo($row6[3]);
		 else
			 echo($row6[2]);?>&nbspసెల్సియస్
 </td>
</tr>
<tr colspan="2">
<td><a href="123.php"><input type=button value="English"></a></td>
</tr>
</table>
</table>
</body>
</head>
</html>