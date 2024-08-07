<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	body {
		background: radial-gradient(circle at top left, #f1c3ce -10%, #fcf7f2, transparent 50%);
	}

	.custom-images {
		position: absolute;
		left: -20px;
		top: 2rem;
		width: 35%;
		height: 100%;
		z-index: -1;
	}
</style>

<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey.png" class="custom-images">

<section class="container my-5">
	<div class="text-center pt-5">
		<h6 class="mb-1 text-regular">WAJAH</h6>
		<h3 class="mb-4 pink text-demibold">
			Super Facial Oxygeneo 5 in 1
		</h3>
		<button class="btn btn-primary rounded-5 px-4 text-demibold " style="background-color: #A9576A; color:#fff; outline: none; border: none; font-size: 12px;">
			<i class="fas fa-clock" style="color: #fff; margin-right: 5px;"></i> PERAWATAN 2 JAM
		</button>

	</div>
</section>

<div class="container my-5">
	<div id="carousel1" class="carousel slide mt-5 animatable bounceInRight mb-5 " style="width: 100%;" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="row justify-content-center ">
					<div class=" col-lg-4">
						<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
							<img src="<?= IMAGE_FRONTEND ?>/facial3.png" class="card-img-top object-fit-cover" width="100%" style="max-height: 20rem; border-radius: 10px;" height="100%" alt="Clinic Image" />

						</div>
					</div>
					<div class="col-lg-4">
						<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
							<img src="<?= IMAGE_FRONTEND ?>/facial2.png" style="max-height: 20rem; border-radius: 10px;" class="card-img-top" alt="Beauty Image" />

						</div>
					</div>
					<div class="col-lg-4">
						<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
							<img src="<?= IMAGE_FRONTEND ?>/facial1.png" style="max-height: 20rem; border-radius: 10px;" class="card-img-top" alt="Beauty Image" />

						</div>
					</div>


				</div>
			</div>

			<div class="carousel-item">
				<div class="row justify-content-center ">
					<div class=" col-lg-4 ">
						<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
							<img src="<?= IMAGE_FRONTEND ?>/facial1.png" class="card-img-top object-fit-cover" width="100%" style="max-height: 20rem;" height="100%" alt="Clinic Image" />

						</div>
					</div>
					<div class="col-lg-4 ">
						<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
							<img src="<?= IMAGE_FRONTEND ?>/facial2.png" style="max-height: 20rem;" class="card-img-top" alt="Beauty Image" />

						</div>
					</div>
					<div class="col-lg-4 ">
						<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
							<img src="<?= IMAGE_FRONTEND ?>/facial3.png" style="max-height: 20rem;" class="card-img-top" alt="Beauty Image" />

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="d-flex float-end " style="margin-right: 30px; margin-top: 10px;">
			<button class="bg-transparent border-0" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
				<i class="bi bi-arrow-left" style="color: #545454; font-size: 20px"></i>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="bg-transparent border-0" type="button" data-bs-target="#carousel1" data-bs-slide="next">
				<i class="bi bi-arrow-right" style="color: #545454; font-size: 20px"></i>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

	</div>

	<div class="row my-4 animatable fadeInUp">
		<div class="col" style="text-align: center;">
			<p class="text-regular">
				Super Facial ini menggunakan mesin Eropa yang mencerahkan kulit,
				menetralkan pH wajah yang berlebihan, mengangkat sel kulit mati, dan
				merangsang produksi kolagen.
			</p>
			<h6>Langkah-langkah dalam Facial Oxygeno 5 in 1:</h6>
			<ol class="text-regular" style="display: inline-block; text-align: center; line-height: 40px;">
				1. Detoks Wajah - Membersihkan kotoran secara menyeluruh dari lapisan
				kulit terdalam dan epidermis. <br>
				2. Radio Frekuensi (RF) - Mengurangi kerutan-kerutan halus dan
				mengencangkan kulit wajah yang kendur. <br>
				3. Microdermabrasi - Mengangkat sel-sel kulit mati. <br>
				4. Ultrasonik - Menginfus serum ke dalam lapisan kulit terdalam. <br>
				5. Terapi Pijat Lampu LED - Merileksasi kulit wajah. <br>
			</ol>
		</div>
	</div>

	<section class="awards container my-5">
		<div class="row animatable fadeInUp">
			<div class="col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="<?= IMAGE_FRONTEND ?>/award1.png" class="img-fluid" alt="Award 1" />
			</div>
			<div class="col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="<?= IMAGE_FRONTEND ?>/award1.png" class="img-fluid" alt="Award 2" />
			</div>
			<div class="col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="<?= IMAGE_FRONTEND ?>/award2.png" class="img-fluid" alt="Award 3" />
			</div>
			<div class="col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="<?= IMAGE_FRONTEND ?>/award3.png" class="img-fluid" alt="Award 4" />
			</div>
			<div class="col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="<?= IMAGE_FRONTEND ?>/award4.png" class="img-fluid" alt="Award 5" />
			</div>
			<div class="col-md-2 col-sm-4 col-6 mb-4 text-center">
				<img src="<?= IMAGE_FRONTEND ?>/award5.png" class="img-fluid" alt="Award 6" />
			</div>
		</div>
	</section>

	<div class="row my-4 text-center">
		<div class="col">
			<a href="https://www.whatsapp.com/" target="_blank" class="btn mt-3 px-4" style="border-radius: 25px;background-color: #A9576A; color:white">
				RESERVASI
			</a>
		</div>
	</div>

	<style>
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
	<div class="separator my-4" style="width: 80%; margin: 0 auto;">
		<hr style="border-top: 1px solid #ccc;">
		<div class="d-flex justify-content-between align-items-center px-3">
			<a class="d-flex align-items-center text-demibold article-nav" href="<?= base_url('perawatan/detail') ?>">
				<i class="fa-solid fa-arrow-left me-1"></i>
				<span>Special Vzuu Package</span>
			</a>
			<a class="d-flex align-items-center text-demibold article-nav" href="<?= base_url('perawatan/detail') ?>">
				<span>Voluderm by Pollogen</span><i class="fa-solid fa-arrow-right ms-1"></i>
			</a>
		</div>
	</div>
</div>

<div class="position-relative" style="z-index: -1; bottom: -32rem;">
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class="img-fluid background-img position-absolute bottom-0 end-0" />
</div>