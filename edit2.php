<?php 
include "koneksi.php";
$No = $_GET['No'];  
 
$query=mysqli_query($kon, "SELECT * FROM rpl2 WHERE No='$No'");
while ($row=mysqli_fetch_array($query)){ 
 
$Nama = $row['Nama'];
$No_Telp = $row['No_Telp'];
 
echo "<html>"; 
echo "<body>"; 
echo "<font face='tahoma' color='green' size=4><b>Perbaiki Daftar</b></font>"; 
echo "<table align='left'>"; 
echo "<form method=\"post\" action=\"update2.php?No=$No\" enctype='multipart/form-data'>"; 
echo "<br>"; 
echo "<tr><td><font face='Tahoma' color='black' size=2>Nama </font></td><td>:</td><td><input type='text' name='Nama' value='$Nama' size='30'>&nbsp;
</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=2>No_Telp </font></td><td>:</td><td><input type='text' name='No_Telp' value='$No_Telp' size='30'>&nbsp;
</td></tr>";
 
echo "<tr><td></td><td></td><td><font size='2'><input type='submit' name='submit' value='Update'/></font></td></tr>"; 
echo "</table></form></body></html>"; 
} 
?>