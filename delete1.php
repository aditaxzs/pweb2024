<?php 
include "koneksi.php"; 
$No = $_GET['No']; 
 
$query = "DELETE FROM rpl1 WHERE No = '$No'"; 
mysqli_query($kon, $query); 
 
?> 
<script language="JavaScript"> 
document.location='rpl1.php'</script> 
<?php 
?>