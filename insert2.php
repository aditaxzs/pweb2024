<?php 
include "koneksi.php"; 
$Nama = $_POST['Nama'];
$No_Telp = $_POST['No_Telp'];
 
$query=mysqli_query($kon, "INSERT INTO rpl2 (Nama, No_Telp)
VALUES ('$Nama', '$No_Telp')")or die (mysqli_error()); 
 
if($query) {
?>
<script language="JavaScript">
   document.location='rpl2.php'</script> 
<?php 
} 
?>