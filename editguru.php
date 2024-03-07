<?php
include 'koneksi.php';
if(isset($_POST['update'])){
  $id = $_POST['id'];
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $pelajaran = $_POST['pelajaran'];
 
  $update = mysqli_query($kon, "UPDATE guru SET nip = '$nip', nama = '$nama', pelajaran ='$pelajaran' WHERE id='$id'");
  header("location: dashboard.php");
}

$id = $_GET['id'];
$sql = mysqli_query($kon, "SELECT * FROM guru WHERE id = '$id'");
while ($d = mysqli_fetch_array($sql)) {
?>

<form method="post" action="">
    <div class="container my-4">
<div class="card w-50">
        <div class="card-header bg-dark text-light">
          <h2 class="card-title">Edit Data Guru</h2>
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col">
                <img src="image/<?php echo $d['gambar'];?>" style="width: 15rem;">
            </div>
            <div class="col">
          <table cellpadding="10" cellspacing="0">
            <input type="hidden" name="id" value="<?php echo $d['id'];?>">
            <tr>
              <th>NIP</th>
              <td>:</td>
              <td><input type="text" name="nip" value="<?php echo $d['nip'];?>" class="form-control"></td>
            </tr>
            <tr>
              <th>Nama</th>
              <td>:</td>
              <td><input type="text" name="nama" value="<?php echo $d['nama'];?>" class="form-control"></td>
            </tr>
            <tr>
              <th>Pelajaran</th>
              <td>:</td>
              <td><select name="pelajaran" class="form-control">
                                    <option>Pilih Pelajaran</option>
                                    <option value="PBO">PBO</option>
                                    <option value="PPL">PPL</option>
                                    <option value="PWeb">Pemrograman Web</option>
                                    <option value="DDG">DDG</option>
                                    <option value="Basis Data">Basis Data</option>
                                    <option value="Pemdas">Pemrograman Dasar</option>
                                    <option value="SisKom">Siskom</option>
                                    <option value="IOT">IOT</option>
                                    <option value="PKK">PKK</option>
                                    </select></td>
            </tr>
          </table>
          <button class="btn btn-dark" name="update">Edit</button>
        </form>
      </div>
    </div>
</div>
</div>
    <?php
   }
  ?>