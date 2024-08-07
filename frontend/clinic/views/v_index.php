<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	body {
		background: radial-gradient(circle at top left, #f1c3ce -5%, #fcf7f2, transparent 30%);
	}

	.clinic-info {
		text-align: left;
	}

	.clinic-info h5 {
		color: #b01234;
		font-weight: bold;
	}

	.clinic-info p {
		margin: 0;
	}

	.bg-image {
		background-image: url('<?= IMAGE_FRONTEND ?>/bg.png');
		background-size: cover;
		background-position: center;
		color: #fff;
		border: 0;
		height: 32rem;
	}

	.custom-images {
		position: absolute;
		left: -20px;
		top: 2rem;
		width: 35%;
		height: 100%;
		z-index: -1;
	}

	.instagram img {
		height: 300px;
	}

	.justify-text {
		text-align: justify;
	}

	.clinic-info p {
		text-align: justify;
	}
</style>

<div style="margin-top: 2rem;">
</div>

<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey.png" class="custom-images">

<section id="tentang-vzuu" class="hero container-fluid py-5 ">
	<div class="container text-center">
		<div class="align-items-center">
			<div>
				<div class="text-center pt-5">
					<h6 class="mb-3">Kecantikan Dimulai Di Sini</h6>
					<h3 class="mb-4 pink text-demibold">Tentang Klinik Vzuu</h3>
				</div>

				<div id="carousel1" class="carousel slide mt-5 animatable bounceInRight " style="width: 100%;" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row justify-content-center">

								<div class="col-lg-4">
									<div class="card bg-transparent border-0 position-relative" style="width: 23rem; height: 20rem;">
										<img src="<?= IMAGE_FRONTEND ?>/klinik3.png" class="card-img-top object-fit-cover" width="100%" style="max-height: 20rem; border-radius: 5px;" height="100%" alt="Clinic Image" />
									</div>
								</div>

								<div class="col-lg-4">
									<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
										<img src="<?= IMAGE_FRONTEND ?>/klinik2.png" style="max-height: 20rem; border-radius: 5px;" height="100%" class="card-img-top" alt="Beauty Image" />

									</div>
								</div>
								<div class="col-lg-4">
									<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
										<img src="<?= IMAGE_FRONTEND ?>/klinik1.png" style="max-height: 20rem; border-radius: 5px;" height="100%" class="card-img-top" alt="Beauty Image" />

									</div>
								</div>


							</div>
						</div>

						<div class="carousel-item">
							<div class="row justify-content-center ">
								<div class=" col-lg-4 ">
									<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
										<img src="<?= IMAGE_FRONTEND ?>/klinik1.png" class="card-img-top object-fit-cover" width="100%" style="max-height: 20rem;" height="100%" alt="Clinic Image" />

									</div>
								</div>
								<div class="col-lg-4 ">
									<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
										<img src="<?= IMAGE_FRONTEND ?>/klinik2.png" style="max-height: 20rem;" class="card-img-top" alt="Beauty Image" />

									</div>
								</div>
								<div class="col-lg-4 ">
									<div class="card bg-transparent border-0 position-relative rounded-5" style="width: 23rem; height: 20rem;">
										<img src="<?= IMAGE_FRONTEND ?>/klinik3.png" style="max-height: 20rem;" class="card-img-top" alt="Beauty Image" />

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

				<div class="container text-center animatable fadeInUp p-10">
					<div class="justify-content-center">
						<p class="fs-6 text-regular mt-5">
							Vzuu Clinic hadir dengan menyadari kebutuhan untuk memberikan perawatan estetika yang inovatif dan
							profesional. Sesuai
							dengan kebutuhan pasien untuk memiliki kulit wajah sehat bercahaya dan tubuh yang proporsional.
							Dengan menggunakan mesin-mesin berstandar Eropa dan USA yang sudah tersertifikasi oleh FDA, dan
							Kementerian Kesehatan
							Indonesia. Kami pastikan pasien akan mendapatkan perawatan dengan kualitas terbaik di Klinik Vzuu.
						</p>

						<p class="fs-6 text-regular">
							Tim dokter spesialis estetika dan kecantikan kami telah dipilih secara profesional,
							baik dari pengetahuan dan pengalaman mereka, yang terpenting, kami adalah orang-orang
							yang mencintai apa yang kami lakukan di Klinik Vzuu.
						</p>

						<div class="row justify-content-center mt-5">
							<div class="col-md-4 clinic-info mb-4 ps-5">
								<h5 class="fw-bold">Klinik Utama</h5>
								<p>Vzuu Clinic Aesthetic Center</p>
								<p>Ruko Mendrisio Blok B No 2</p>
								<p>Gading Serpong - Tangerang</p>
								<p class="mt-3"><img src="<?= IMAGE_FRONTEND ?>/call-calling.png" alt="Phone icon" class="me-2" style="width: 16px; height: 16px;">+62 21 2222 4665</p>
								<p class="mt-3"><img src="<?= IMAGE_FRONTEND ?>/clock.png" alt="Phone icon" class="me-2" style="width: 16px; height: 16px;">10 am to 6 pm</p>
							</div>
							<div class="col-md-4 clinic-info mb-4 ps-5">
								<h5 class="fw-bold">Klinik 2</h5>
								<p>Vzuu Clinic Aesthetic Center</p>
								<p>Ruko Mendrisio Blok B No 2</p>
								<p>Gading Serpong - Tangerang</p>
								<p class="mt-3"><img src="<?= IMAGE_FRONTEND ?>/call-calling.png" alt="Phone icon" class="me-2" style="width: 16px; height: 16px;">+62 21 2222 4665</p>
								<p class="mt-3"><img src="<?= IMAGE_FRONTEND ?>/clock.png" alt="Phone icon" class="me-2" style="width: 16px; height: 16px;">10 am to 6 pm</p>
							</div>
							<div class="col-md-4 clinic-info mb-4 ps-5">
								<h5 class="fw-bold">Klinik 3</h5>
								<p>Vzuu Clinic Aesthetic Center</p>
								<p>Ruko Mendrisio Blok B No 2</p>
								<p>Gading Serpong - Tangerang</p>
								<p class="mt-3"><img src="<?= IMAGE_FRONTEND ?>/call-calling.png" alt="Phone icon" class="me-2" style="width: 16px; height: 16px;">+62 21 2222 4665</p>
								<p class="mt-3"><img src="<?= IMAGE_FRONTEND ?>/clock.png" alt="Phone icon" class="me-2" style="width: 16px; height: 16px;">10 am to 6 pm</p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>



	<div class="d-flex justify-content-center" style="margin-top: 5rem;">
		<a href="https://www.whatsapp.com/" target="_blank" class="btn mt-3 px-4" style="border-radius: 25px;background-color: #A9576A; color:white">
			RESERVASI
		</a>
	</div>
</section>

<img src="<?= IMAGE_FRONTEND ?>/mask-group.png" class="card-img-top img-fluid rounded-5" style="padding: 50px;" alt="fotogroup">

<section class="services my-5 rounded-3 " style="margin: 50px;background: radial-gradient(circle at top left, #f1c3ce -20%, #fcf7f2, transparent 60%),
        linear-gradient(to top, #F1D0B6 -10%, #fcf7f2, transparent 70%);">
	<div id="carousel5" class="carousel slide mt-5 animatable bounceInRight " style="width: 100%;" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="row ">
					<div class="col-md-5 mb-4 mb-md-0 p-5 mt-4 position-relative">
						<h6 class="mb-2 text-regular ">MENGAPA VZUU CLINIC</h6>
						<h4 class="pink text-demibold">Mesin-Mesin <br> Kecantikan Lanjutan</h4>
						<p class="fs-6 text-regular">
							Dengan menggunakan mesin-mesin standar <br>
							Eropa dan Amerika Serikat yang diawasi oleh FDA, <br>
							Kami memastikan bahwa pasien menerima <br>
							perawatan berkualitas terbaik di Klinik Vzuu.
						</p>

						<div class="position-absolute bottom-0 start-0 end-0 d-flex  justify-content-end p-3">
							<button class="bg-transparent border-0" type="button" data-bs-target="#carousel5" data-bs-slide="prev">
								<i class="bi bi-arrow-left" style="color: #545454; font-size: 20px"></i>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="bg-transparent border-0" type="button" data-bs-target="#carousel5" data-bs-slide="next">
								<i class="bi bi-arrow-right" style="color: #545454; font-size: 20px"></i>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
					<div class="col-md-7">
						<img src="<?= IMAGE_FRONTEND ?>/cosmetology.png" width="100%" height="80%" class="img-fluid rounded" alt="Service Image 1" />
					</div>


				</div>
			</div>

			<div class="carousel-item">
				<div class="row ">
					<div class="col-md-5 mb-4 mb-md-0 p-5 mt-4 position-relative">
						<h6 class="mb-2 text-regular ">MENGAPA VZUU CLINIC</h6>
						<h4 class="pink text-demibold">Mesin-Mesin <br> Kecantikan Lanjutan</h4>
						<p class="fs-6 text-regular">
							Dengan menggunakan mesin-mesin standar <br>
							Eropa dan Amerika Serikat yang diawasi oleh FDA, <br>
							Kami memastikan bahwa pasien menerima <br>
							perawatan berkualitas terbaik di Klinik Vzuu.
						</p>

						<div class="position-absolute bottom-0 start-0 end-0 d-flex  justify-content-end p-3">
							<button class="bg-transparent border-0" type="button" data-bs-target="#carousel5" data-bs-slide="prev">
								<i class="bi bi-arrow-left" style="color: #545454; font-size: 20px"></i>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="bg-transparent border-0" type="button" data-bs-target="#carousel5" data-bs-slide="next">
								<i class="bi bi-arrow-right" style="color: #545454; font-size: 20px"></i>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
					<div class="col-md-7">
						<img src="<?= IMAGE_FRONTEND ?>/cosmetology.png" width="100%" height="80%" class="img-fluid rounded" alt="Service Image 1" />
					</div>


				</div>
			</div>
		</div>



	</div>

</section>

<section class="doctors" style="padding: 5rem 0; width: 100%; margin: 0; background: radial-gradient(circle at bottom right, #f1c3ce 1%,#fcf7f2, transparent 30%);">
	<div class="container animatable fadeInUp">
		<h6 class="text-center mb-2 text-regular">DOKTOR KAMI</h6>
		<h3 class="mb-4 pink text-demibold text-center">Profesional dan Berpengalaman</h3>
		<p class="text-center text-regular">Tim dokter spesialis estetika dan kecantikan kami telah dipilih secara
			profesional, baik dari pengetahuan, dan
			pengalaman mereka, yang terpenting, kami adalah orang-orang yang mencintai apa yang kami lakukan di Klinik Vzuu.
		</p>
	</div>

	<style>
		.doctor:hover {
			transform: scale(1.1);
		}
	</style>
	<div class="row justify-content-center mt-5 gap-4 animatable fadeInUp">
		<div class="col-md-3 col-sm-6 text-center me-4 p-0 shadow-lg doctor" style="background: #7A6D65; border-radius: 5px; cursor: pointer; width: 270px;" onclick="modalDoctor()">
			<div style="background: radial-gradient(circle, #DBB8A1, #EEDBCC); border-radius: 5px 5px 0 0;">
				<img src="<?= IMAGE_FRONTEND ?>/dokter.png" class="img-fluid" alt="Doctor 1" />
			</div>
			<div class="pt-3 text-white lh-1">
				<h5 class="text-demibold text16">dr. Benedicta Michelle</h5>
				<p class="text-regular text16">Aesthetic Physician</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 text-center me-4 p-0 shadow-lg doctor" style="background: #7A6D65; border-radius: 5px; cursor: pointer; width: 270px;" onclick="modalDoctor()">
			<div style="background: radial-gradient(circle, #DBB8A1, #EEDBCC); border-radius: 5px 5px 0 0;">
				<img src="<?= IMAGE_FRONTEND ?>/dokter.png" class="img-fluid" alt="Doctor 1" />
			</div>
			<div class="pt-3 text-white lh-1">
				<h5 class="text-demibold text16">dr. Benedicta Michelle</h5>
				<p class="text-regular text16">Aesthetic Physician</p>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 text-center me-4 p-0 shadow-lg doctor" style="background: #7A6D65; border-radius: 5px; cursor: pointer; width: 270px;" onclick="modalDoctor()">
			<div style="background: radial-gradient(circle, #DBB8A1, #EEDBCC); border-radius: 5px 5px 0 0;">
				<img src="<?= IMAGE_FRONTEND ?>/dokter.png" class="img-fluid" alt="Doctor 1" />
			</div>
			<div class="pt-3 text-white lh-1">
				<h5 class="text-demibold text16">dr. Benedicta Michelle</h5>
				<p class="text-regular text16">Aesthetic Physician</p>
			</div>
		</div>
	</div>

	<div style="margin-top: 10rem;">
		<h6 class="text-center mb-2 text-regular">PENGHARGAAN</h6>
		<h3 class="mb-4 pink text-demibold text-center">Penghargaan Vzuu</h3>
	</div>

	<div id="carousel2" class="carousel slide mt-10 animatable bounceInRight justify-content-center" style="width: 100%;" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<div class="row justify-content-center">
					<div class="col-md-2 mb-4 text-center">
						<img src="<?= IMAGE_FRONTEND ?>/award1.png" class="img-fluid" alt="Award 1" />
					</div>
					<div class="col-md-2 mb-4 text-center">
						<img src="<?= IMAGE_FRONTEND ?>/award1.png" class="img-fluid" alt="Award 2" />
					</div>
					<div class="col-md-2 mb-4 text-center">
						<img src="<?= IMAGE_FRONTEND ?>/award2.png" class="img-fluid" alt="Award 3" />
					</div>
					<div class="col-md-2 mb-4 text-center">
						<img src="<?= IMAGE_FRONTEND ?>/award3.png" class="img-fluid" alt="Award 4" />
					</div>
					<div class="col-md-2 mb-4 text-center">
						<img src="<?= IMAGE_FRONTEND ?>/award3.png" class="img-fluid" alt="Award 4" />
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row justify-content-center">
					<div class="col-md-2 mb-4 text-center">
						<img src="<?= IMAGE_FRONTEND ?>/award1.png" class="img-fluid" alt="Award 1" />
					</div>
					<div class="col-md-2 mb-4 text-center">
						<img src="<?= IMAGE_FRONTEND ?>/award1.png" class="img-fluid" alt="Award 2" />
					</div>
					<div class="col-md-2 mb-4 text-center">
						<img src="<?= IMAGE_FRONTEND ?>/award2.png" class="img-fluid" alt="Award 3" />
					</div>
					<div class="col-md-2 mb-4 text-center">
						<img src="<?= IMAGE_FRONTEND ?>/award3.png" class="img-fluid" alt="Award 4" />
					</div>
					<div class="col-md-2 mb-4 text-center">
						<img src="<?= IMAGE_FRONTEND ?>/award3.png" class="img-fluid" alt="Award 4" />
					</div>
				</div>
			</div>
		</div>
		<div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
				<i class="bi bi-arrow-left" style="color: #545454; font-size: 20px"></i>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
				<i class="bi bi-arrow-right" style="color: #545454; font-size: 20px"></i>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</section>

<section class="card bg-image">
	<div class="card-body" style="padding:5rem">
		<div class="container text-grey">
			<h6 class="text-center mb-2 text-regular">KAMI INGIN MENDENGAR PENDAPAT ANDA</h6>
			<h3 class="mb-5 text-demibold text-center ">Testimoni Mereka</h3>


			<div id="carousel3" class="carousel slide mt-5 animatable bounceInRight " style="width: 100%;" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row justify-content-center ">
							<div class="col-md-6 mb-4">
								<div class="card px-5 py-4" style="height: 100%; border: 2 #fff; background: radial-gradient(circle at top left, #f1c3ce -20%, #fcf7f2, transparent 100%),
              linear-gradient(to top, #F1D0B6 -10%, #fcf7f2);"">
                    <div class=" d-flex align-items-start">
									<img src="<?= IMAGE_FRONTEND ?>/hellen.png" class="img-fluid rounded-circle me-3" alt="Customer 1" width="90">
									<div>
										<h5 class="text-demibold">Hellen</h5>
										<p>⭐⭐⭐⭐⭐</p>
										<p class="text-regular">
											Alat perawatan terbaik! Vzuu klinik memberikan hasil luar biasa.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 mb-4">
							<div class="card px-5 py-4" style="height: 100%; border: 2 #fff; background: radial-gradient(circle at top left, #f1c3ce -20%, #fcf7f2, transparent 100%),
            linear-gradient(to top, #F1D0B6 -10%, #fcf7f2);"">
                  <div class=" d-flex align-items-start">
								<img src="<?= IMAGE_FRONTEND ?>/hellen.png" class="img-fluid rounded-circle me-3" alt="Customer 1" width="90">
								<div>
									<h5 class="text-demibold">Jasmine</h5>
									<p>⭐⭐⭐⭐⭐</p>
									<p class="text-regular">
										Saya sangat menyukai atmosfer klinik ini. Kualitas pelayanan sangat baik.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item ">
				<div class="row justify-content-center ">
					<div class="col-md-6 mb-4">
						<div class="card px-5 py-4" style="height: 100%; border: 2 #fff; background: radial-gradient(circle at top left, #f1c3ce -20%, #fcf7f2, transparent 100%),
          linear-gradient(to top, #F1D0B6 -10%, #fcf7f2);"">
                <div class=" d-flex align-items-start">
							<img src="<?= IMAGE_FRONTEND ?>/hellen.png" class="img-fluid rounded-circle me-3" alt="Customer 1" width="90">
							<div>
								<h5 class="text-demibold">Hellen</h5>
								<p>⭐⭐⭐⭐⭐</p>
								<p class="text-regular">
									Alat perawatan terbaik! Vzuu klinik memberikan hasil luar biasa.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 mb-4">
					<div class="card px-5 py-4" style="height: 100%; border: 2 #fff; background: radial-gradient(circle at top left, #f1c3ce -20%, #fcf7f2, transparent 100%),
        linear-gradient(to top, #F1D0B6 -10%, #fcf7f2);"">
              <div class=" d-flex align-items-start">
						<img src="<?= IMAGE_FRONTEND ?>/hellen.png" class="img-fluid rounded-circle me-3" alt="Customer 1" width="90">
						<div>
							<h5 class="text-demibold">Jasmine</h5>
							<p>⭐⭐⭐⭐⭐</p>
							<p class="text-regular">
								Saya sangat menyukai atmosfer klinik ini. Kualitas pelayanan sangat baik.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<div class="d-flex float-end " style="margin-right: 30px; margin-top: 10px;">
		<button class="bg-transparent border-0" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
			<i class="bi bi-arrow-left" style="color: #fff; font-size: 20px"></i>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="bg-transparent border-0" type="button" data-bs-target="#carousel3" data-bs-slide="next">
			<i class="bi bi-arrow-right" style="color: #fff; font-size: 20px"></i>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	</div>
	</div>
	</div>

</section>

<!-- Instagram Section -->
<section class="instagram py-5 ">
	<div class=" text-center w-100" style="margin-top: 5rem;">
		<h6 class="text-regular ">IKUTI KAMI DI INSTAGRAM</h6>
		<a href="https://www.instagram.com/vzuuclinic" target="_blank" style="text-decoration: none;">
			<h3 class="mb-4 text-demibold pink">@vzuuclinic</h3>
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

<div class="position-relative" style="z-index: -1; bottom: -35rem;">
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class="img-fluid background-img position-absolute bottom-0 end-0" />
</div>

<div class="modal fade" id="modalDoctor" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog" style=" max-width: 400px; ">
		<div class="modal-content" style="background-color: #FCF7F2;">
			<div class="modal-body">
				<button type="button" class="btn-close" style=" position: absolute;
              top: 15px; /* Adjust top positioning */
              right: 15px; " data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="row px-5 mt-4">
					<div class="col-md-12 text-center me-4 p-0 shadow-lg " style="background: #7A6D65; border-radius: 5px; ">
						<div style="background: radial-gradient(circle, #DBB8A1, #EEDBCC); border-radius: top 5px;">
							<img src="<?= IMAGE_FRONTEND ?>/dokter.png" class="img-fluid  " alt="Doctor 1" />
						</div>
						<div class="pt-3 text-white lh-1">
							<h5 class="text-demibold text16">dr. Benedicta Michelle</h5>
							<p class="text-regular text16">Aesthetic Physician</p>
						</div>
					</div>


					<div class="col-md-12 text-start mt-4 p-0">
						<p class="text-demibold text16 p-0">PENDIDIKAN</p>
						<ol class="text-regular text16 ">
							<li>Bachelor of Medicine (S.Ked), University of Indonesia, Indonesia.</li>
							<li>Bachelor of Medical Science (BMedSc), Melbourne University, Australia.</li>
						</ol>

						<p class="text-demibold text16">KEAHLIAN</p>
						<ul class="text-regular text16 ">
							<li>Face Sculpting (Facial Fillers & Neuromodulator)</li>
							<li>Dermatologic Lasers and Skin Treatment for Acne, Acne Scars & Pigmentation</li>
							<li>Energy-Based Tightening Device (Ultherapy)</li>
							<li>Eye Booster</li>
						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>

<script>
	function modalDoctor() {
		var modals = new bootstrap.Modal($('#modalDoctor'))
		modals.show();
	}
</script>