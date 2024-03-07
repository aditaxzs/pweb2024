<!DOCTYPE html>
<html lang="en">
		
<?php include "koneksi.php";?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WEBSITE RPL</title>
		<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f4f4f4;
		}

		header {
			background-color: #726f6f;
			color: white;
			text-align: center;
			padding: 2px;
		}
		.nav1 {
			background-color: grey;
			padding: 15px;
			width: 45%;
			border: 2px solid black;
			border-radius: 20px;
			text-align: left;
		}
		nav {
			background-color: #ffee05;
			padding: 10px;
			text-align: center;
		}

		nav
		a:link {
			color: #ccc;
		}

		nav
		a:visited {
			color: #095484;
		}

		nav
		a:hover {
			color: #8ebf42;
		}

		nav
		a:active {
			color: #800000;
		}

		section {
			max-width: 800px;
			margin: 20px auto;
			padding: 20px;
			background-color: white;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		.dashboard-item {
			margin-bottom: 20px;
			padding: 1px;
			background-color: #eee;
			border-radius: 8px;
		}
		.button {
			border: none;
			color: white;
			padding: 16px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			transition-duration: 0.4s;
			cursor: pointer;
		}
		.button1 {
			background-color:  white;
			color: black;
			border: 2px solid #04AA6D;
		}
		.button1:hover{
			background-color: #04AA6D;
			color: white;
		}
		.button2 {
			background-color: white;
			color: black;
			border: 2px solid #008CBA;
		}
		.button2:hover {
			background-color: #008CBA;
			color: white;
		}
		.button3 {
			background-color: white;
			color: black;
			border: 2px solid palevioletred;
		}
		.button3:hover {
			background-color: palevioletred;
			color: white;
		}
	</style>
<body>

	<header>
		<img src="logo5.png" style="float: left; padding-left: 350px" height="100" width="100">
		<div style="float: left; padding-left: 10px">
		<h2>SMK NEGERI 5 KOTA BEKASI</h2>
		<p><i>SMK Sabisa bisa, SMK Kudu Bisa, SMK Pasti Bisa</i></p>
	</div>
		<img src="logorpl.png" style="float: right; padding-right: 300px" padding-top="20" height="100" width="100">
		<h1><marquee>REKAYASA PERANGKAT LUNAK</marquee></h1>
	</header>

	<nav>
		<a href="#" id="home-link" style=" text-decoration: none; font-weight: bold;">Home</a> |
		<a href="#" id="courses-link" style=" text-decoration: none; font-weight: bold;">Jadwal Pelajaran</a> |
		<a href="#" id="events-link" style=" text-decoration: none; font-weight: bold;">Events</a> |
		<a href="#" id="guru-link" style=" text-decoration: none; font-weight: bold;">Data Guru</a> |
		<a href="#" id="siswa-link" style=" text-decoration: none; font-weight: bold;">Data Siswa</a>
	</nav>

	<section id="home" class="dashboard-item">
		<center>
		<h2>Selamat Datang di Dashboard Jurusan RPL</h2><br>
		<p><b>Visi</b></p>
		<p>“Terwujudnya SMK berkualitas yang menghasilkan Sumber Daya Manusia (SDM) Unggul, Kompeten, Berkarakter, dan Berwawasan global.”</p></center>
		<center><p><b>Misi</b></p></center>
		<ol>
			<li>Membentuk peserta didik berprestasi pada bidang akademis dan non akademis.</li>
			<li>Membekali peserta didik memiliki daya saing dengan menumbuhkembangkan semangat keunggulan yang kreatif dan inovatif.</li>
			<li>Mengembangkan ilmu pengetahuan dan teknologi sesuai dengan bakat, minat dan potensi peserta didik.</li>
			<li>Menghasilkan tamatan yang mampu mengembangkan sistem informasi digital.</li>
			<li>Membekali peserta didik dengan multiskills abad 21 dan kompetensi yang tersertifikasi IDUKA (Institusi Dunia Usaha dan Dunia Kerja) dan lembaga sertifikasi profesi.</li>
			<li>Menumbuhkembangkan karakter religius, nasionalis, ilmiah, dan edukatif pada seluruh warga sekolah.</li>
			<li>Mengoptimalkan penguatan aspek softskills dengan jiwa disiplin, mandiri dan tanggungjawab sesuai dengan etos kerja.</li>
			<li>Menumbuhkembangkan budaya sekolah yang sehat, ramah, dan peduli lingkungan.</li>
			<li>Memperkuat kolaborasi dan komunikasi dengan IDUKA (Institusi Dunia Usaha dan Dunia Kerja) dalam hal Link and Match Kurikulum Pembelajaran, PKL (Praktek Kerja Lapangan), Teaching Factory, Kelas Industri, Recruitment Tenaga Kerja, Magang Guru, Guru Tamu, serta kerjasama lainnya yang saling menguntungkan.</li>
			<li>Menerapkan sistem manajemen mutu Sekolah Menengah Kejuruan yang distandarkan secara nasional dengan berbasis teknologi informasi.</li>
		</ol>
	</section>

	<section id="courses" class="dashboard-item" style="display: none;">
		 <div class="card">
            <div class="card-body">
                <h2>Mata Pelajaran RPL Kelas X</h2>
                    <ul>
                        <li>Dasar Desain Grafis</li>
                        <li>Komputer Jaringan Dasar</li>
                        <li>Pemrograman Dasar</li>
                        <li>Sistem Komputer</li>
                        <li>IOT</li>
                     </ul>
                 </div>
             </div>

		<div class="card mt-3">
            <div class="card-body">
                <h2>Mata Pelajaran Kelas XI</h2>
                    <ul>
                        <li>Pemodelan Perangkat Lunak</li>
                        <li>Pemrograman Web</li>
                        <li>Pemrograman Berbasis Objek</li>
                        <li>Basis Data</li>
                        <li>Produk Kreatif dan Kewirausahaan</li>
                        <li>IOT</li>
                     </ul>
                 </div>
             </div>

              <div class="card mt-3">
            <div class="card-body">
                <h2>Mata Pelajaran Kelas XII</h2>
                    <ul>
                        <li>Pemrograman Web</li>
                        <li>Pemrograman Berbasis Objek</li>
                        <li>Basis Data</li>
                        <li>Produk Kreatif dan Kewirausahaan</li>
                     </ul>
                 </div>
             </div>
	</section>

	<section id="guru" class="dashboard-item" style="display: none;">
		<center><h2>DATA GURU REKAYASA PERANGKAT LUNAK (RPL) KELAS 12</h2></center>
		<form method="post" action="" enctype="multipart/form-data">
			<nav class="nav1">
				<p>
			<label>NIP&nbsp; &nbsp; &nbsp;:</label>&nbsp;
			<input type="text" name="nip">
</p>
			<p>
			<label>Nama</label>  :&nbsp;
			 <input type="text" name="nama">
</p>
			<p>
			<label>Mapel</label>  :&nbsp;
			<select name="pelajaran">
				<option value="Basis Data">Basis Data</option>
				 					<option value="PBO">PBO</option>
                                    <option value="PPL">PPL</option>
                                    <option value="PWeb">Pemrograman Web</option>
                                    <option value="DDG">DDG</option>
                                    <option value="Basis Data">Basis Data</option>
                                    <option value="Pemdas">Pemrograman Dasar</option>
                                    <option value="SisKom">Siskom</option>
                                    <option value="IOT">IOT</option>
                                    <option value="PKK">PKK</option>
			</select>
		</p>
			<label>Foto &nbsp; &nbsp;:</label>
                <input type="file" name="gambar"  placeholder="Foto" class="form-control">
               
			<div class="button"><button type="submit" name="submit">Tambah</button>
		</form>
	</nav></br>
		<?php
	if(isset($_POST['submit'])){
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$pelajaran = $_POST['pelajaran'];

		$gambar = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $path = "image/".$gambar;
        $pathdb = "image/".$gambar;

        if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
          if($ukuran_file <= 5000000){ 
            if(move_uploaded_file($tmp_file, $path)){ 

		$sql = mysqli_query($kon, "INSERT INTO guru (gambar, nip, nama, pelajaran) VALUES ('$gambar', '$nip', '$nama', '$pelajaran')");
			}
		}
	}
}		
	?>
		<table cellpadding="10" cellspacing="0" border="1">
			<tr>
				<th>No</th>
				<th>Foto</th>
				<th>NIP</th>
				<th>Nama</th>
				<th>Pelajaran</th>
				<th>Opsi</th>
			</tr>
					
			<tr>
				<?php
					$no = 1;
					$sql = mysqli_query($kon, "SELECT * FROM guru");
					while($d = mysqli_fetch_assoc($sql)){
				?>
					<td><?php echo $no++;?></td>
					<td><img src="image/<?php echo $d['gambar'];?>" style="max-width: 200px;"></td>
					<td><?php echo $d['nip'];?></td>
					<td><?php echo $d['nama'];?></td>
					<td><?php echo $d['pelajaran'];?></td>
					<td>	
					<a class="btn btn-dark" href="editguru.php?id=<?php echo $d['id'];?>">Edit</a>
					<a class="btn btn-light" onclick="return confirmAction()" href="hapusguru.php?id=<?php echo $d['id'];?>">Hapus</a>
				</td>
			</tr>
				<?php
	}
		?>
		</table>
	</section>

	<section id="events" class="dashboard-item" style="display: none;">
		<center>
		<h2>AOC Festival</h2>
		<p><i>Algorhytm Of Creativity</i></p>
		</center><br>
		<div style="display: flex; align-items: center;">
		<img src="foto.jpeg" height="300" width="500">&emsp;
		<h2>"Unity in Art"</h2>
		</div>
		<br>
		<div style="display: flex; align-items: center;">
		<h2> 22 September 2023</h2>&emsp;
		<img src="foto1.jpeg" height="300" width="500">
		</div>
	</section>

	<section id="siswa" class="dashboard-item" style="display: none;">
		<center>
		<a href="rpl1.php"><button class="button button1">12 RPL SAMSUNG</button></a>
		<a href="rpl2.php"><button class="button button2">12 RPL 2</button></a>
		<a href="rpl3.php"><button class="button button3">12 RPL 3</button></a>
		</center>
	</section>

	<script>
		// JavaScript untuk menangani navigasi antar bagian dashboard
		const homeLink = document.getElementById('home-link');
		const coursesLink = document.getElementById('courses-link');
		const eventsLink = document.getElementById('events-link');
		const guruLink = document.getElementById('guru-link');
		const siswaLink = document.getElementById('siswa-link');

		const homeSection = document.getElementById('home');
		const coursesSection = document.getElementById('courses');
		const eventsSection = document.getElementById('events');
		const guruSection = document.getElementById('guru');
		const siswaSection = document.getElementById('siswa');

		homeLink.addEventListener('click', function() {
		homeSection.style.display = 'block';
		coursesSection.style.display = 'none'; 
		eventsSection.style.display = 'none';
		guruSection.style.display = 'none';
		siswaSection.style.display = 'none';
		});

		coursesLink.addEventListener('click', function() {
		homeSection.style.display = 'none';
		coursesSection.style.display = 'block'; 
		eventsSection.style.display = 'none';
		guruSection.style.display = 'none';
		siswaSection.style.display = 'none';
		});

		eventsLink.addEventListener('click', function() {
		homeSection.style.display = 'none';
		coursesSection.style.display = 'none';
		eventsSection.style.display = 'block';
		guruSection.style.display = 'none';
		siswaSection.style.display = 'none';
		});

		guruLink.addEventListener('click', function() {
		homeSection.style.display = 'none';
		coursesSection.style.display = 'none';
		eventsSection.style.display = 'none';
		guruSection.style.display = 'block';
		siswaSection.style.display = 'none';
		});

		siswaLink.addEventListener('click', function() {
		homeSection.style.display = 'none';
		coursesSection.style.display = 'none';
		eventsSection.style.display = 'none';
		guruSection.style.display = 'none';
		siswaSection.style.display = 'block';
		});
	</script>
	
</body>
</html>