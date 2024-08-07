<?php
defined('BASEPATH') or exit('No direct script access allowed');
$information = json_decode($detail, true);
?>

<style>
	.sidebar {
		background-color: transparent;
		padding: 20px;

	}

	.sidebar a {
		display: block;
		color: #5c5c5c;
		margin-bottom: 10px;
		text-decoration: none;
	}

	.sidebar a.active {
		text-decoration: underline;
		text-decoration-color: #F2ABBB;
	}

	.content-wrapper {
		padding: 40px;
	}

	.section-title {
		color: #A96A7C;
		font-size: 24px;
		margin-bottom: 20px;
	}

	.form-control {
		border-radius: 30px;
		padding: 10px 20px;
		border: 1px solid #ccc;
	}

	.form-label {
		margin-top: 20px;
	}

	.btn-primary {
		background-color: #7A6D65;
		border: none;
		border-radius: 30px;
		padding: 10px 30px;
	}

	.password-input-container {
		position: relative;
		display: flex;
		align-items: center;
	}

	.form-control {
		width: 100%;
		padding: 10px;
		border: 1px solid #ccc;
		border-radius: 20px;
		font-size: 16px;
	}

	.toggle-password {
		position: absolute;
		right: 10px;
		cursor: pointer;
	}

	.toggle-password svg {
		color: #888;
	}

	.text-grey {
		color: #666;
	}

	.text-medium {
		font-weight: 500;
	}

	.required::after {
		content: " *";
		color: red;
	}

	.password-input-container .toggle-password {
		padding-right: 10px;
	}

	#table-cs {
		border-collapse: collapse;
		width: 100%;
		color: #545454;
		font-weight: normal;
	}

	#table-cs td,
	#table-cs th {
		border-bottom: 1px solid #ddd;
		padding: 8px;
	}

	#table-cs th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: transparent;
		color: #545454;
		font-weight: 500;
	}
</style>

<div style="margin-top: 10rem;">

	<div class="container ">
		<div class="text-center " style="margin-bottom: 80px;">
			<h6 class=" text-regular text-grey">DETAIL AKUN</h6>
			<h3 class="pink text-demibold">
				Mengelola Akun Anda
			</h3>
		</div>

		<div class="row">
			<!-- Sidebar -->
			<div class="col-md-3 d-none d-md-block">
				<div class="sidebar">
					<a class="text-demibold" href="#first">Informasi Pribadi</a>
					<a class="text-demibold" href="#alamat">Alamat</a>
					<a class="text-demibold" href="#pesanan-saya">Pesanan Saya</a>
					<a class="text-demibold" href="#konfirmasi">Konfirmasi Pembayaran</a>
					<a class="text-demibold" id="logout" href="<?= $logout_url ?>">Keluar</a>
				</div>
			</div>

			<!-- Content Wrapper -->
			<div class="col-md-9">
				<form id="informasi_pribadi">
					<!-- Formulir Informasi Pribadi -->
					<div id="firstForms">
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="firstName" class="text-grey text-medium required">Nama Depan</label>
								<input type="text" class="form-control" id="firstName" name="firstName" value="<?= isset($information['nama_depan']) ? $information['nama_depan'] : '' ?>">
							</div>
							<div class="col-md-6 mb-3">
								<label for="lastName" class="text-grey text-medium required">Nama Belakang</label>
								<input type="text" class="form-control" id="lastName" name="lastName" value="<?= isset($information['nama_belakang']) ? $information['nama_belakang'] : '' ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="gender" class="text-grey text-medium required">Jenis Kelamin</label>
								<input type="text" class="form-control" id="gender" name="gender" value="<?= isset($information['gender']) ? $information['gender'] : '' ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="dob" class="text-grey text-medium required">Tanggal Lahir</label>
								<input type="text" class="form-control" id="dob" name="dob" value="<?= isset($information['tgl_lahir']) ? $information['tgl_lahir'] : '' ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="phone" class="text-grey text-medium required">Nomor Hp</label>
								<input type="text" class="form-control" id="phone" name="phone" value="<?= isset($information['no_hp']) ? $information['no_hp'] : '' ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="email" class="text-grey text-medium required">Email</label>
								<input type="text" class="form-control" id="email" name="email" value="<?= isset($information['email']) ? $information['email'] : '' ?>">
							</div>
						</div>

						<h2 class="text20 text-grey text-demibold pt-5 mb-3">Ganti Kata Sandi</h2>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="currentPassword" class="text-grey text-medium required">Kata Sandi Saat Ini *</label>
								<div class="password-input-container">
									<input type="text" class="form-control" id="currentPassword" name="currentPassword">
									<span class="toggle-password">
										<img src="<?= IMAGE_FRONTEND ?>/eye1.png" alt="Toggle Password Visibility">
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="newPassword" class="text-grey text-medium required">Kata Sandi Baru</label>
								<div class="password-input-container">
									<input type="text" class="form-control" id="newPassword" name="newPassword">
									<span class="toggle-password">
										<img src="<?= IMAGE_FRONTEND ?>/eye2.png" alt="Toggle Password Visibility">
									</span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="confirmPassword" class="text-grey text-medium required">Konfirmasi Kata Sandi Baru</label>
								<div class="password-input-container">
									<input type="text" class="form-control" id="konfirmPassword" name="konfirmPassword">
									<span class="toggle-password">
										<img src="<?= IMAGE_FRONTEND ?>/eye2.png" alt="Toggle Password Visibility">
									</span>
								</div>
							</div>
						</div>
					</div>

					<!-- Formulir Alamat -->
					<div id="addressForm" style="display: none;">
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="firstName" class="text-grey text-medium required">Nama Depan</label>
								<input type="text" class="form-control" id="firstName" value="Andrea">
							</div>
							<div class="col-md-6 mb-3">
								<label for="lastName" class="text-grey text-medium required">Nama Belakang</label>
								<input type="text" class="form-control" id="lastName" value="Harley">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="street" class="text-grey text-medium required">Alamat</label>
								<input type="text" class="form-control" id="street">
							</div>
							<div class="col-md-12 mb-3">
								<label for="city" class="text-grey text-medium required">Kota</label>
								<input type="text" class="form-control" id="city">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="state" class="text-grey text-medium required">Provinsi</label>
								<input type="text" class="form-control" id="state">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="country" class="text-grey text-medium required">Negara</label>
								<input type="text" class="form-control" id="country">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="zip" class="text-grey text-medium required">Kode Pos</label>
								<input type="text" class="form-control" id="zip">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="zip" class="text-grey text-medium required">No Hp</label>
								<input type="text" class="form-control" id="zip">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="zip" class="text-grey text-medium required">Email</label>
								<input type="text" class="form-control" id="zip" value="andreaharley@gmail.com">
							</div>
						</div>
					</div>

					<!-- Daftar Pesanan -->
					<div id="orderList" style="display: none;">

						<div class="">
							<table id="table-cs">
								<thead>
									<tr>
										<th scope="col">Pesanan</th>
										<th scope="col">Tanggal</th>
										<th scope="col">Status</th>
										<th scope="col">Total</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>#239285</td>
										<td>21 April, 2024</td>
										<td>Selesai</td>
										<td>Rp 1.000.000 for 2 items</td>
										<td><button class="custom-button-brown-outline lihat-pesanan">LIHAT</button></td>
									</tr>
									<tr>
										<td>#239286</td>
										<td>21 April, 2024</td>
										<td>Selesai</td>
										<td>Rp 1.000.000 for 2 items</td>
										<td><button class="custom-button-brown-outline lihat-pesanan">LIHAT</button></td>
									</tr>
									<tr>
										<td>#239287</td>
										<td>21 April, 2024</td>
										<td>Selesai</td>
										<td>Rp 1.000.000 for 2 items</td>
										<td><button class="custom-button-brown-outline lihat-pesanan">LIHAT</button></td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>

					<!-- Detail Pesanan -->
					<div id="orderDetails" style="display: none;">
						<p class="text-medium text-grey text16">Pesanan #239285 ditempatkan pada 27 April 2024 dan telah selesai.
						</p>
						<h2 class="text-demibold text-grey text20">Detail Pesanan</h2>
						<table id="table-cs">
							<thead>
								<tr>
									<th class="text-medium text18 text-grey">Produk</th>
									<th class="text-medium text18 text-grey">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-medium text16 text-grey">
									<td>Cleansing Pads x 1
										<p class="ps-4 text14">Size: 250 gr</p>
									</td>
									<td>Rp 429.000</td>
								</tr>
								<tr class="text-medium text16 text-grey">
									<td>Hydrating Moisturizer x 1
										<p class="ps-4 text14">Size: 80 gr</p>
									</td>
									<td>Rp 429.000</td>
								</tr>
							</tbody>
							<tfoot>
								<tr class="text-medium text-grey">
									<td class=" py-3">Subtotal</td>
									<td>Rp 858.000</td>
								</tr>
								<tr class="text-medium text-grey">
									<td class=" py-3">Pengiriman</td>
									<td>Free shipping</td>
								</tr>
								<tr class="text-medium text-grey">
									<td class=" py-3">Metode Pembayaran</td>
									<td>Midtrans</td>
								</tr>
								<tr class="text-medium text-grey">
									<td class=" py-3">Total</td>
									<td>Rp 858.000</td>
								</tr>
							</tfoot>
						</table>


						<div class="mt-5">

							<h3 class="text-demibold text20 text-grey" style="margin-bottom: 20px;">Alamat Tagihan</h3>
							<p class="text-medium text16 text-grey " style="margin-bottom: 20px;">Andrea Harley<br>Jalan Jakarta No
								21<br>Kec. Kelapa
								Gading<br>Kota Jakarta Utara<br>DKI
								Jakarta<br>34232<br></p>

							<h6 class="text-medium text16" style="margin-bottom: 20px;"><img src="<?= IMAGE_FRONTEND ?>/call-calling.png" alt="Phone Icon" class="me-2">
								081232932053</h6>
							<h6 class="text-medium text16"><img src="<?= IMAGE_FRONTEND ?>/sms-tracking.svg" alt="Phone Icon" class="me-2">andreaharley@gmail.com</h6>
							<!-- <button type="button" class="custom-button-brown mt-3" onclick="hideOrderDetails()">Kembali</button> -->
						</div>
					</div>

					<!-- Konfirmasi Pembayaran -->
					<div id="konfirmasiPesanan" style="display: none;">
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="orderNumber" class="text-grey text-medium required">Nomor Pesanan</label>
								<input type="text" class="form-control" id="orderNumber" value="123456">
							</div>
							<div class="col-md-12 mb-3">
								<label for="paymentEmail" class="text-grey text-medium required">Email</label>
								<input type="email" class="form-control" id="paymentEmail" value="">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="paymentTotal" class="text-grey text-medium required">Total Pembayaran</label>
								<input type="text" class="form-control" id="paymentTotal" value="">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 mb-3">
								<label for="paymentDate" class="text-grey text-medium required">Tanggal Pembayaran</label>
								<input type="text" class="form-control" id="paymentDate" value="12/10/1990">
							</div>
						</div>
					</div>

					<style>
						.button-container {
							display: flex;
							flex-wrap: wrap;
							gap: 10px;
							/* Adds space between buttons */
						}
					</style>
					<!-- Tombol Simpan dan Batal -->
					<div class="button-container">
						<button type="submit" class="custom-button-brown mt-3" id="simpan">SIMPAN PERUBAHAN</button>
						<button type="submit" class="custom-button-brown mt-3" id="alamat">PERBARUI ALAMAT</button>
						<button type="button" class="custom-button-brown-outline mt-3" id="batal">BATAL</button>
						<button type="button" class="custom-button-brown mt-3" id="konfirmasi-bayar" style="display: none;">KONFIRMASI
							PEMBAYARAN</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="position-relative" style="z-index: -1; bottom: -35rem;">
		<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class=" img-fluid background-img position-absolute bottom-0 end-0" />
	</div>