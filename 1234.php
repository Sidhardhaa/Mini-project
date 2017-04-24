<?php
session_start();
$season=$_POST['season'];
$state=$_POST['state'];
$crop=$_POST['crop'];
$acre=$_POST['Area'];
$lang=$_POST['language'];
$_SESSION['cropt']=$crop;
$_SESSION['statet']=$state;
$_SESSION['seasont']=$season;
/*echo $season;
echo "<br/>";
echo $state;
echo "<br/>";
echo $crop;
echo "<br/>";
echo $acre;
echo "<br/>";
*/
if($lang =="telugu")
{
/* season convertion*/
if($season=="ఖరీఫ్")
	$seasonorg="Kharif";
else if($season=="రబీ")
	$seasonorg="Rabi";
else 
	$seasonorg="Zaid";
/*season convertion ends */

/* state conversion*/
if($state=="అండమాన్ నికోబార్ దీవులు")
	$stateorg="Andaman and Nicobar Islands";
else if($state=="ఆంధ్ర ప్రదేశ్")
	$stateorg="Andhra Pradesh";
else if($state=="అరుణాచల్ ప్రదేశ్")
	$stateorg="Arunachal Pradesh";
else if($state=="అస్సాం")
	$stateorg="Assam";
else if($state=="బీహార్")
	$stateorg="Bihar";
else if($state=="చండీగఢ్")
	$stateorg="Chandigarh";
else if($state=="ఛత్తీస్గఢ్")
	$stateorg="Chhattisgarh";
else if($state=="దాద్రా మరియు నగర్ హవేలి")
	$stateorg="Dadra and Nagar Haveli";
else if($state=="డామన్ మరియు డయ్యు")
	$stateorg="Daman and Diu";
else if($state=="ఢిల్లీ")
	$stateorg="Delhi";
else if($state=="గోవా")
	$stateorg="Goa";
else if($state=="గుజరాత్")
	$stateorg="Gujarat";
else if($state=="హర్యానా")
	$stateorg="Haryana";
else if($state=="హిమాచల్ ప్రదేశ్")
	$stateorg="Himachal Pradesh";
else if($state=="జమ్మూ కాశ్మీర్")
	$stateorg="Jammu and Kashmir";
else if($state=="జార్ఖండ్")
	$stateorg="Jharkhand";
else if($state=="కర్ణాటక")
	$stateorg="Karnataka";
else if($state=="కేరళ")
	$stateorg="Kerala";
else if($state=="లక్షద్వీప్")
	$stateorg="Lakshadweep";
else if($state=="మధ్యప్రదేశ్")
	$stateorg="Madhya Pradesh";
else if($state=="మహారాష్ట్ర")
	$stateorg="Maharashtra";
else if($state=="మణిపూర్")
	$stateorg="Manipur";
else if($state=="మేఘాలయ")
	$stateorg="Meghalaya";
else if($state=="మిజోరం")
	$stateorg="Mizoram";
else if($state=="నాగాలాండ్")
	$stateorg="Nagaland";
else if($state=="ఒరిస్సా")
	$stateorg="Orissa";
else if($state=="పాన్డిచర్రీ")
	$stateorg="Pondicherry";
else if($state=="పంజాబ్")
	$stateorg="Punjab";
else if($state=="రాజస్థాన్")
	$stateorg="Rajasthan";
else if($state=="సిక్కిం")
	$stateorg="Sikkim";
else if($state=="తమిళనాడు")
	$stateorg="Tamil Nadu";
else if($state=="తెలంగాణ")
	$stateorg="Telangana";
else if($state=="త్రిపుర")
	$stateorg="Tripura";
else if($state=="ఉత్తరాంచల్")
	$stateorg="Uttaranchal";
else if($state=="ఉత్తర ప్రదేశ్")
	$stateorg="Uttar Pradesh";
//else if($state=="పశ్చిమ బెంగాల్")
	//$stateorg="West Bengal";

else 
	$stateorg="West Bengal";

echo "<br/>";
/*state conversion ends */




/* crop conversion */
if($crop=="వరి ఫైన్")
	$croporg="Paddy (Fine)";
else if($crop=="గోధుమ")
	$croporg="Wheat";
else if($crop=="జొన్నలు (హైబ్రిడ్)")
	$croporg="Jowar (Hybrid)";
else if($crop=="జొన్నలు (మల్దంది)")
	$croporg="Jowar (Maldandi)";
else if($crop=="సజ్జ")
	$croporg="Bajra";
else if($crop=="రాగి")
	$croporg="Ragi";
else if($crop=="మొక్కజొన్న")
	$croporg="Maize";
else if($crop=="బార్లీ")
	$croporg="Barley";
else if($crop=="గ్రామ")
	$croporg="Gram";
else if($crop=="మసుర")
	$croporg="Masur";
else if($crop=="ఆర్హర")
	$croporg="Arhar";
else if($crop=="మూంగ")
	$croporg="Moong";
else if($crop=="మినపప్పు")
	$croporg="Urad";
else if($crop=="చెరుకుగడ")
	$croporg="Sugarcane";
else if($crop=="కాటన్F-414 / H-777")
	$croporg="Cotton F-414/H-777";
else if($crop=="కాటన్ హెచ్ 4 750")
	$croporg="Cotton H-4 750";
else if($crop=="వేరుశనగ")
	$croporg="Groundnut";
else if($crop=="జ్యూట్ (TD-5)")
	$croporg="Jute(TD-5)";
else if($crop=="రాప్ విత్తన / ఆవాల")
	$croporg="Rapeseed/ mustard";
else if($crop=="సన్ఫ్లవర్")
	$croporg="Sunflower";
else if($crop=="సోయాబీన్ (బ్లాక్) ")
	$croporg="Soyabean (Black)";
else if($crop=="సోయాబీన్ (పసుపు)")
	$croporg="Soyabean (Yellow)";
else if($crop=="కుసుంభ")
	$croporg="Safflower";
else if($crop=="టొరీ")
	$croporg="Toria";
else if($crop=="కొబ్బరి కురిడీ (మిల్లింగ్)")
	$croporg="Copra (milling)";
else if($crop=="కొబ్బరి కురిడీ బంతుల్లో")
	$croporg="Copra balls";
else if($crop=="అవి నువ్వులు")
	$croporg="Sesamum";
else 
	$croporg="Niger seed";
$acreorg=$acre;
}


else
{
	$croporg=$crop;
	$seasonorg=$season;
	$stateorg=$state;
	$acreorg=$acre;
}
$_SESSION["crop"]=$croporg;
$_SESSION["season"]=$seasonorg;
$_SESSION["state"]=$stateorg;
$_SESSION["acre"]=$acreorg;
if($lang =="telugu")
header('Location: teluguprint.php');
else
header('Location: 123.php');

?>