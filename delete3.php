<?php 
include "koneksi.php"; 
$No = $_GET['No']; 
 
$query = "DELETE FROM rpl3 WHERE No = '$No'"; 
mysqli_query($kon, $query); 
 
?> 
<script language="JavaScript"> 
document.location='rpl3.php'</script> 
<?php 
?>