<?php 
include "koneksi.php"; 
$query=mysqli_query ($kon, "SELECT * FROM rpl1")or die (mysqli_error()); 
$jumlah = mysqli_num_rows($query); 
echo "<html>"; 
echo "<head>"; 
echo "<link href='style.css' type='text/css' rel='stylesheet'>"; 
echo "</head>"; 
echo "<title>Data Siswa 12 RPL SAMSUNG</title>"; 
echo "<body>"; 
echo "<font color='darkmagenta' face='Montserrat' size=5><b><br>DAFTAR SISWA 12 RPL SAMSUNG</b></font><br>"; 
echo "<br><a href='add1.php' style=\"text-decoration: none\"><font face='tahoma' size='3'><button>+ Tambahkan Siswa</button></font></a><br>";
echo "<br><table  border=\"1\" cellpadding=\"10\" cellspacing=\"1\" bordercolor=\"blue\" bgcolor=\"white\"> 
<tr bgcolor='blue' height=\"30\"><font color='white'>  
     <th align='center'><font color='white' face='Montserrat' size=4>No</font></th>         
     <th align='center'><font color='white' face='Montserrat' size=4>Nama Siswa</font></th>         
     <th align='center'><font color='white' face='Montserrat' size=4>No. Telp</font></th>
     <th align='center'><font color='white' face='Montserrat' size=4>Opsi</font></th>
</tr>";  
$j=0; 
while ($row=mysqli_fetch_array($query)) {     
    echo "<tr><td align='left' bgcolor='#657FFF'>";
    echo "<font face='Montserrat' size=4>";
    echo $j+1;
    echo"</font>";
    echo"</td>";     
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Montserrat' size=4>";
    echo $row["Nama"];
    echo"</font>";
    echo"</td>";
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Montserrat' size=4>";
    echo $row["No_Telp"];
    echo"</font>";
    echo"</td>";
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo "<font face='Montserrat' size=4>";
 echo "<a href='delete1.php?No=".$row['No']."' style=\"text-decoration: none\" title=\"Hapus\"><font face='Montserrat' size='2'>Hapus</font></a>   
    <a href='edit1.php?No=".$row['No']."' style=\"text-decoration: none\" title=\"Edit\"><font face='Montserrat' size='2'>Edit</font></a>"; $j++; }
echo "</table>";  
echo "</body>"; 
echo "</html>"; 
?>