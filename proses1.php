<?php
include "konek.php" ;

$Subscribe=$_POST['Subscribe'];

$sql="INSERT INTO subscribe values ('$Subscribe')";
$query=mysqli_query($conn,$sql);
if(!$query)
{ die(mysqli_error()) ;}
header('Location: output1.php');
?>