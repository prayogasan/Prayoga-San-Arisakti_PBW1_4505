<!DOCTYPE html>
<html>
<head>
		<title>Homepage Pribadi</title>
</head>
<body bgcolor="C29E80">

		<hr><hr>
		<h1 style="background-color:FDCF76"><p align="center"><b><font color="white">Homepage Pribadi</font></b></p></h1>
		<hr><hr>
        <?php
$NamaLengkap = "Prayoga San Arisakti";
$NamaPanggilan = "Yoga";
$TempatLahir = "Jakarta, 10 Juli 2003";
$AsalSD = "SD Ar-Rahman Islamic School";
$AsalSMP = "SMPN 96 Jakarta";
$AsalSMA = "SMA Sumbangsih Ampera Raya";
$Alamat = "Villa Mutiara Cinere Blok R1 No 12";
$Hobi = "Mendengarkan musik dan bermain game";
$Deskripsi = "Saya orang nya pendiem untuk berkenalan orang baru. Saya gabisa mengerjakan sesuatu kalo tidak ada tujuannya.
Saya gapunya bakat, bisa dibilang males, tapi kalo udah senang dengan satu hal, pasti akan dikerjakan terus menerus.
Untuk masalah mengurus keuangan, paling gabisa untuk berhemat, apalagi kalo ada tawaran menarik di dalam game. Satu lagi,
saya pengen bisa menguasai salah satu pemrograman web ataupun android, tapi susah. Saya pingin bekerja di perusahaan start up besar dan
ingin mendirikan perusahaan start up sendiri.";
?>
<table>
<tr>
    <td><?php echo "Nama Lengkap";?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $NamaLengkap ?></td>
    <td rowspan="0">
</td>
</tr>
<tr>
    <td><?php echo "Nama Panggilan"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $NamaPanggilan ;?></td>
</tr>
<tr>
    <td><?php echo "Tempat,Tanggal Lahir"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $TempatLahir ;?></td>
</tr>
<tr>
    <td><?php echo "Asal SD";?></td>
    <td><?php echo ":";?></td>
    <td><?php echo $AsalSD;?></td>
</tr>
<tr>
    <td><?php echo "Asal SMP"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $AsalSMP ;?></td>
</tr>
<tr>
    <td><?php echo "Asal SMA"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $AsalSMA ;?></td>
</tr>
<tr>
    <td><?php echo "Alamat"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $Alamat ;?></td>
</tr>
<tr>
    <td><?php echo "Hobi"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $Hobi;?></td>
</tr>
<tr>
    <td><?php echo "Deskripsi"; ?></td>
    <td><?php echo ":"; ?></td>
    <td><?php echo $Deskripsi ;?></td>
</tr>
</table>
</body>		
</html>