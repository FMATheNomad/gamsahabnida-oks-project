<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gamsahabnida! Online Kpop Store</title>
	<link rel="stylesheet" href="css/style-contactus.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
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
	<!-- Contact Us Start -->
	<div class="container">
	<div class="content-inner contact-form mt-5">
		<h3 class="text-info"><u>Kontak Kami!</u></h3>
		<form action="/contactus.php?send" method="post" name="f1" onsubmit="return submit_form_maincaptcha()" class="form-horizontal" role="form">
			<div class="row">
			<fieldset class="col-md-12">
			<div class="form-group required">
				<label class="col-sm-2 control-label" for="input-nama">Nama</label>
				<div class="col-sm-10">
					<input type="text" id="input-nama" class="form-control" name="nama" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="input-perusahaan">Perusahaan</label>
				<div class="col-sm-10">
					<input type="text" id="input-perusahaan" class="form-control" name="perusahaan" value="">
				</div>
			</div>
			<div class="form-group required">
				<label class="col-sm-2 control-label" for="input-email">Email</label>
				<div class="col-sm-10">
					<input type="text" id="input-email" class="form-control" name="email" value="">
				</div>
			</div>
			<div class="form-group required">
				<label class="col-sm-2 control-label" for="input-alamat">Alamat</label>
				<div class="col-sm-10">
					<textarea class="form-control" rows="5" name="alamat" id="alamat"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="input-telpon">Telepon</label>
				<div class="col-sm-10">
					<input type="text" id="input-telpon" class="form-control" name="telpon" value="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for="input-kota">Kota</label>
				<div class="col-sm-10">
					<input type="text" id="input-kota" class="form-control" name="kota" value="">
				</div>
			</div>
		<div class="form-group required">
			<label class="col-sm-2 control-label" for="input-negara">Negara</label>
			<div class="col-sm-10">
			<div class="select-control">
				<select name="negara" class="form-control">
					<option value="Afganistan">Afganistan</option>
					<option value="Albania">Albania</option>
					<option value="Algeria">Algeria</option>
					<option value="American Samoa">American Samoa</option>
					<option value="Andorra">Andorra</option>
					<option value="Angola">Angola</option>
					<option value="Anguilla">Anguilla</option>
					<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
					<option value="Argentina">Argentina</option>
					<option value="Armenia">Armenia</option>
					<option value="Aruba">Aruba</option>
					<option value="Australia">Australia</option>
					<option value="Austria">Austria</option>
					<option value="Azerbaijan">Azerbaijan</option>
					<option value="Bahamas">Bahamas</option>
					<option value="Bahrain">Bahrain</option>
					<option value="Bangladesh">Bangladesh</option>
					<option value="Barbados">Barbados</option>
					<option value="Belarus">Belarus</option>
					<option value="Belgium">Belgium</option>
					<option value="Belize">Belize</option>
					<option value="Benin">Benin</option>
					<option value="Bermuda">Bermuda</option>
					<option value="Bhutan">Bhutan</option>
					<option value="Bolivia">Bolivia</option>
					<option value="Bonaire">Bonaire</option>
					<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
					<option value="Botswana">Botswana</option>
					<option value="Brazil">Brazil</option>
					<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
					<option value="Brunei">Brunei</option>
					<option value="Bulgaria">Bulgaria</option>
					<option value="Burkina Faso">Burkina Faso</option>
					<option value="Burundi">Burundi</option>
					<option value="Cambodia">Cambodia</option>
					<option value="Cameroon">Cameroon</option>
					<option value="Canada">Canada</option>
					<option value="Canary Islands">Canary Islands</option>
					<option value="Cape Verde">Cape Verde</option>
					<option value="Cayman Islands">Cayman Islands</option>
					<option value="Central African Republic">Central African Republic</option>
					<option value="Chad">Chad</option>
					<option value="Channel Islands">Channel Islands</option>
					<option value="Chile">Chile</option>
					<option value="China">China</option>
					<option value="Christmas Island">Christmas Island</option>
					<option value="Cocos Island">Cocos Island</option>
					<option value="Colombia">Colombia</option>
					<option value="Comoros">Comoros</option>
					<option value="Congo">Congo</option>
					<option value="Cook Islands">Cook Islands</option>
					<option value="Costa Rica">Costa Rica</option>
					<option value="Cote DIvoire">Cote DIvoire</option>
					<option value="Croatia">Croatia</option>
					<option value="Cuba">Cuba</option>
					<option value="Curaco">Curaco</option>
					<option value="Cyprus">Cyprus</option>
					<option value="Czech Republic">Czech Republic</option>
					<option value="Denmark">Denmark</option>
					<option value="Djibouti">Djibouti</option>
					<option value="Dominica">Dominica</option>
					<option value="Dominican Republic">Dominican Republic</option>
					<option value="East Timor">East Timor</option>
					<option value="Ecuador">Ecuador</option>
					<option value="Egypt">Egypt</option>
					<option value="El Salvador">El Salvador</option>
					<option value="Equatorial Guinea">Equatorial Guinea</option>
					<option value="Eritrea">Eritrea</option>
					<option value="Estonia">Estonia</option>
					<option value="Ethiopia">Ethiopia</option>
					<option value="Falkland Islands">Falkland Islands</option>
					<option value="Faroe Islands">Faroe Islands</option>
					<option value="Fiji">Fiji</option>
					<option value="Finland">Finland</option>
					<option value="France">France</option>
					<option value="French Guiana">French Guiana</option>
					<option value="French Polynesia">French Polynesia</option>
					<option value="French Southern Ter">French Southern Ter</option>
					<option value="Gabon">Gabon</option>
					<option value="Gambia">Gambia</option>
					<option value="Georgia">Georgia</option>
					<option value="Germany">Germany</option>
					<option value="Ghana">Ghana</option>
					<option value="Gibraltar">Gibraltar</option>
					<option value="Great Britain">Great Britain</option>
					<option value="Greece">Greece</option>
					<option value="Greenland">Greenland</option>
					<option value="Grenada">Grenada</option>
					<option value="Guadeloupe">Guadeloupe</option>
					<option value="Guam">Guam</option>
					<option value="Guatemala">Guatemala</option>
					<option value="Guinea">Guinea</option>
					<option value="Guyana">Guyana</option>
					<option value="Haiti">Haiti</option>
					<option value="Hawaii">Hawaii</option>
					<option value="Honduras">Honduras</option>
					<option value="Hong Kong">Hong Kong</option>
					<option value="Hungary">Hungary</option>
					<option value="Iceland">Iceland</option>
					<option value="India">India</option>
					<option value="Indonesia" selected="selected">Indonesia</option>
					<option value="Iran">Iran</option>
					<option value="Iraq">Iraq</option>
					<option value="Ireland">Ireland</option>
					<option value="Isle of Man">Isle of Man</option>
					<option value="Israel">Israel</option>
					<option value="Italy">Italy</option>
					<option value="Jamaica">Jamaica</option>
					<option value="Japan">Japan</option>
					<option value="Jordan">Jordan</option>
					<option value="Kazakhstan">Kazakhstan</option>
					<option value="Kenya">Kenya</option>
					<option value="Kiribati">Kiribati</option>
					<option value="Korea North">Korea North</option>
					<option value="Korea Sout">Korea Sout</option>
					<option value="Kuwait">Kuwait</option>
					<option value="Kyrgyzstan">Kyrgyzstan</option>
					<option value="Laos">Laos</option>
					<option value="Latvia">Latvia</option>
					<option value="Lebanon">Lebanon</option>
					<option value="Lesotho">Lesotho</option>
					<option value="Liberia">Liberia</option>
					<option value="Libya">Libya</option>
					<option value="Liechtenstein">Liechtenstein</option>
					<option value="Lithuania">Lithuania</option>
					<option value="Luxembourg">Luxembourg</option>
					<option value="Macau">Macau</option>
					<option value="Macedonia">Macedonia</option>
					<option value="Madagascar">Madagascar</option>
					<option value="Malawi">Malawi</option>
					<option value="Malaysia">Malaysia</option>
					<option value="Maldives">Maldives</option>
					<option value="Mali">Mali</option>
					<option value="Malta">Malta</option>
					<option value="Marshall Islands">Marshall Islands</option>
					<option value="Martinique">Martinique</option>
					<option value="Mauritania">Mauritania</option>
					<option value="Mauritius">Mauritius</option>
					<option value="Mayotte">Mayotte</option>
					<option value="Mexico">Mexico</option>
					<option value="Midway Islands">Midway Islands</option>
					<option value="Moldova">Moldova</option>
					<option value="Monaco">Monaco</option>
					<option value="Mongolia">Mongolia</option>
					<option value="Montserrat">Montserrat</option>
					<option value="Morocco">Morocco</option>
					<option value="Mozambique">Mozambique</option>
					<option value="Myanmar">Myanmar</option>
					<option value="Nambia">Nambia</option>
					<option value="Nauru">Nauru</option>
					<option value="Nepal">Nepal</option>
					<option value="Netherland Antilles">Netherland Antilles</option>
					<option value="Netherlands">Netherlands</option>
					<option value="Nevis">Nevis</option>
					<option value="New Caledonia">New Caledonia</option>
					<option value="New Zealand">New Zealand</option>
					<option value="Nicaragua">Nicaragua</option>
					<option value="Niger">Niger</option>
					<option value="Nigeria">Nigeria</option>
					<option value="Niue">Niue</option>
					<option value="Norfolk Island">Norfolk Island</option>
					<option value="Norway">Norway</option>
					<option value="Oman">Oman</option>
					<option value="Pakistan">Pakistan</option>
					<option value="Palau Island">Palau Island</option>
					<option value="Palestine">Palestine</option>
					<option value="Panama">Panama</option>
					<option value="Papua New Guinea">Papua New Guinea</option>
					<option value="Paraguay">Paraguay</option>
					<option value="Peru">Peru</option>
					<option value="Phillipines">Phillipines</option>
					<option value="Pitcairn Island">Pitcairn Island</option>
					<option value="Poland">Poland</option>
					<option value="Portugal">Portugal</option>
					<option value="Puerto Rico">Puerto Rico</option>
					<option value="Qatar">Qatar</option>
					<option value="Republic of Montenegro">Republic of Montenegro</option>
					<option value="Republic of Serbia">Republic of Serbia</option>
					<option value="Reunion">Reunion</option>
					<option value="Romania">Romania</option>
					<option value="Russia">Russia</option>
					<option value="Rwanda">Rwanda</option>
					<option value="Saipan">Saipan</option>
					<option value="Samoa">Samoa</option>
					<option value="Samoa American">Samoa American</option>
					<option value="San Marino">San Marino</option>
					<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
					<option value="Saudi Arabia">Saudi Arabia</option>
					<option value="Senegal">Senegal</option>
					<option value="Seychelles">Seychelles</option>
					<option value="Sierra Leone">Sierra Leone</option>
					<option value="Singapore">Singapore</option>
					<option value="Slovakia">Slovakia</option>
					<option value="Slovenia">Slovenia</option>
					<option value="Solomon Islands">Solomon Islands</option>
					<option value="Somalia">Somalia</option>
					<option value="South Africa">South Africa</option>
					<option value="Spain">Spain</option>
					<option value="Sri Lanka">Sri Lanka</option>
					<option value="St Barthelemy">St Barthelemy</option>
					<option value="St Eustatius">St Eustatius</option>
					<option value="St Helena">St Helena</option>
					<option value="St Kitts-Nevis">St Kitts-Nevis</option>
					<option value="St Lucia">St Lucia</option>
					<option value="St Maarten">St Maarten</option>
					<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
					<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
					<option value="Sudan">Sudan</option>
					<option value="Suriname">Suriname</option>
					<option value="Swaziland">Swaziland</option>
					<option value="Sweden">Sweden</option>
					<option value="Switzerland">Switzerland</option>
					<option value="Syria">Syria</option>
					<option value="Tahiti">Tahiti</option>
					<option value="Taiwan">Taiwan</option>
					<option value="Tajikistan">Tajikistan</option>
					<option value="Tanzania">Tanzania</option>
					<option value="Thailand">Thailand</option>
					<option value="Togo">Togo</option>
					<option value="Tokelau">Tokelau</option>
					<option value="Tonga">Tonga</option>
					<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
					<option value="Tunisia">Tunisia</option>
					<option value="Turkey">Turkey</option>
					<option value="Turkmenistan">Turkmenistan</option>
					<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
					<option value="Tuvalu">Tuvalu</option>
					<option value="Uganda">Uganda</option>
					<option value="Ukraine">Ukraine</option>
					<option value="United Arab Erimates">United Arab Erimates</option>
					<option value="United Kingdom">United Kingdom</option>
					<option value="United States of America">United States of America</option>
					<option value="Uraguay">Uraguay</option>
					<option value="Uzbekistan">Uzbekistan</option>
					<option value="Vanuatu">Vanuatu</option>
					<option value="Vatican City State">Vatican City State</option>
					<option value="Venezuela">Venezuela</option>
					<option value="Vietnam">Vietnam</option>
					<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
					<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
					<option value="Wake Island">Wake Island</option>
					<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
					<option value="Yemen">Yemen</option>
					<option value="Zaire">Zaire</option>
					<option value="Zambia">Zambia</option>
					<option value="Zimbabwe">Zimbabwe</option></select></div>
			</div>
		</div>
		<div class="form-group required">
			<label class="col-sm-2 control-label" for="input-pesan">Pesan</label>
			<div class="col-sm-10">
				<textarea id="input-pesan" rows="5" class="form-control" name="pesan"></textarea>
			</div>
		</div>
		<div class="form-group required">
			<label class="col-sm-2 control-label" for="recaptcha_response_field"></label>
			<div class="col-sm-10">
				<div class="g-recaptcha" id="maincaptcha" data-badge="inline" data-size="invisible" data-callback="callback_complete_maincaptcha">
					<div class="grecaptcha-badge" data-style="inline" style="width: 256px; height: 60px; box-shadow: gray 0px 0px 5px;">
						<div class="grecaptcha-logo">
							<iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lfh92oUAAAAACte3hHYU8BkAR_BAuCyoXrDZoHg&amp;co=aHR0cHM6Ly9rb3JlYW5kYWUuY29tOjQ0Mw..&amp;hl=id&amp;v=5qcenVbrhOy8zihcc2aHOWD4&amp;size=invisible&amp;badge=inline&amp;cb=ek6rf4kkt1h0" width="256" height="60" role="presentation" name="a-r4d0wvltql7p" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
						</div>
						<div class="grecaptcha-error"></div>
						<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
					</div>
					<iframe style="display: none;"></iframe>
				</div>
				<noscript>
				      <div style="background: rgb(249, 249, 249) none repeat scroll 0% 0%; border: 1px solid rgb(211, 211, 211); color: rgb(0, 0, 0); display: block; height: 76px; width: 300px; font-size: 13px; box-shadow: 0px 0px 4px 1px rgba(0, 0, 0, 0.08);">
				        <div style="padding: 12px 7px; display: inline-block; width: 202px; color: red;">Your browser does not support JavaScript! Please change your browser.</div>
				        <div style="display: inline-block; padding: 12px 11px;">
				          <div style="height: 32px; margin: 0px 13px; width: 32px; background-image: url(&quot;https://www.gstatic.com/recaptcha/api2/logo_48.png&quot;); background-size: 32px auto; background-repeat: no-repeat;"></div>
				          <div style="color: rgb(155, 155, 155); cursor: default; font-family: Roboto,helvetica,arial,sans-serif; font-size: 10px; font-weight: 400; line-height: 10px; margin-top: 5px; text-align: center;">reCAPTCHA</div>
				        </div>
				      </div>
				</noscript>
			</div>
		</div>
		<div class="buttons mt-3">
			<div class="pull-right">
				<input class="btn btn-primary" value="Send" type="submit">
			</div>
		</div>
		</fieldset>
		</div>
		</form>
		</div>
	</div>
	<!-- Contact Us End  -->
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
									<p><img src="assets/chart/vsBRHXI.png" alt="" width="196" height="237"></p>
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
									<div style="line-height: 2;"><img loading="lazy" src="assets/payment/BRI.png" width="110" height="38" class="img-payment" alt="BRI"></div>
									<div style="line-height: 2;"><img loading="lazy" src="assets/payment/Jago.png" width="110" height="38" class="img-payment" alt="Jago"></div>
									<div style="line-height: 2;"><img loading="lazy" src="assets/payment/Aladin.png" width="110" height="38" class="img-payment" alt="Aladin"></div>
									<div style="line-height: 2;"><img loading="lazy" src="assets/payment/blu.png" width="110" height="38" class="img-payment" alt="blu"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="box footerlink">
								<div class="box-heading">
									<span><u>Information</u></span>
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
				</div>
			</div>	
		</div>
	</footer>
	<!-- Footer End -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>