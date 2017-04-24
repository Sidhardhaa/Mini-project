<?php 
$link = mysqli_connect('localhost', 'root', '','miniproject');
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
$qtype=$_POST['qtype'];
$question=$_POST['n'];

$sql = "insert into $qtype values('$question')";
if (mysqli_query($link, $sql)) {
    header('Location: question.php');
} 
else {
   header('Location: question.php');
}
mysqli_close($link);
?>