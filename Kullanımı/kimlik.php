<?php
if(@$_POST['gonder'])
{
	$kimlikNo=@$_POST['kimlikNo'];
	include 'kimlikKontrol.php';
	$kontrol=new kimlikKontrol;
	$sonuc=$kontrol->kimlikDogrula($kimlikNo);
}
?>
<html>
<head><title>Kimlik Kontrol</title></head>
<body bgcolor=black>
	<form name="kimlikKontrol" action="" method="POST">
		<center>
		<span><font color=white>Kimlik Numarası :</span><input type="text" name="kimlikNo">
		<span><input type="submit" value="Kontrol Et" name="gonder"></span>
	</center>
	</form>
</body>
</html>
<?php
if(@$_POST['gonder'])
{

if(@$sonuc == "true")
{
	echo "<script>alert('Girdiğiniz Kimlik Bilgileri Doğrudur.');</script>";
}
else
{
	echo "<script>alert('Girdiğiniz Kimlik Bilgileri Yanlıştır!');</script>";
}
}
?>