<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	body {
		background: radial-gradient(circle at top left, #f1c3ce -10%, #fcf7f2, transparent 55%);
	}

	.input-group-text {
		border: none;
		background-color: transparent;
	}

	.input-group-text i {
		color: #000;
	}

	.form-control {
		border-radius: 50px;
		border: none;
	}

	.carousel-container {
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;
		margin-bottom: 20px;
	}

	.carousel-nav {
		display: flex;
		justify-content: center;
		align-items: center;
		width: 80%;
		overflow: hidden;
	}

	.carousel-nav ul {
		display: flex;
		list-style-type: none;
		padding: 0;
	}

	.carousel-nav li {
		margin: 0 10px;
	}

	.carousel-nav .nav-link {
		padding: 10px 15px;
		border-radius: 50px;
		transition: background-color 0.3s ease, color 0.3s ease;
		border: 1px solid transparent;
		/* Ensure uniform appearance for all capsules */
	}

	.carousel-nav .nav-link.active {
		background-color: #a9576a;
		color: white;
		border: 1px solid #a9576a;
		/* Ensure active capsule has proper border color */
	}

	.carousel-nav .nav-link:hover {
		background-color: #d9d9d9;
		/* Add a hover effect for better user experience */
	}

	.carousel-control-prev,
	.carousel-control-next {
		position: absolute;
		top: 50%;
		transform: translateY(-50%);
		background-color: #fff;
		border-radius: 50%;
		width: 30px;
		height: 30px;
		display: flex;
		justify-content: center;
		align-items: center;
		cursor: pointer;
		z-index: 10;
	}

	.carousel-control-prev {
		left: 0;
	}

	.carousel-control-next {
		right: 0;
	}

	.card {
		border: none;
	}

	.card-img-top {
		width: 334px;
		height: 334px;
		object-fit: cover;
	}

	.email-input {
		padding-right: 2.5rem;
	}

	.input-group-text {
		background: white;
		border: none;
	}

	.form-control {
		background: white;
		border: none;
	}
</style>

<div style="margin-top: 7rem;"></div>

<div class="container ">
	<div class="text-center pt-5">
		<h6 class="mb-3 text-regular">BLOG VZUU</h6>
		<h3 class="mb-4 pink text-demibold">Dapatkan Inspirasi dan Terhubung Dengan Kami</h3>
		<form class="d-flex justify-content-center mb-4" style="margin-top: 3rem;">
			<div class="input-group" style="max-width: 600px; border: 1px solid #ccc; border-radius: 50px; overflow: hidden; z-index: 10;background-color: white;">
				<span class="input-group-text bg-transparent">
					<i class="fa-solid fa-magnifying-glass"></i>
				</span>
				<input type="text" class="form-control rounded-end" placeholder="Cari artikel" aria-label="Search" aria-describedby="button-addon2" />
			</div>
		</form>

		<div class="carousel-container animatable fadeInUp" style="margin-top: 3rem;">
			<!-- <div class="carousel-control-prev" id="prevBtn">
          <i class="bi bi-arrow-left" style="color: #545454; font-size: 20px;background: transparent;"></i>
          <span class="visually-hidden">Previous</span>
        </div> -->
			<div class="carousel-nav">
				<ul class="nav nav-pills justify-content-center mb-4">
					<li class="nav-item"><a class="nav-link text-demibold text-grey active" href="#">Semua</a></li>
					<li class="nav-item"><a class="nav-link text-demibold text-grey" href="#">Wajah</a></li>
					<li class="nav-item"><a class="nav-link text-demibold text-grey" href="#">Tubuh</a></li>
					<li class="nav-item"><a class="nav-link text-demibold text-grey" href="#">Pikiran</a></li>
					<li class="nav-item"><a class="nav-link text-demibold text-grey" href="#">Kulit</a></li>
					<li class="nav-item"><a class="nav-link text-demibold text-grey" href="#">Jiwa</a></li>
					<li class="nav-item"><a class="nav-link text-demibold text-grey" href="#">Ritual</a></li>
				</ul>
			</div>
			<!-- <div class="carousel-control-next" id="nextBtn">
          <i class="bi bi-arrow-right" style="color: #545454; font-size: 20px"></i>
          <span class="visually-hidden">Next</span>
        </div> -->
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 margin-card-bottom">
			<div class="card bg-transparent">
				<img src="<?= IMAGE_FRONTEND ?>/photo.png" class="card-img-top" alt="..." />
				<div class="card-body p-0 pt-2">
					<p class="pink">KULIT</p>
					<h5 class="card-title text-demibold text-regular">5 Tips Kecantikan Menjelang Hari Pernikahan</h5>
					<p class="card-text text-grey text-regular">Menjelang hari pernikahan, memang semakin banyak persiapan
						yang harus dilakukan.
						Tapi,
						jangan lupa melakukan ...</p>
					<a href="<?= base_url('blog/detail') ?>" class="text-brown text-regular">BACA LEBIH LANJUT</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 margin-card-bottom">
			<div class="card bg-transparent">
				<img src="<?= IMAGE_FRONTEND ?>/photo2.png" class="card-img-top" alt="..." />
				<div class="card-body p-0 pt-2">

					<p class="pink">KULIT</p>
					<h5 class="card-title text-demibold text-grey">

						<h5 class="card-title text-demibold text-regular">Alasan Mengapa Tidak Boleh Memencet Jerawat</h5>
						<p class="card-text text-grey text-regular">Menjelang hari pernikahan, memang semakin banyak persiapan
							yang harus dilakukan.
							Tapi,
							jangan lupa melakukan ...</p>
						<a href="<?= base_url('blog/detail') ?>" class="text-brown text-regular">BACA LEBIH LANJUT</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 margin-card-bottom">
			<div class="card bg-transparent">
				<img src="<?= IMAGE_FRONTEND ?>/photo3.png" class="card-img-top" alt="..." />
				<div class="card-body p-0 pt-2">
					<p class="pink">WAJAH</p>
					<h5 class="card-title text-demibold text-regular">
						Perawatan Wajah Jika Kurang Tidur di Malam Hari
					</h5>
					<p class="card-text text-grey text-regular">
						Menjelang hari pernikahan, memang semakin banyak persiapan yang
						harus dilakukan. Tapi, jangan lupa melakukan ...
					</p>
					<a href="<?= base_url('blog/detail') ?>" class="text-brown text-regular">BACA LEBIH LANJUT</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 margin-card-bottom">
			<div class="card bg-transparent">
				<img src="<?= IMAGE_FRONTEND ?>/photo.png" class="card-img-top" alt="..." />
				<div class="card-body p-0 pt-2">
					<p class="pink">KULIT</p>
					<h5 class="card-title text-demibold text-grey">
						5 Tips Kecantikan Menjelang Hari Pernikahan
					</h5>
					<p class="card-text text-regular">
						Menjelang hari pernikahan, memang semakin banyak persiapan yang
						harus dilakukan. Tapi, jangan lupa melakukan ...
					</p>
					<a href="<?= base_url('blog/detail') ?>" class="text-brown text-regular">BACA LEBIH LANJUT</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 margin-card-bottom">
			<div class="card bg-transparent">
				<img src="<?= IMAGE_FRONTEND ?>/photo2.png" class="card-img-top" alt="..." />
				<div class="card-body p-0 pt-2">
					<p class="pink">WAJAH</p>
					<h5 class="card-title text-demibold text-grey">
						Alasan Mengapa Tidak Boleh Memencet Jerawat
					</h5>
					<p class="card-text text-regular">
						Menjelang hari pernikahan, memang semakin banyak persiapan yang
						harus dilakukan. Tapi, jangan lupa melakukan ...
					</p>
					<a href="<?= base_url('blog/detail') ?>" class="text-brown text-regular">BACA LEBIH LANJUT</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 margin-card-bottom ">
			<div class="card bg-transparent">
				<img src="<?= IMAGE_FRONTEND ?>/photo3.png" class="card-img-top" alt="..." />
				<div class="card-body p-0 pt-2">
					<p class="pink">WAJAH</p>
					<h5 class="card-title text-demibold text-grey">
						Perawatan Wajah Jika Kurang Tidur di Malam Hari
					</h5>
					<p class="card-text text-grey text-regular">
						Menjelang hari pernikahan, memang semakin banyak persiapan yang
						harus dilakukan. Tapi, jangan lupa melakukan ...
					</p>
					<a href="<?= base_url('blog/detail') ?>" class="text-brown text-regular">BACA LEBIH LANJUT</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="position-relative" style="z-index: -1; bottom: -35rem;">
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class="img-fluid background-img position-absolute bottom-0 end-0" />
</div>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		const navLinks = document.querySelectorAll('.nav-pills .nav-link');
		const blogPosts = document.querySelectorAll('.card');
		const carouselNav = document.querySelector('.carousel-nav ul');
		const prevBtn = document.getElementById('prevBtn');
		const nextBtn = document.getElementById('nextBtn');

		let scrollAmount = 0;
		const scrollStep = 100;

		navLinks.forEach(navLink => {
			navLink.addEventListener('click', function(event) {
				event.preventDefault();
				const category = navLink.textContent.trim().toUpperCase();

				navLinks.forEach(link => link.classList.remove('active'));
				navLink.classList.add('active');

				blogPosts.forEach(post => {
					const postCategory = post.querySelector('.text-muted').textContent.trim().toUpperCase();
					if (category === 'SEMUA' || postCategory === category) {
						post.style.display = 'block';
					} else {
						post.style.display = 'none';
					}
				});
			});
		});

		prevBtn.addEventListener('click', function() {
			scrollAmount -= scrollStep;
			if (scrollAmount < 0) scrollAmount = 0;
			carouselNav.scrollTo({
				left: scrollAmount,
				behavior: 'smooth'
			});
		});

		nextBtn.addEventListener('click', function() {
			scrollAmount += scrollStep;
			if (scrollAmount > carouselNav.scrollWidth - carouselNav.clientWidth) {
				scrollAmount = carouselNav.scrollWidth - carouselNav.clientWidth;
			}
			carouselNav.scrollTo({
				left: scrollAmount,
				behavior: 'smooth'
			});
		});
	});
</script>