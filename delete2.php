<?php 
include "koneksi.php"; 
$No = $_GET['No']; 
 
$query = "DELETE FROM rpl2 WHERE No = '$No'"; 
mysqli_query($kon, $query); 
 
?> 
<script language="JavaScript"> 
document.location='rpl2.php'</script> 
<?php 
?>