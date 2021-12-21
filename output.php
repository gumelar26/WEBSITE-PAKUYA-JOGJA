<html>
<head>
<title>PAKUYA</title>
</head>

<body>
<b>
<h1 align="center">Comment</h1>
</b><br/><br/><hr width="431"/>

<?php
include "konek.php" ;
$aaa="SELECT * FROM comment" ;
$bbb=mysqli_query($conn,$aaa);
if(!$bbb)
	{die(mysqli_error());}
while($rows = mysqli_fetch_row($bbb)){
?>

<table width="431" border="0" align="center" >
<tr>
<td>Nama</td><td> : </td>
<td><?php	
	echo $rows[0];
	?> </td>
</tr>
<tr>
<td>Email</td><td> : </td>
<td><?php	
	echo $rows[1];
	?> </td>
</tr>
<tr>
<td>Judul Artikel</td><td> : </td>
<td><?php	
	echo $rows[2];
	?> </td>
</tr>
<tr>
<td>Kategori</td><td> : </td>
<td><?php	
	echo $rows[3];
	?> </td>
</tr>
<tr>
<td>Review</td><td> : </td>
<td><?php	
	echo $rows[4];
	?> </td>
</tr>
</table>
<hr width="431" /><br/>
<?php }?>
<h1><p align= "center"><font face="Times New Roman" size="12"> Terima Kasih, Komentar Anda Sedang Kami Proses ^^</h1></p></font>
<p align="center"> <a href="index.html">Kembali Ke Beranda</a></p>
</body>
</html>
