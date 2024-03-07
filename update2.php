<?php 
include "koneksi.php"; 
$No = $_GET['No']; 
 
$Nama = $_POST['Nama'];
$No_Telp = $_POST['No_Telp']; 
 
$query=mysqli_query ($kon, "UPDATE rpl2 SET Nama='$Nama', No_Telp='$No_Telp' WHERE No='$No'")or die (mysqli_error()); 
 
if($query) { 
?>
<script language="JavaScript"> 
 document.location='rpl2.php'</script> 
<?php 
} 
?>