<?php
include 'koneksi.php'; // Pastikan Anda menyertakan file konfigurasi yang sesuai

if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Mengambil data gambar guru untuk dihapus dari folder
    $result = mysqli_query($kon, "SELECT gambar FROM guru WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);
    $gambar = $row['gambar'];
    $path = "image/".$gambar;

    // Menghapus data guru dari database
    $query = mysqli_query($kon, "DELETE FROM guru WHERE id='$id'");

    if($query){
        // Menghapus gambar dari folder jika data guru berhasil dihapus
        if(file_exists($path)){
            unlink($path);
        }

        echo "<script>
            alert('Data guru berhasil dihapus');
            window.location.href='dashboard.php#guru';
        </script>";
    }else{
        echo "<script>
            alert('Gagal menghapus data guru');
            window.location.href='dashboard.php#guru';
        </script>";
    }
}else{
    echo "<script>
        alert('ID guru tidak valid');
        window.location.href='dashboard.php#guru';
    </script>";
}
?>
