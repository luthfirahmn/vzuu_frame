<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	body {
		background: radial-gradient(circle at top left, #f1c3ce -10%, #fcf7f2, transparent 50%);
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

	.card {
		border: none;
	}

	.card-img-top {
		/* width: 334px; */
		height: 334px;
		object-fit: cover;
	}

	.email-input {
		padding-right: 2.5rem;
	}

	.carousel-inner .nav-link {
		border-radius: 20px;
		color: #545454;
	}

	.carousel-inner .nav-link.active {
		color: white;
		background-color: #a9576a;

	}

	.custom-images {
		position: absolute;
		left: -20px;
		top: 2rem;
		width: 35%;
		height: 100%;
		z-index: -1;
	}

	.faq-section .card {
		background-color: transparent;
	}


	.faq-section .card-body:hover {
		background-color: #7A6D65;
		border-radius: 0 0 6px 6px;
		transition: background-color 0.3s ease, border-radius 0.3s ease;
		color: #fff;
	}

	.faq-section a {
		font-weight: 500;
		font-size: 20px;
		cursor: pointer;
		text-decoration: none;
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

<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey.png" class="custom-images">

<div class="container" style="margin-top: 100px;">
	<div class="text-center pt-5">
		<h6 class="mb-2 animatable fadeInUp">Kecantikan Dimulai Di Sini</h6>
		<h3 class="mb-4 pink text-demibold animatable fadeInUp">Perawatan Klinik Vzuu</h3>


		<div id="carousel1" class="carousel slide mt-5 animatable bounceInRight " style="width: 100%;" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">

					<img src="<?= IMAGE_FRONTEND ?>/iklan.png" class="card-img-top small-img mb-4" style="margin-bottom: 20px;width: 100%;height: 100%;" />

				</div>

				<div class="carousel-item">
					<img src="<?= IMAGE_FRONTEND ?>/iklan.png" class="card-img-top small-img mb-4" style="margin-bottom: 20px;width: 100%;height: 100%;" />

				</div>
			</div>

			<div class="d-flex float-end ">
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

		<form class="d-flex justify-content-center mb-4" style="margin-top: 3rem;">
			<div class="input-group" style="max-width: 600px; border: 1px solid #ccc; border-radius: 50px; overflow: hidden; z-index: 10;background-color: white;">
				<span class="input-group-text bg-transparent">
					<i class="fa-solid fa-magnifying-glass"></i>
				</span>
				<input type="text" class="form-control rounded-end" placeholder="Cari artikel" aria-label="Search" aria-describedby="button-addon2" />
			</div>
		</form>
	</div>
</div>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<ul class="nav nav-pills justify-content-center mb-2">
				<li class="nav-item">
					<a class="nav-link text-demibold active" href="javascript:void(0);">Semua</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-demibold" href="javascript:void(0);">Paket 1</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-demibold" href="javascript:void(0);">Paket 2</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-demibold" href="javascript:void(0);">Paket 3</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-demibold" href="javascript:void(0);">Wajah</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-demibold" href="javascript:void(0);">Suntik</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-demibold" href="javascript:void(0);">Tubuh</a>
				</li>
			</ul>
		</div>
	</div>

	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>
<!-- Treatment Cards -->
<section class="faq-section container py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-4 custom-card animatable fadeInUp">
				<div class="card ">
					<img src="<?= IMAGE_FRONTEND ?>/item2.png" class="card-img-top small-img " alt="Special Vzuu Package" />
					<a class="card-body " href="<?= base_url('perawatan/detail') ?>">
						<h5 class="card-title">Special Vzuu Package <i class="fa fa-arrow-right float-end"></i></h5>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4 custom-card animatable fadeInUp">
				<div class="card ">
					<img src="<?= IMAGE_FRONTEND ?>/item3.png" class="card-img-top small-img " alt="Special Vzuu Package" />
					<a class="card-body " href="<?= base_url('perawatan/detail') ?>">
						<h5 class="card-title">Special Vzuu Package <i class="fa fa-arrow-right float-end"></i></h5>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4 custom-card animatable fadeInUp">
				<div class="card ">
					<img src="<?= IMAGE_FRONTEND ?>/item1.png" class="card-img-top small-img " alt="Special Vzuu Package" />
					<a class="card-body " href="<?= base_url('perawatan/detail') ?>">
						<h5 class="card-title">Special Vzuu Package <i class="fa fa-arrow-right float-end"></i></h5>
					</a>
				</div>
			</div>


			<div class="col-md-4 mb-4 custom-card animatable fadeInUp">
				<div class="card ">
					<img src="<?= IMAGE_FRONTEND ?>/item5.png" class="card-img-top small-img " alt="Special Vzuu Package" />
					<a class="card-body " href="<?= base_url('perawatan/detail') ?>">
						<h5 class="card-title">Special Vzuu Package <i class="fa fa-arrow-right float-end"></i></h5>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4 custom-card animatable fadeInUp">
				<div class="card ">
					<img src="<?= IMAGE_FRONTEND ?>/item3.png" class="card-img-top small-img " alt="Special Vzuu Package" />
					<a class="card-body " href="<?= base_url('perawatan/detail') ?>">
						<h5 class="card-title">Special Vzuu Package <i class="fa fa-arrow-right float-end"></i></h5>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4 custom-card animatable fadeInUp">
				<div class="card ">
					<img src="<?= IMAGE_FRONTEND ?>/item1.png" class="card-img-top small-img " alt="Special Vzuu Package" />
					<a class="card-body " href="<?= base_url('perawatan/detail') ?>">
						<h5 class="card-title">Special Vzuu Package <i class="fa fa-arrow-right float-end"></i></h5>
					</a>
				</div>
			</div>


			<div class="col-md-4 mb-4 custom-card animatable fadeInUp">
				<div class="card ">
					<img src="<?= IMAGE_FRONTEND ?>/item5.png" class="card-img-top small-img " alt="Special Vzuu Package" />
					<a class="card-body " href="<?= base_url('perawatan/detail') ?>">
						<h5 class="card-title">Special Vzuu Package <i class="fa fa-arrow-right float-end"></i></h5>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4 custom-card animatable fadeInUp">
				<div class="card ">
					<img src="<?= IMAGE_FRONTEND ?>/item3.png" class="card-img-top small-img " alt="Special Vzuu Package" />
					<a class="card-body " href="<?= base_url('perawatan/detail') ?>">
						<h5 class="card-title">Special Vzuu Package <i class="fa fa-arrow-right float-end"></i></h5>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4 custom-card animatable fadeInUp">
				<div class="card ">
					<img src="<?= IMAGE_FRONTEND ?>/item1.png" class="card-img-top small-img " alt="Special Vzuu Package" />
					<a class="card-body " href="<?= base_url('perawatan/detail') ?>">
						<h5 class="card-title">Special Vzuu Package <i class="fa fa-arrow-right float-end"></i></h5>
					</a>
				</div>
			</div>

		</div>
	</div>
</section>

<div class="position-relative" style="z-index: -1; bottom: -35rem;">
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class="img-fluid background-img position-absolute bottom-0 end-0" />
</div>