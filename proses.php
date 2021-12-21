<?php
include "konek.php" ;

$Nama=$_POST['Nama'];
$Email=$_POST['Email'];
$Judul_Artikel=$_POST['Judul_Artikel'];
$Kategori=$_POST['Kategori'];
$Review=$_POST['Review'];

$sql="INSERT INTO comment values ('$Nama','$Email','$Judul_Artikel','$Kategori','$Review')";
$query=mysqli_query($conn,$sql);
if(!$query)
{ die(mysqli_error()) ;}
header('Location: output.php');
?>