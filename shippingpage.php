<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gamsahabnida! Online Kpop Store</title>
	<link rel="stylesheet" href="style-shippingpage.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
	<!-- Navbar Start -->
	<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
	  <div class="container">
	     <a class="navbar-brand" href="#">
		    <img src="assets/logo.png" alt="Logo" width="50" height="50" class="me-2"> <strong>G!</strong> Kpop Store
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
	          <a class="nav-link" href="#">Keranjang</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Notifikasi</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Bantuan</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Daftar</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#">Masuk</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
	<!-- Navbar End -->
	<!-- Shippingpage Start -->
	<div class="container mt-3">
	<div class="panel panel-default col-xs-12 col-sm-6">
		<div class="panel-heading">
			<h4 class="panel-title">
				<span class="text-info"><u>Pengiriman</u></span>
			</h4>
		</div>
		<div class="form-group">
		<label class="control-label">Ekspedisi</label>
		<br>
		<div class="select-control">
			<select class="form-control" onchange="clear_biaya();" id="pengiriman" name="pengiriman">
				<option value="22" selected="">J&amp;T Express</option>
				<option value="9">JNE REG</option>
				<option value="19">JNE YES (Khusus Frozen KFOOD)</option>
				<option value="16">Dropship Resi Otomatis J&amp;T Express (Cashless)</option>
				<option value="15">Dropship Resi Otomatis JNE Reguler (Cashless)</option>
			</select>
		</div>
		<input type="hidden" class="total" value="5">
		<input type="hidden" class="ekps" value="0">
		</div>
		<div class="form-group">
			<label class="control-label" for="search">Alamat Pengiriman</label>
			<input type="text" id="searchkota" class="form-control autosuggest" name="tujuan" placeholder="" value="" autocomplete="off">
			<input type="hidden" id="idkota" name="idkota" value="121772">
		</div>
	</div>
	</div>
	<!-- Shippingpage End -->
	<!-- Payment Total Table Start -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-5 pull-right nopadding">
				<table class="table table-bordered table-responsive table-total">
				<tbody>
					<tr>
						<td class="text-right"><b>Total Rupiah</b></td>
						<td class="text-right" width="42%"><b><span id="biayatotalrupiah">203.000</span></b></td>
					</tr>
				</tbody>
				</table>
				<div style="clear: both;"></div>
			</div>
		</div>
	</div>
	<!-- Payment Total Table End -->
	<!-- Payment Method Table Start -->
	<div class="container">
		<div class="row">
			<div class="panel panel-default col-xs-12">
				<div class="panel-heading">
					<h4 class="panel-title">
						<span class="text-info"><u>Pembayaran</u></span>
					</h4>
				</div>
			<table class="table pembayaran" width="100%">
				<tbody>
					<tr valign="top">
						<td style="width:20px;">
							<div class="radio_alt">
								<input type="radio" id="r1" name="pembayaran" checked="" value="1">
								<label for="r1"></label>
							</div>
						</td>
						<td>
							<label for="r1"><img src="assets/bri.png" alt=""> Transfer Bank BRI</label>
						</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<!-- Payment Method Table End -->
	<!-- Checkout Button Start -->
	<div class="container">
		<div class="row">
			<div class="buttons checkout">
				<button class="btn btn-primary btn-back" onclick="gokembali()">← Back</button>
				<button class="btn btn-primary btn-back" onclick="gobayar()">Checkout →</button>
			</div>
		</div>
	</div>
	<!-- Checkout Button End -->
	<!-- Footer Start -->
		<footer id="footer">
			<div class="footer-center pt-5 mb-5" id="pavo-footer-center">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="moveR col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="box pav-custom">
									<div class="custom-content">
										<div class="box-heading"><span><u>Korean Chart</u></span>
										</div>
										<p><span style="font-size: 10pt;">Semua pembelian Album fisik di Gamsahabnida! Online Kpop Store akan terhitung di <strong>HANTEO &amp; GAON Chart</strong></span></p>
										<p><img src="assets/vsBRHXI.png" alt="" width="196" height="237"></p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
							<div class="box pav-custom  ">
								<div class="custom-content">
								<div class="box-heading"><span class="title"><u>Tentang Kami</u></span></div>
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
											<em>Gamsahabnida! Online Kpop Store is a trusted Online Shopping Sites&nbsp;that provides imported and local Korean goodies since 2022</em>
										</span>
									</p>
								</div>
								</div>
							</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
								<div class="box pav-custom  ">
									<div class="custom-content">
										<div class="box-heading"><span class="title"><u>Pembayaran</u></span></div>
										<div class="content">
										<div style="line-height: 2;"><img loading="lazy" src="assets/bri.png" width="110" height="38" class="img-payment" alt="BRI"></div>
										<div style="line-height: 2;"><img loading="lazy" src="assets/dana.png" width="110" height="38" class="img-payment" alt="Dana"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-1">
								<div class="box footerlink">
									<div class="box-heading">
										<span><u>Information</u></span>
										<div class="content mt-1">
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
					</div>
				</div>	
			</div>
		</footer>
		<!-- Footer End -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>