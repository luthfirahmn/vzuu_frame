<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	body {
		background: radial-gradient(circle at top left, #f1c3ce -10%, #fcf7f2, transparent 55%);
	}

	.custom-images {
		position: absolute;
		left: -20px;
		top: 2rem;
		width: 35%;
		height: 100%;
		z-index: -1;
	}

	.input-group-text {
		border: none;
		background-color: transparent;
	}

	.article-nav {
		color: #545454;
		text-decoration: none;
		cursor: pointer;
	}

	.article-nav:hover {
		color: #A9576A;
		text-decoration: none
	}
</style>

<div class="container blog-content animated fadeInUp">
	<div class="row">
		<div class="col-12">
			<div style="display: flex; justify-content: center; align-items: center;">
				<img src="<?= IMAGE_FRONTEND ?>/photo-detail.png" alt="Main Image" class="img-fluid" style="width: 100%; height: auto; padding-top: 150px; padding-bottom: 10px">
			</div>
			<p class="text-demibold pink">KULIT</p>
			<h4 class="text-demibold">5 Tips Kecantikan Menjelang Hari Pernikahan</h4>
			<p class="text-regular">19 April 2024 - vzuubeauty.bar</p>

			<div id="tulisan-blog text-regular" style="width: 80%; margin: 0 auto; display: flex; flex-direction: column; justify-content: center; align-items: center;">
				<p style="padding-top:30px">Menjelang hari pernikahan, memang semakin banyak persiapan yang harus dilakukan.
					Tapi, jangan lupa melakukan perawatan kecantikan. Mau, kan, tampil sempurna di hari H nanti?</p>
				<p>Ada berbagai perawatan kecantikan yang bisa Anda lakukan sendiri di rumah, tanpa perlu pergi ke salon
					langganan. Bahkan, bisa Anda jalani sejak sekarang.</p>
				<img src="<?= IMAGE_FRONTEND ?>/photo-detail-1.png" alt="Sub Image" class="img-fluid my-3 rounded-3">
				<ol class="px-3 text-demibold">
					<li>
						<h6 class="text-bold text-grey">Lebih rajin minum air putih</h6>
						<p class="text-regular">Kesibukan terkadang membuat anda melupakan untuk meminum air putih, jangan
							sepelekan hal satu ini. Air
							putih bisa menghindari kulit kering, bibir pecah-pecah, dan juga menjaga kelembapan wajah. Jadi, selalu
							bawa botol berisi air putih di dalam tas anda.</p>
					</li>
					<li>
						<h6 class="text-bold text-grey">Kompres wajah dengan es batu</h6>
						<p class="text-regular">Metode kecantikan ini bisa membantu mengecilkan pori-pori penyebab wajah
							berjerawat, mengempeskan
							jerawat, dan bisa membuat makeup jadi tahan lama. Nah, menjelang hari pernikahan nanti, mulai rajin
							mengompres wajah dengan es batu di rumah supaya kulit wajah lebih sehat dan segar.</p>
					</li>
					<li>
						<h6 class="text-bold text-grey">Masker dan scrub wajah</h6>
						<p class="text-regular">Buat Anda yang berjerawat, tidak disarankan untuk melakukan scrubbing karena bisa
							membuat wajah semakin
							berjerawat. Lebih baik, gunakan masker wajah untuk memberikan perawatan alami pada wajah. Jadi, ketika
							memakai makeup seharian di hari pernikahan nanti, kulit wajah Anda bisa tetap sehat.</p>
					</li>
					<li>
						<h6 class="text-bold text-grey">Masker rambut</h6>
						<p class="text-regular">Selaim perawatan wajah dan kulit tubuh, rambut juga perlu dijaga. Gunakan masker
							rambut untuk membuat
							rambut tetap berkilau dan menawan.</p>
					</li>
					<li>
						<h6 class="text-bold text-grey">Rajin memakai olive oil</h6>
						<p class="text-regular">Minyak satu ini bisa digunakan dari ujung rambut sampai ujung kaki. Minyak zaitun
							mengandung lemak,
							vitamin E, vitamin K, dan sedikit sekali zat besi. Jadi, cukup baik digunakan untuk perawatan kulit.
							Pada wajah, Anda bisa menggunakan minyak zaitun sebagai tambahan masker atau facial. Sedangkan untuk
							kulit tubuh, cukup oleskan minyak zaitun secara merata, dan untuk rambut, cukup pakaikan pada
							ujung-ujung rambut, terutama pada bagian yang kering.</p>
					</li>
				</ol>
				<p class="px-3 text-regular">Bila Anda rajin melakukan beberapa perawatan di atas, tentu Anda akan terlihat
					semakin cantik
					dan menawan
					di hari pernikahan nanti.</p>
			</div>

		</div>
	</div>
</div>

<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey.png" class="custom-images">

<div class="container text-center my-4">
	<div class="d-flex justify-content-center align-items-baseline" style="color: #7A6D65;">
		<h6 class="me-3 text-brown">BAGIKAN</h6>
		<button class="custom-button-brown-rounded-transparent border-0 "><i class="bi bi-whatsapp text-brown"></i></button>
		<button class="custom-button-brown-rounded-transparent border-0"><i class="bi bi-facebook text-brown"></i></button>
		<button class="custom-button-brown-rounded-transparent border-0"><i class="bi bi-twitter text-brown"></i></button>
	</div>

	<div class="separator my-4" style="width: 80%; margin: 0 auto;">
		<hr style="border-top: 1px solid #ccc;">
		<div class="d-flex justify-content-between align-items-center px-3">
			<a class="d-flex align-items-center text-demibold article-nav" href="<?= base_url('blog/detail') ?>">
				<i class="fa-solid fa-arrow-left me-1"></i>
				<span>Artikel Terbaru</span>
			</a>
			<a class="d-flex align-items-center text-demibold article-nav" href="<?= base_url('blog/detail') ?>">
				<span>Artikel Sebelumnya</span><i class="fa-solid fa-arrow-right ms-1"></i>
			</a>
		</div>
	</div>

</div>

<!-- Related Blogs -->
<div class="container related-blogs py-5" style="margin-top: 5rem;">
	<div class="text-center pt-2">
		<h6 class="mb-3 text-regular">BLOG LAIN</h6>
		<h3 class="mb-4 pink text-demibold">Anda Mungkin Menyukai Ini</h3>
	</div>
	<div class="row">
		<div class="col-md-4 mb-4">
			<div class="card bg-transparent border-0 border-0">
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
		<div class="col-md-4 mb-4">
			<div class="card bg-transparent border-0">
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
		<div class="col-md-4 mb-4">
			<div class="card bg-transparent border-0">
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
	</div>
</div>

</div>

<div class="position-relative" style="z-index: -1; bottom: -35rem;">
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class="img-fluid background-img position-absolute bottom-0 end-0" />
</div>