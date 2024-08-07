<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	.product-section .product {
		margin-bottom: 50px;
	}

	.instagram img {
		height: 300px;
	}

	.beli-langsung {
		background-color: #7A6D65;
		border: 2px solid #7A6D65;
		border-radius: 50px;
		padding-left: 20px;
		padding-right: 20px;
		text-transform: uppercase;
		color: white;
		padding: 10px 20px;
		font-weight: regular;
	}

	.beli-langsung i {
		margin-right: 8px;
		color: white;
	}

	.lebih-detail {
		background-color: transparent;
		border: 2px solid #6c757d;
		border-radius: 50px;
		padding-left: 20px;
		padding-right: 20px;
		text-transform: uppercase;
		color: #6c757d;
		padding: 10px 20px;
		font-weight: regular;
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
		top: 1rem;
		width: 35%;
		height: 100%;
		z-index: -1;
	}

	.input-group-capsule {
		width: 100px;
		/* Sesuaikan lebar sesuai kebutuhan */
		border: 1px solid #ccc;
		/* Menambahkan border luar */
		border-radius: 50px;
		/* Membuat bentuk kapsul */
		overflow: hidden;
		/* Menghilangkan border dalam */
	}

	.btn-capsule,
	.input-capsule {
		height: 30px;
		/* Sesuaikan tinggi sesuai kebutuhan */
		border-radius: 0;
		/* Membuat bentuk kapsul */
		border: none;
		/* Menghilangkan border */

	}

	.btn-capsule:first-child {
		border-top-right-radius: 0;
		border-bottom-right-radius: 0;
	}

	.input-capsule {
		text-align: center;
		/* Menyelaraskan teks di tengah */
		border-left: none;
		/* Menghapus border kiri */
		border-right: none;
		/* Menghapus border kanan */
		border-radius: 0;
		/* Menghapus border radius pada input */
		background-color: #FCF7F2;
	}

	.btn-capsule:last-child {
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
	}

	.btn-capsule {
		background-color: #FCF7F2;
		/* Ganti dengan warna latar belakang yang diinginkan */
		color: #000;
		/* Ganti dengan warna teks yang diinginkan */
		padding: 0 10px;
		/* Menyesuaikan padding */
	}
</style>

<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey.png" class="custom-images">

<div style="margin:7rem 0 50px 0"></div>

<div id="search-result">

</div>
<div id="main-section">

	<section class="hero container-fluid  text-center">
		<div class="text-center pb-4 animatable fadeInUp">
			<h6 class="mb-2 text-regular">Vzuu Beauty</h6>
			<h3 class="mb-1 pink text-demibold">
				Tingkatkan Ritual Kecantikan Anda
			</h3>
		</div>

		<div id="carouselExampleControls" class="carousel slide animatable fadeInUp" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<ul class="nav nav-pills justify-content-center mb-2">
						<li class="nav-item">
							<a class="nav-link text-demibold active" href="javascript:void(0);">Semua</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-demibold" href="javascript:void(0);">Pembersih</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-demibold" href="javascript:void(0);">Pelembab</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-demibold" href="javascript:void(0);">Serum</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-demibold" href="javascript:void(0);">Toner</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-demibold" href="javascript:void(0);">Tabir Surya</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-demibold" href="javascript:void(0);">Mata</a>
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
	</section>

	<!-- Main Content -->
	<section class="product-section py-3" style="margin-top: 5rem;">
		<div class="container text-center">
			<div class="product row align-items-center mb-5">
				<div class="col-md-6 animatable fadeInUp image-bouncing">
					<img src="<?= IMAGE_FRONTEND ?>/627.png" class="img-fluid" width="500" alt="Product 1">
				</div>
				<div class="col-md-6 text-md-start text-center animatable fadeInUp" data-title="VZUU Mild & Deep Cleansing Pad">
					<h6>KAPAS PEMBERSIH</h6>
					<h3 class="pink text-demibold mb-2">VZUU Mild & Deep Cleansing Pad</h3>
					<h6 class="text-regular mb-4">Pad pembersih mendalam kami dirancang secara ahli untuk menghilangkan makeup
						dan
						kotoran harian sambil
						membuka pori-pori dan meningkatkan tekstur kulit tanpa iritasi.</h6>
					<h6 class="text-brown">Rp 479.000,00</h6>
					<div class="d-flex justify-content-start mt-5">
						<div class="d-flex justify-content-start">
							<div class="me-2">
								<button type="button" class="custom-button-brown" onclick="beli_langung(1,1)">
									<i class="fas fa-shopping-bag me-1"></i> BELI LANGSUNG
								</button>
							</div>
							<div>
								<a type="button" href="<?= base_url('product/detail') ?>" class="custom-button-brown-outline">LEBIH DETAIL</a>
							</div>
						</div>
					</div>
				</div>

				<div class="product row align-items-center mb-5 animatable fadeInUp">
					<div class="col-md-6 order-md-2 image-bouncing">
						<img src="<?= IMAGE_FRONTEND ?>/628.png" class="img-fluid" width="500" alt="Product 2">
					</div>
					<div class="col-md-6 text-md-start text-center">
						<h6>KAPAS PEMBERSIH</h6>
						<h3 class="text-blue text-demibold mb-2">Hydrating & Soothing</h3>
						<h6 class="text-regular mb-4">Pad pembersih mendalam kami dirancang secara ahli untuk menghilangkan makeup
							dan kotoran harian sambil membuka pori-pori dan meningkatkan tekstur kulit tanpa iritasi.</h6>
						<h6> <span class="text-brown opacity-50 me-3"><s>Rp 479.000,00</s></span><span class="text-pink-tua">Rp
								429.000,00</span>
						</h6>
						<div class="d-flex justify-content-start mt-5">
							<div class="d-flex justify-content-start">
								<div class="me-2">
									<button type="button" class="custom-button-brown" onclick="beli_langung(2,1)">
										<i class="fas fa-shopping-bag me-1"></i> BELI LANGSUNG
									</button>
								</div>
								<div>
									<a type="button" href="<?= base_url('product/detail') ?>" class="custom-button-brown-outline">LEBIH DETAIL</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="product row align-items-center mb-5 animatable fadeInUp">
					<div class="col-md-6 image-bouncing">
						<img src="<?= IMAGE_FRONTEND ?>/629.png" class="img-fluid" width="500" alt="Product 3">
					</div>
					<div class="col-md-6 text-md-start text-center">
						<h6>KAPAS PEMBERSIH</h6>
						<h3 class="text-green text-demibold mb-2">Anti-Oxidant</h3>
						<h6 class="text-regular mb-4">Pad pembersih mendalam kami dirancang secara ahli untuk menghilangkan makeup
							dan kotoran harian sambil membuka pori-pori dan meningkatkan tekstur kulit tanpa iritasi.</h6>

						<h6 class="text-brown">Rp 479.000,00</h6>
						<div class="d-flex justify-content-start mt-5">
							<div class="d-flex justify-content-start">
								<div class="me-2">
									<button type="button" class="custom-button-brown" onclick="beli_langung(3,1)">
										<i class="fas fa-shopping-bag me-1"></i> BELI LANGSUNG
									</button>
								</div>
								<div>
									<a type="button" href="<?= base_url('product/detail') ?>" class="custom-button-brown-outline">LEBIH DETAIL</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<!-- Instagram Section -->
	<section class="instagram py-5 ">
		<div class=" text-center w-100">
			<h6 class="text-regular ">IKUTI KAMI DI INSTAGRAM</h6>
			<a href="https://www.instagram.com/vzuubeauty" target="_blank" style="text-decoration: none;">
				<h3 class="mb-4 text-demibold pink">@vzuubeauty</h3>
			</a>
			<div class="row d-flex justify-content-center">
				<div class="col p-0">
					<img src="<?= IMAGE_FRONTEND ?>/beauty1.png" class="img-fluid w-100" alt="Instagram Image">
				</div>
				<div class="col p-0">
					<img src="<?= IMAGE_FRONTEND ?>/beauty2.png" class="img-fluid w-100" alt="Instagram Image">
				</div>
				<div class="col p-0">
					<img src="<?= IMAGE_FRONTEND ?>/beauty3.png" class="img-fluid w-100" alt="Instagram Image">
				</div>
				<div class="col p-0">
					<img src="<?= IMAGE_FRONTEND ?>/beauty4.png" class="img-fluid w-100" alt="Instagram Image">
				</div>
				<div class="col p-0">
					<img src="<?= IMAGE_FRONTEND ?>/beauty5.png" class="img-fluid w-100" alt="Instagram Image">
				</div>
			</div>
		</div>
	</section>

</div>

<div class="position-relative" style="z-index: -1; bottom: -35rem;">
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class="img-fluid background-img position-absolute bottom-0 end-0" />
</div>

<div id="cartModal" class="modal fade custom-modal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="promo-banner">
				<h6 class="text-medium p-3 fs-6" style="font-size: medium;">Hemat 10% bagi pelanggan baru dengan kode
					WELCOME10</h6>
			</div>
			<div class="modal-body">
				<button type="button" class="btn-close" style="position: absolute; top: 15px; right: 15px;" data-bs-dismiss="modal" aria-label="Close"></button>
				<h6 class="mb-4"><span class="fs-5 text-demibold text-grey">Keranjang</span> <span class="fs-6 text-medium text-grey" id="cart-items-count">(0 items)</span></h6>
				<div id="cart-items-container">
				</div>
				<hr>
				<div class="suggestions mt-4">
					<h5 class="text-regular text-grey">LENGKAPI RITUAL KECANTIKAN ANDA</h5>
					<div class="d-flex align-items-center justify-content-center mt-3">
						<img src="<?= IMAGE_FRONTEND ?>/172.png" alt="Suggested Product">
						<div class="ms-3 w-75">
							<h6 class="text-grey text-demibold">Mild & Deep Cleansing Pad</h6>
							<p class="text-brown text-demibold">Rp 479.000,00</p>
						</div>
						<button class="ms-auto custom-button-brown" onclick="checkout(1,1)">TAMBAH</button>
					</div>
				</div>
			</div>
			<div class="modal-footer justify-content-center text-center">
				<a href="./checkout.html" type="button" class="custom-button-brown text-regular w-100" style="padding: 10px 40px 10px 40px;" id="checkout-button"></a>
			</div>
		</div>
	</div>
</div>