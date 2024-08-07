<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	body {
		background: radial-gradient(circle at top left, #f1c3ce -10%, #fcf7f2, transparent 55%);
	}

	.brown-stars {
		color: #7A6D65;
		font-size: 24px;
		/* Ukuran font */
		/* Warna coklat */
	}

	.best-seller {
		background-color: white;
		color: #A9576A;
		border: 1px solid #A9576A;
		padding: 4px 8px;
		border-radius: 10px 0 20px 0;
		font-weight: 700;
		font-family: 'Avenir', sans-serif;
		font-size: 12px
	}

	.tab-content {
		margin-top: 20px;
	}

	.thumbnails img {
		width: 125px;
		height: auto;
		max-width: 78px;
		cursor: pointer;
	}

	.thumbnails .active img {
		border: 2px solid #FF4F95;
	}

	.thumbnails {
		display: flex;
		flex-direction: column;
	}

	.thumbnails .col-2 {
		margin-bottom: 50px;
	}

	.center-content {
		display: flex;
		justify-content: center;
	}

	.custom-tab .nav-link {
		/* background-color: white; */
		color: black;
		border-radius: 50px;
	}

	.custom-tab .nav-link.active {
		background-color: #A9576A;
		color: white;
		border-radius: 50px;
	}

	.custom-btn {
		border: 2px solid #7A6D65;
		color: #7A6D65;
		background-color: transparent;
	}

	.custom-btn:hover {
		background-color: #7A6D65;
		color: white;
	}

	.custom-2 {
		background-color: #545454;
		/* Warna latar belakang */
		color: #fff;
		/* Warna teks */
		border: none;
		/* Menghapus border default */
		border-radius: 50px;
		/* Membuat bentuk kapsul */
		border-color: #7a6d65;
		padding: 10px 20px;
		/* Menyesuaikan padding sesuai kebutuhan */
		text-align: center;
		/* Menyelaraskan teks di tengah */
		display: inline-block;
		/* Menjaga ukuran tombol sesuai konten */
		cursor: pointer;
		/* Mengubah kursor saat hover */
		font-size: 0.875rem;
		/* Sesuaikan ukuran font sesuai kebutuhan */
	}

	.custom-2:hover {
		background-color: #434343;
		/* Warna latar belakang saat hover (opsional) */
	}


	.btn-outline-secondary.custom {
		color: rgba(122, 109, 101, 0.5);
		border-color: rgba(122, 109, 101, 0.2);
		border-radius: 50px;
		margin: 5px;
	}

	.btn-outline-secondary.custom-2 {
		color: rgba(122, 109, 101, 0.5);
		border-color: rgba(122, 109, 101, 0.2);
		border-radius: 50px;
		margin: 5px;
	}

	.btn-outline-secondary.custom:hover,
	.btn-outline-secondary.custom:active,
	.btn-outline-secondary.custom:checked {
		color: rgba(122, 109, 101, 0.8);
		border-color: rgba(122, 109, 101, 0.8);
		background-color: rgba(122, 109, 101, 0.1);
	}
</style>

<div style="margin-top: 7rem;">

</div>

<img src="<?= IMAGE_FRONTEND ?>/mask-grey.png" style="z-index: -1; position: absolute; ">

<div class="container">
	<div class="row">
		<div class="col-lg-6 d-flex">
			<div class="thumbnail-sidebar me-3">
				<div class=" thumbnails animatable fadeInUp">
					<div class="col-12 mb-2">
						<img src="<?= IMAGE_FRONTEND ?>/facial-cleaning.png" class="img-fluid" data-bs-target="#productCarousel" data-bs-slide-to="0" alt="Thumbnail 1">
					</div>
					<div class="col-12 mb-2">
						<img src="<?= IMAGE_FRONTEND ?>/beauty2.png" class="img-fluid" data-bs-target="#productCarousel" data-bs-slide-to="1" alt="Thumbnail 2">
					</div>
					<div class="col-12 mb-2">
						<img src="<?= IMAGE_FRONTEND ?>/beauty3.png" class="img-fluid" data-bs-target="#productCarousel" data-bs-slide-to="2" alt="Thumbnail 3">
					</div>
					<div class="col-12 mb-2">
						<img src="<?= IMAGE_FRONTEND ?>/beauty1.png" class="img-fluid" data-bs-target="#productCarousel" data-bs-slide-to="3" alt="Thumbnail 4">
					</div>
					<div class="col-12 mb-2">
						<img src="<?= IMAGE_FRONTEND ?>/beauty2.png" class="img-fluid" data-bs-target="#productCarousel" data-bs-slide-to="4" alt="Thumbnail 5">
					</div>
					<div class="col-12 mb-2">
						<img src="<?= IMAGE_FRONTEND ?>/beauty3.png" class="img-fluid" data-bs-target="#productCarousel" data-bs-slide-to="0" alt="Thumbnail 1">
					</div>
				</div>
			</div>
			<div id="productCarousel" class="carousel slide animatable fadeInUp" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?= IMAGE_FRONTEND ?>/facial-cleaning.png" class="d-block " style="width:450px; height: 530px;" alt="Main Product Image">
					</div>
				</div>

				<div class="d-flex float-end " style="margin-top: 10px;">
					<button class="bg-transparent border-0" type="button" id="prevThumbnail">
						<i class="bi bi-arrow-left" style="color: #545454; font-size: 20px"></i>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="bg-transparent border-0" type="button" id="nextThumbnail">
						<i class="bi bi-arrow-right" style="color: #545454; font-size: 20px"></i>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>

		</div>
		<div class="col-lg-6 animatable fadeInUp">
			<h6 class="text-regular text-uppercase text-grey">Kapas Pembersih</h6>
			<h3 class="pink">VZUU Mild & Deep Cleansing Pad</h3>
			<div class="d-flex align-items-center">
				<div class="rating">
					<span class="brown-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
				</div>
				<span class="ms-2 text-demibold fs-4">5</span><span>/5</span>
				<span class=" best-seller ms-4">BEST SELLER!</span>
			</div>
			<h5 class="text-grey py-2 text-demibold">Rp 479,000.00</h5>
			<p>
			<div class="text-regular">Pembersihan mendalam kami dirancang secara ahli <br>
				untuk menghilangkan makeup dan kotoran harian sambil membuka pori <br>
				dan meningkatkan tekstur kulit tanpa iritasi. Menggabungkan kekuatan pembersih
				dan penghapus makeup, tekstur lembut dari <br> pad ini memecah dan mengangkat makeup dengan mudah.
				</p>
			</div>
			<style>
				.btn-check {
					display: none;
				}

				.btn-ukuran {

					text-decoration: none;
					border-radius: 20px;
					-webkit-border-radius: 20px;
					-moz-border-radius: 20px;
					-ms-border-radius: 20px;
					-o-border-radius: 20px;
					font-size: 14px;
					font-weight: 500;
					color: #7A6D65;
					font-family: 'Avenir', sans-serif;
					padding: 10px 25px;
					cursor: pointer;
					transition: background-color 0.3s ease;
					border: 1px solid transparent;
					display: inline-block;
					text-align: center;
					white-space: nowrap;

					background-color: transparent;
					color: #7A6D65;
					border-color: #7A6D65;
				}

				.btn-ukuran:hover {
					background-color: #7a6d659f;
					color: #fff;
					display: inline-block;
				}

				.btn-check:checked+.btn-ukuran {
					background-color: #7A6D65;
					color: #fff;
					border-color: #7A6D65;
				}
			</style>
			<div class="mb-3">
				<p class="mb-1">Ukuran</p>
				<div class="btn-group" role="group" aria-label="Size selection">
					<input type="radio" class="btn-check" name="size" id="size150" value="150" checked>
					<label class=" btn-ukuran" for="size150">150 gr</label>
				</div>
				<div class="btn-group" role="group" aria-label="Size selection">
					<input type="radio" class="btn-check" name="size" id="size250" value="250">
					<label class=" btn-ukuran" for="size250">250 gr</label>
				</div>
			</div>


			<p class="mb-1">Jumlah</p>
			<div class="input-group input-group-capsule mb-3">
				<button class="btn btn-capsule" type="button">+</button>
				<input type="text" class="form-control input-capsule" value="1">
				<button class="btn btn-capsule" type="button">-</button>
			</div>
			<div class="mt-3">
				<button type="button" class=" mt-3 custom-button-brown text-regular" onclick="checkout(1,1),openCart()">
					<i class="fa-sharp fa-solid fa-bag-shopping me-2"></i> TAMBAH KE KERANJANG
				</button>
				<button type="button" class=" mt-3 custom-button-brown-outline text-regular" onclick="modalMarketplace()">
					<i class="fas fa-store me-2"></i> BELI DI MARKETPLACE
				</button>
			</div>
		</div>
		<hr class="mt-5" style="border-top: 1px solid #ccc;">

		<div class="d-flex justify-content-center align-items-center flex-column animatable fadeInUp">
			<ul class="nav nav-pills custom-tab mt-4" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="benefits-tab" data-bs-toggle="tab" data-bs-target="#benefits" type="button" role="tab" aria-controls="benefits" aria-selected="true">Manfaat Produk</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="ingredients-tab" data-bs-toggle="tab" data-bs-target="#ingredients" type="button" role="tab" aria-controls="ingredients" aria-selected="false">Bahan
						Utama</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="instructions-tab" data-bs-toggle="tab" data-bs-target="#instructions" type="button" role="tab" aria-controls="instructions" aria-selected="false">Petunjuk
						Penggunaan</button>
				</li>
			</ul>

			<div class="tab-content" id="myTabContent" style="margin-top: 30px;">
				<div class="tab-pane fade show active" id="benefits" role="tabpanel" aria-labelledby="benefits-tab">
					<ul>
						<li>Pembersihan Mendalam: Menghilangkan makeup dan kotoran tanpa meninggalkan residu.</li>
						<li>Anti-inflamasi & Anti-mikroba: Membantu mengurangi peradangan dan mencegah pertumbuhan
							mikroba.</li>
						<li>Kaya Antioksidan: Melindungi kulit dari kerusakan lingkungan.</li>
						<li>Melembapkan & Menenangkan: Dilengkapi dengan bahan yang menjaga kulit tetap terhidrasi
							dan tenang.</li>
						<li>Lembut di Kulit: Formula tidak menyebabkan iritasi, cocok untuk kulit sensitif.</li>
					</ul>
				</div>
				<div class="tab-pane fade" id="ingredients" role="tabpanel" aria-labelledby="ingredients-tab">
					<ul>
						<li>PEG-7 Glyceryl Cocoate + Coco-Glucoside: Duo pembersih yang efektif mengangkat makeup
							dan kotoran, menjadikan kulit
							bersih dan segar.</li>
						<li>**Air Kelapa (1%):** Dikenal dengan sifat hidrasi, anti-mikroba, dan anti-inflamasi,
							membantu menjaga keseimbangan
							kelembapan kulit dan mencegah jerawat.</li>
						<li>Kaya Antioksidan: Melindungi kulit dari kerusakan lingkungan.</li>
						<li>Ekstrak Lidah Buaya: Menenangkan dan melembapkan kulit, memberikan manfaat antioksidan.
						</li>
						<li>Sodium Hyaluronate: Mengunci kelembapan, memastikan hidrasi tahan lama dan tekstur kulit
							yang lebih halus.</li>
					</ul>
				</div>
				<div class="tab-pane fade" id="instructions" role="tabpanel" aria-labelledby="instructions-tab">
					<ol>
						<li>Ambil 1-2 Bantalan Pembersih: Keluarkan satu atau dua bantalan dari wadah.</li>
						<li>Aplikasi: Usap atau tepuk lembut bantalan pada wajah, mata, dan bibir untuk
							menghilangkan makeup dan kotoran.</li>
						<li>Tidak Perlu Dibilas: Nikmati kulit yang bersih dan segar tanpa perlu dibilas setelahnya.
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>

<hr class="px-10" style="border-top: 1px solid #ccc;">

<div class="row py-5 position-relative">
	<div class="col-md-6 d-flex align-items-center justify-content-center animatable fadeInUp">
		<img src="<?= IMAGE_FRONTEND ?>/woman.png" class="img-fluid w-50" alt="Image Description">
	</div>

	<div class="position-absolute text-center" style="top:10rem; left:300px">
		<p class=" text-regular mb-0">
			Rasakan Perawatan Kulit Istimewa dengan VZUU <br>Mild & Deep Cleansing Pad.
		</p>
		<div class="animatable fadeInUp" style="margin-top:10rem">
			<img src="<?= IMAGE_FRONTEND ?>/skincare2.png" class="img-fluid w-35" alt="Image Description">
		</div>
	</div>
</div>

<div class="row" style="margin-top: 10rem;">
	<div class="col-md-6 d-flex align-items-center justify-content-center animatable fadeInUp">
		<img src="<?= IMAGE_FRONTEND ?>/skincare.png" class="img-fluid w-25" alt="Image Description">
	</div>
</div>

</div>

<div class="position-relative" style="z-index: -1; bottom: -35rem;">
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class="img-fluid background-img position-absolute bottom-0 end-0" />
</div>

<!-- Modal  MarketPlace -->
<div class="modal fade" id="modalMarketplace" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog" style=" max-width: 600px; ">
		<div class="modal-content" style="background-color: #FCF7F2;">
			<div class="modal-body">
				<button type="button" class="btn-close" style=" position: absolute;
                top: 15px; /* Adjust top positioning */
                right: 15px; " data-bs-dismiss="modal" aria-label="Close"></button>


				<div class="row " style="padding: 20px 100px 20px 100px">
					<h5 class="text-center text-demibold mb-5">Dapatkan Produk Vzuu Beauty di Marketplace Favorit
						Kamu
					</h5>
					<div class="col-md-4 justify-content-center mb-3">
						<div class="bg-transparent d-flex justify-content-center align-items-center rounded-3 p-3" style="border: 1px solid #7A6D65; width: 109px; height: 63px;">
							<a target="_blank" href="https://shopee.co.id/VZUU-Beauty-Paket-Diamond-Paket-Untuk-Semua-Jenis-Kulit-Brightening-Whitening-Glowing-Moisturizing-6-in-1-i.7919233.19106188636?sp_atk=8ee482ac-1d3f-4047-a964-2ed47a398036&xptdk=8ee482ac-1d3f-4047-a964-2ed47a398036">
								<img src="<?= base_url('assets/frontend/') ?>/icon/shopee.png" width="31.24" height="46.19">
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="bg-transparent d-flex justify-content-center align-items-center rounded-3 p-3" style="border: 1px solid #7A6D65; width: 109px; height: 63px;">
							<a target="_blank" href="https://www.tokopedia.com/search?st=shop&q=vzuu%20skincare">
								<img src="<?= base_url('assets/frontend/') ?>/icon/tokped.png" width="51.63" height="44.92">
							</a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="bg-transparent d-flex justify-content-center align-items-center rounded-3 p-3" style="border: 1px solid #7A6D65; width: 109px; height: 63px;">
							<a target="_blank" href="https://www.blibli.com/">
								<img src="<?= base_url('assets/frontend/') ?>/icon/blibli.png" width="67" height="22.33">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="cartModal" class="modal fade custom-modal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="promo-banner">
				<h6 class="text-medium p-3 fs-6" style="font-size: medium;">Hemat 10% bagi pelanggan baru dengan
					kode
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