<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gamsahabnida! Online Kpop Store</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
      <div class="container">
         <a class="navbar-brand" href="#">
          <img src="assets/logo/logo.png" alt="Logo" width="50" height="50" class="me-2"> <strong>G!</strong> Kpop Store
       </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="d-flex ms-auto my-4 my-lg-0" role="search">
            <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search"">
            <button class="btn btn-outline-info" type="submit"><i class="fa-brands fa-searchengin"></i></button>
          </form>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="notification.php">Notifikasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registration.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->
    <!-- Breadcrumb Start -->
    <div class="container">
      <nav aria-label="breadcrumb" class="mt-3">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">Keranjang</a></li>
        </ol>
      </nav>
    </div>  
    <!-- Breadcrumb End -->
    <!-- Cart Start -->
    <div class="container">
      <div class="row row-product">
        <div class="col">
          <table class="table table-responsive">
            <thead class="table-dark">
              <tr>
                <th scope="col" style="padding-top: 20px; padding-bottom: 20px;">Hapus</th>
                <th scope="col" style="padding-top: 20px; padding-bottom: 20px;">Gambar</th>
                <th scope="col" style="padding-top: 20px; padding-bottom: 20px;">Produk</th>
                <th scope="col" style="padding-top: 20px; padding-bottom: 20px;">Harga</th>
                <th scope="col" style="padding-top: 20px; padding-bottom: 20px;">Jumlah</th>
                <th scope="col" style="padding-top: 20px; padding-bottom: 20px;">Sub total</th>
              </tr>
            </thead>
            <tbody class="align-middle">
              <tr>
                <th scope="row"><a href=""><i class="fa-solid fa-trash-can text-dark fs-4"></i></a></th>
                <td><img src="assets/produk/produk1.jpg" alt="" style="width: 50px;"></td>
                <td>Headset Rexus</td>
                <td>Rp. 500.000,-</td>
                <td><button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-minus"></i></button>
              <span class="mx-2">2</span>
              <button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i></button></td>
                <td>Rp. 500.000,-</td>
              </tr>
              <tr>
                <th scope="row"><a href=""><i class="fa-solid fa-trash-can text-dark fs-4"></i></a></th>
                <td><img src="assets/produk/produk2.jpg" alt="" style="width: 50px;"></td>
                <td>Baju Uniqlo</td>
                <td>Rp. 100.000,-</td>
                <td><button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-minus"></i></button>
              <span class="mx-2">5</span>
              <button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i></button></td>
                <td>Rp. 100.000,-</td>
              </tr>
              <tr>
                <th scope="row"><a href=""><i class="fa-solid fa-trash-can text-dark fs-4"></i></a></th>
                <td><img src="assets/produk/produk3.jpg" alt="" style="width: 50px;"></td>
                <td>Sepatu Adadis</td>
                <td>Rp. 300.000,-</td>
                <td><button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-minus"></i></button>
              <span class="mx-2">1</span>
              <button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i></button></td>
                <td>Rp. 300.000,-</td>
              </tr>
              <tr>
                <th scope="row"><a href=""><i class="fa-solid fa-trash-can text-dark fs-4"></i></a></th>
                <td><img src="assets/produk/produk4.jpg" alt="" style="width: 50px;"></td>
                <td>Jam Tangan Swiss Army</td>
                <td>Rp. 1.000.000,-</td>
                <td><button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-minus"></i></button>
              <span class="mx-2">1</span>
              <button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i></button></td>
                <td>Rp. 1.000.000,-</td>
              </tr>
              <tr>
                <th scope="row"><a href=""><i class="fa-solid fa-trash-can text-dark fs-4"></i></a></th>
                <td><img src="assets/produk/produk5.jpg" alt="" style="width: 50px;"></td>
                <td>Betadine Hand Sanitizer</td>
                <td>Rp. 5.000,-</td>
                <td><button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-minus"></i></button>
              <span class="mx-2">1</span>
              <button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i></button></td>
                <td>Rp. 5.000,-</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row row-product">
        <div class="col">
          <table class="table ms-auto mb-5 mt-3" id="table-checkout">
            <thead class="table-dark">
              <tr>
                <th scope="col" colspan="2" style="padding-top: 20px; padding-bottom: 20px;" class="text-center">Total Keranjang Belanja</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Total Harga</td>
                <td>Rp. 1.950.000,-</td>
              </tr>
              <tr>
                <td>Biaya Pengirman</td>
                <td>Rp. 195.000,-</td>
              </tr>
              <tr>
                <td>Biaya Layanan</td>
                <td>Rp. 5.000,-</td>
              </tr>
              <tr>
                <td>Sub Total</td>
                <td>Rp. 2.150.000,-</td>
              </tr>
              <tr>
                <td colspan="2">
                  <div class="btn-checkout d-grid">
                    <button class="btn btn-primary btn-sm mx-5">Pilih pengiriman dan metode pembayaran</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>  
    </div>  
    <!-- Cart End -->
    <!-- Footer Start -->
    <footer id="footer" style="background-color: mistyrose;">
      <div class="container p-5 mt-5">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="custom-content">
              <div class="box-heading"><span><u><strong>Korean Chart</strong></u></span>
              </div>
              <p><span style="font-size: 10pt;">Semua pembelian Album fisik Kpop di Gamsahabnida! akan terhitung di <strong>HANTEO &amp; GAON Chart</strong></span></p>
              <p><img src="assets/chart/vsBRHXI.png" alt="" width="196" height="237"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="custom-content">
                <div class="box-heading"><span class="title"><u><strong>Tentang Kami</strong></u></span></div>
                <div class="content">
                  <p>
                    <strong>WhatsApp</strong>
                    <br>
                    <button type="button" class="btn btn-info"><a href="https://api.whatsapp.com/send?phone=6281320342023" target="_blank" rel="noopener" class="text-decoration-none text-white" style="font-size: 13px"><i class="fa-brands fa-whatsapp"></i> HUBUNGI KAMI</a></button>
                  </p>
                  
                  <p>
                    <span style="font-size: 10pt;">
                      <strong>Jam Kerja</strong>
                    </span>
                    <br>
                    <span style="font-size: 10pt;">Senin - Jum'at 07.30 - 11.30, 12.30 - 14.30, 15.30 - 17.30 WIB</span>
                  </p>
                  <p>
                    <span style="font-size: 8pt;">
                      <em>Gamsahabnida! is the best online shopping option for those who want to try unique products from various parts of the world. Since 2022, we have been a trusted store that provides a wide range of cool items from Korea, Japan, Indonesia, and Hollywood.</em>
                    </span>
                  </p>
                </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="custom-content">
              <div class="box-heading"><span class="title"><u><strong>Pembayaran</strong></u></span></div>
              <div class="content">
              <div style="line-height: 2;"><img loading="lazy" src="assets/payment/BRI.png" width="110" height="38" class="img-payment" alt="BRI"></div>
              <div style="line-height: 2;"><img loading="lazy" src="assets/payment/Jago.png" width="110" height="38" class="img-payment" alt="Jago"></div>
              <div style="line-height: 2;"><img loading="lazy" src="assets/payment/Aladin.png" width="110" height="38" class="img-payment" alt="Aladin"></div>
              <div style="line-height: 2;"><img loading="lazy" src="assets/payment/blu.png" width="110" height="38" class="img-payment" alt="blu"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="box-heading">
              <span><u><strong>Informasi</strong></u></span>
              <div class="content">
                <a href="/content/Cara-Order"><span class="menu-title">Cara Order</a>
                <br>
                <a href="/konfirmasipembayaran"><span class="menu-title">Konfirmasi Pembayaran</span></a>
                <br>
                <a href="/contactus.php"><span class="menu-title">Kontak Kami</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->
    <!-- Fontawesome Kits -->
    <script src="https://kit.fontawesome.com/c32fe83d09.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>