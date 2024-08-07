<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<footer class="footer">
	<div class="row justify-content-center position-relative px-5 animatable bounceInLeft" style="margin-top: -6rem">
		<div id="newsletter" class="col-md-8 col-lg-7 mb-4 mb-md-0 position-absolute top-0 start-50 translate-middle-x">
			<div class="newsletter-box p-4" style="background-color: #CEC1B9;width: 100%;">
				<h5 class="text-brown text-demibold mb-3 lh-base ">
					Daftar <br> Newsletter Kami
				</h5>
				<div class="input-group">
					<input type="email" class="form-control rounded-pill me-2 text-grey" placeholder="Masukkan email Anda" />
					<button class="btn btn-secondary rounded-pill" style="background-color: #7A6D65;" type="button">
						BERLANGGANAN
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="container animatable fadeInUp">
		<div class="row" style="margin-top: 15rem">
			<div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
				<img draggable="false" src="<?= IMAGE_FRONTEND ?>/vzuu.png" class="mb-4" />
				<p class="text-medium text-grey">
					Vzuu hadir dengan menyadari kebutuhan untuk memberikan perawatan
					estetika yang inovatif dan profesional.
				</p>

				<div class="d-flex flex-column flex-md-row gap-3 mt-6 pink">
					<div style="margin-right: 20px;">
						<div>
							<p class="text-demibold" style="color: #F2ABBB;">@vzuuclinic</p>
						</div>
						<div class="mt-2">
							<a href="#" class="me-3"><i class="bi bi-instagram pink"></i></a>
							<a href="#" class="me-3"><i class="bi bi-tiktok pink"></i></a>
							<a href="#" class="me-3"><i class="bi bi-facebook pink"></i></a>
							<a href="#"><i class="bi bi-youtube pink"></i></a>
						</div>
					</div>
					<div>
						<div>
							<p class="text-demibold" style="color: #F2ABBB;">@vzuubeauty</p>
						</div>
						<div class="mt-2">
							<a href="#" class="me-3"><i class="bi bi-instagram pink"></i></a>
							<a href="#" class="me-3"><i class="bi bi-tiktok pink"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-8 text-center text-md-start text-grey" style="padding-left: 5rem;">
				<h5 class="text-dark text-uppercase text-demibold mb-3">Navigasi</h5>
				<div class="row lh-lg text-medium text-grey mt-3">
					<div class="col-6 col-md-4">
						<ul class="list-unstyled">
							<li><a href="<?= base_url('home') ?>">Beranda</a></li>
							<li><a href="<?= base_url('clinic') ?>">Vzuu Clinic</a></li>
							<li><a href="<?= base_url('product') ?>">Vzuu Beauty</a></li>
						</ul>
					</div>
					<div class="col-6 col-md-4">
						<ul class="list-unstyled">
							<li><a href="<?= base_url('blog') ?>">Blog</a></li>
							<li><a href="<?= base_url('login') ?>">Akun</a></li>
							<li><a href="<?= base_url('hubungi_kami') ?>">Hubungi Kami</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-4 mt-3 mt-md-0">
						<ul class="list-unstyled">
							<li><a href="beauty/account.html?#konfirmasi">Konfirmasi Pembayaran</a></li>
							<li><a href="<?= base_url('terms_condition') ?>">Syarat & Ketentuan</a></li>
							<li><a href="<?= base_url('privacy') ?>">Kebijakan Privasi</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center p-3 mt-5" style="background-color: #7a6d65">
		<p class="text-white m-0 text-regular">
			2024. Vzuu. All Right Reserved.
		</p>
	</div>
</footer>