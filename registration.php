<?php
// Periksa apakah form telah disubmit
if (isset($_POST['submit'])) {
  // Ambil data dari form
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];
  $nomor_hp = $_POST['nomor_hp'];
  $alamat = $_POST['alamat'];
  $syarat_ketentuan = isset($_POST['syarat_ketentuan']) ? 1 : 0;
  // Validasi data yang diinputkan
  if (empty($nama) || empty($email) || empty($password) || empty($password_confirm) || empty($nomor_hp) || empty($alamat)) {
    // Tampilkan pesan error jika data tidak lengkap
    echo 'Mohon isi semua kolom';
  } else if ($password !== $password_confirm) {
    // Tampilkan pesan error jika password tidak sama
    echo 'Password tidak sama';
  } else if (!$syarat_ketentuan) {
    // Tampilkan pesan error jika tidak menyetujui syarat dan ketentuan
    echo 'Mohon setujui syarat dan ketentuan';
  } else {
    // Lanjutkan proses registrasi jika data lengkap
    // Koneksi ke database
    $db = mysqli_connect('localhost', 'user', 'password', 'database_name');
    // Cek apakah email sudah terdaftar
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
      // Tampilkan pesan error jika email sudah terdaftar
      echo 'Email sudah terdaftar';
    } else {
      // Tambahkan data pengguna baru ke database
      $query = "INSERT INTO users (nama, email, password, nomor_hp, alamat) VALUES ('$nama', '$email', '$password', '$nomor_hp', '$alamat')";
      mysqli_query($db, $query);
      // Tampilkan pesan sukses
      echo 'Registrasi berhasil';
    }
    // Tutup koneksi ke database
    mysqli_close($db);
  }
}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gamsahabnida! Online Kpop Store</title>
	<link rel="stylesheet" href="css/style-registration.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
	<div class="container">
	<form class="form-container">
		<h3 class="mt-4" style="font-weight: bold; font-size: 30px;">Daftar</h3>
		<div class="row">
			<div class="col-md-7">
				<div class="mb-3">
				    <label for="nama" class="form-label">Nama lengkap</label>
				    <div class="input-group mb-3">
  						<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
				    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap anda...">
				    </div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="mb-3">
				    <label for="password" class="form-label">Password</label>
				    <div class="input-group mb-3">
  						<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
				    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password...">
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<div class="mb-3">
				    <label for="email" class="form-label">Email</label>
				    <div class="input-group mb-3">
  						<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-paper-plane"></i></span>
				    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email anda...">
				    </div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="mb-3">
				    <label for="password_confirm" class="form-label">Ulangi password</label>
				    <div class="input-group mb-3">
  						<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
				    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ulangi password yang anda buat...">
				    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="mb-3">
				    <label for="nomor_hp" class="form-label">No. Hp</label>
				    <div class="input-group mb-3">
  						<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-mobile-screen"></i></span>
				    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan No. Hp anda...">
				    </div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="mb-3">
				    <label for="alamat" class="form-label">Alamat lengkap</label>
				    <div class="input-group mb-3">
  						<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-location-dot"></i></span>
				    	<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan alamat lengkap anda...">
				    </div>
				</div>
			</div>
		</div>
	  <div class="mb-3 form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="syarat_ketentuan">Saya menyetujui <span class="fw-bold"><a href="">Syarat & Ketentuan</a></span> yang berlaku <span class="text-danger">*</span></label>
	  </div>
	  <div>
	  <div class="row">
	  	<div class="col-md-6 d-grid">
	  		<button type="submit" class="btn btn-outline-primary">Daftar!</button>
	  	</div>
	  	<div class="col-md-6 d-grid">
	  		<button type="reset" class="btn btn-outline-danger">Hapus Data!</button>
	  	</div>
	  </div>
	  </div>
	  <div class="mt-1">Kamu sudah punya akun? <a href="login.php">Login disini!</a></div>
	</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>