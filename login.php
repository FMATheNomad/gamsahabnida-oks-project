<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gamsahabnida! Online Kpop Store</title>
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <form class="form-container">
        <h3 class="textForm">Masuk ke akun anda</h3>
        <div class="mb-3">
          <label for="email" class="form-label textForm">Email</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-paper-plane"></i></span>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email anda...">
          </div>
          <div id="emailHelp" class="form-text textForm">Kami tidak akan pernah membagikan email anda kepada orang lain.</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label textForm">Password</label>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password...">
          </div>
        </div>
        <div class="text-end">
          <span><a href="#" class="textForm text-hover">Lupa password?</a></span>
        </div>
        <div class=" form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label textForm" for="exampleCheck1">Ingat saya</label>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-outline-primary textForm" name="submit">Masuk</button>
        </div>
        <div class="mt-1">
          <span class="textForm">Belum punya akun? <a href="registration.php" class="textForm text-hover">Daftar</a></span>
        </div>
      </form>
    </div>
    <!-- Fontawesome Kits -->
    <script src="https://kit.fontawesome.com/c32fe83d09.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>