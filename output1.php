<html>
<head>
<title>PAKUYA</title>
</head>

<body>
<b>
<h1 align="center">Subscriber</h1>
</b><br/><br/><hr width="431"/>

<?php
include "konek.php" ;
$aaa="SELECT * FROM subscribe" ;
$bbb=mysqli_query($conn,$aaa);
if(!$bbb)
	{die(mysqli_error());}
while($rows = mysqli_fetch_row($bbb)){
?>

<table width="431" border="0" align="center" >
<tr>
<td>Subscriber</td><td> : </td>
<td><?php	
	echo $rows[0];
	?> </td>
</tr>
</table>
<hr width="431" /><br/>
<?php }?>
<h1><p align= "center"><font face="Times New Roman" size="12"> Terima Kasih, Permintaan Anda Sedang Kami Proses ^^</h1></p></font>
<p align="center"> <a href="index.html">Kembali Ke Beranda</a></p>
</body>
</html>
