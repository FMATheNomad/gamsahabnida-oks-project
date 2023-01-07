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
          <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Categories</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">Product</a></li>
        </ol>
      </nav>
    </div>  
    <!-- Breadcrumb End -->
    <!-- Single Product Start -->
    <div class="container">
      <div class="row row-product">
        <div class="col-lg-5">
          <figure class="figure">
            <img src="assets/produk/produk1.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 450px;">
            <figcaption class="figure-caption d-flex justify-content-evenly">
              <a href="">
                <img src="assets/produk/produk1.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
              </a>
              <a href="">
                <img src="assets/produk/produk1.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
              </a>
              <a href="">
                <img src="assets/produk/produk1.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
              </a>
              <a href="">
                <img src="assets/produk/produk1.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
              </a>
              <a href="">
                <img src="assets/produk/produk1.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
              </a>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-7">
          <h5 class="mb-3"><u>Headset Rexus</u></h5>
          <h3 class="text-muted mb-3">Rp. 250.000</h3>
          <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-minus"></i></button>
          <span class="mx-2">2</span>
          <button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i></button>
          <span><strong>Availability:</strong> In stock</span>
          <div class="btn-product mt-4">
            <a href="#" class="btn btn-warning text-white btn-lg me-2 btn-custom" style="font-size: 14px;"><i class="fa-solid fa-cart-shopping fs-6 me-2"></i> Masukkan ke keranjang</a>
            <a href="#" class="btn btn-success text-white btn-lg me-2" style="font-size: 14px;"><i class="fa-solid fa-credit-card fs-6 me-2"></i> Beli sekarang!</a>
          </div>
        </div>
      </div>
      <!-- Product Information, Release Date, Detail Start, and Review Start -->
      <div class="row row-product pt-5">
        <div class="col-12">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="information-tab" data-bs-toggle="tab" data-bs-target="#information-tab-pane" type="button" role="tab" aria-controls="information-tab-pane" aria-selected="true">Information</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="release-tab" data-bs-toggle="tab" data-bs-target="#release-tab-pane" type="button" role="tab" aria-controls="release-tab-pane" aria-selected="false">Release Date</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="detail-tab" data-bs-toggle="tab" data-bs-target="#detail-tab-pane" type="button" role="tab" aria-controls="detail-tab-pane" aria-selected="false">Detail</button>
              <li class="nav-item" role="presentation">
              <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review-tab-pane" type="button" role="tab" aria-controls="review-tab-pane" aria-selected="true">Review</button>
            </li>
            </li>
          </ul>
          <div class="tab-content p-3" id="myTabContent">
            <div class="tab-pane fade show active" id="information-tab-pane" role="tabpanel" aria-labelledby="information-tab" tabindex="0">
            <ol type="A">
              <li>Produk yang dijual 100% OFFICIAL dan SEALED.</li>
              <li>Produk ini merupakan produk PRE ORDER. Lama pengiriman menggunakan EMS 2-4 minggu sejak dikirim dari Korea</li>
              <li>Berat yang tertera merupakan berat estimasi (perkiraan), berat fix diketahui setelah produk rilis atau tiba di Indonesia. Jika saat rilis berat naik atau turun maka akan berpengaruh pada naik/turunnya harga</li>
              <li>Harga yang tertera sudah termasuk shipping fee (EMS), tax, dan packing standar dari Gamsahabnida (polymailer dan bubblewrap, untuk produk berposter gratis tube)</li>
            </ol>
            </div>
            <div class="tab-pane fade p-3" id="release-tab-pane" role="tabpanel" aria-labelledby="release-tab" tabindex="0">
              Tanggal Rilis : 04 Januari 2023<br>Jadwal Tutup PO 1&nbsp;: 17 Desember 2022, Jam 15.00 WIB (First Press)<br>Jadwal Tutup PO 2 : 22&nbsp;Desember 2022, Jam 15.00 WIB (First Press)<br>Jadwal Tutup PO 3 : 27 Desember 2022, Jam 15.00 WIB (First Press)<br>(Bisa dipesan selama persediaan masih ada, tutup PO akan dipercepat apabila barang sold out.)
              <strong><br></strong>
              <span style="color: #ff0000; font-size: 8pt;" data-darkreader-inline-color="">Setelah jadwal tutup PO masih bisa ikut PO reguler namun tidak menjamin akan dapat First Press Gift (selama persediaan masih ada di Korea). Jika ingin dapat First Press Gift disarankan membeli sebelum jadwal tutup PO</span>
            </div>
            <div class="tab-pane fade p-3" id="detail-tab-pane" role="tabpanel" aria-labelledby="detail-tab" tabindex="0">
              <p>ALBUM COVER : 158 x 218 x 14 (mm) / 4 Versions<br>PHOTO BOOK : 150 x 210 (mm) / 100p / 4 Versions<br>DISC : 118 x 118 (mm) / 1ea / 4 Versions<br>PHOTO CARD : 55 x 85 (mm) / Random 3ea out of 33ea / 4 Versions<br>SIGNATURE POSTCARD : 90 x 130 (mm) / Random 1ea out of 11ea / 4 Versions<br>MOBILE : 40~45 x 40 (mm) / Random 2ea out of 11ea<br>FILM PHOTO : 170 x 40 (mm) / Random 1ea out of 11ea<br>POSTER : 594 x 420 (mm) / 1ea / 4 Versions (PRE-ORDER ONLY)</p>
            <span style="font-size: 8pt;">**Selama persediaan First Press Gift/Pre Order Benefit masih tersedia di Korea**</span>
            <br><br>
            <a href="#" class="btn btn-success text-white btn-lg me-2" style="font-size: 14px;"><i class="fa-solid fa-credit-card fs-6 me-2"></i> Beli sekarang!</a>
          </div>
          <div class="tab-pane fade p-3" id="review-tab-pane" role="tabpanel" aria-labelledby="review-tab" tabindex="0" style="height: 250px; overflow: scroll; overflow-x: hidden;">
            <div class="row pt-2">
              <div class="col-3 col-md-1">
                <img src="assets/profil/1.png" class="rounded-circle" style="width: 50px;">
              </div>
              <div class="col">
                <h5 style="font-size: 16px; margin-bottom: 5px;"><u>Grace</u></h5>
                <p style="font-size: 14px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, veritatis ullam totam dicta dolorem, ducimus tempore nobis quod praesentium fuga enim, in consequatur odit nam.</p>
              </div>
            </div>
            <div class="row pt-2">
              <div class="col-3 col-md-1">
                <img src="assets/profil/2.png" class="rounded-circle" style="width: 50px;">
              </div>
              <div class="col">
                <h5 style="font-size: 16px; margin-bottom: 5px;"><u>Michael</u></h5>
                <p style="font-size: 14px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, veritatis ullam totam dicta dolorem, ducimus tempore nobis quod praesentium fuga enim, in consequatur odit nam.</p>
              </div>
            </div>
            <div class="row pt-2">
              <div class="col-3 col-md-1">
                <img src="assets/profil/3.png" class="rounded-circle" style="width: 50px;">
              </div>
              <div class="col">
                <h5 style="font-size: 16px; margin-bottom: 5px;"><u>Natalie</u></h5>
                <p style="font-size: 14px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, veritatis ullam totam dicta dolorem, ducimus tempore nobis quod praesentium fuga enim, in consequatur odit nam.</p>
              </div>
            </div>
            <div class="row pt-2">
              <div class="col-3 col-md-1">
                <img src="assets/profil/4.png" class="rounded-circle" style="width: 50px;">
              </div>
              <div class="col">
                <h5 style="font-size: 16px; margin-bottom: 5px;"><u>Brandon</u></h5>
                <p style="font-size: 14px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, veritatis ullam totam dicta dolorem, ducimus tempore nobis quod praesentium fuga enim, in consequatur odit nam.</p>
              </div>
            </div>
            <div class="row pt-2">
              <div class="col-3 col-md-1">
                <img src="assets/profil/5.png" class="rounded-circle" style="width: 50px;">
              </div>
              <div class="col">
                <h5 style="font-size: 16px; margin-bottom: 5px;"><u>Bryant</u></h5>
                <p style="font-size: 14px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, veritatis ullam totam dicta dolorem, ducimus tempore nobis quod praesentium fuga enim, in consequatur odit nam.</p>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <!-- Product Information, Release Date, Detail, and Review End -->
    </div>
    <!-- Single Product End -->
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