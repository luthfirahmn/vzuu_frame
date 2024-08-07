<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	body {
		background: radial-gradient(circle at top left, #f1c3ce -10%, #fcf7f2, transparent 55%);
	}

	.accordion {
		background-color: transparent;
		--bs-accordion-border-color: none;
	}

	.accordion-item {
		background-color: transparent;
		border: none;
	}

	.accordion-body {
		background-color: transparent;
	}

	.accordion-button {
		background-color: transparent;
		border: none;
		box-shadow: none !important;
		font-weight: bold;
		color: grey;
		border-bottom: 0.3px solid grey !important;
	}

	.accordion-button:focus,
	.accordion-button:not(.collapsed) {
		background-color: transparent;
		color: grey;
	}

	.accordion-button:not(.collapsed) {
		border-bottom: none !important;
	}

	.accordion-button::after {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23grey'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
	}

	.accordion-button:not(.collapsed)::after {
		background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23grey'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
		transform: rotate(-180deg);
	}

	/* Override any Bootstrap default styles */
	.accordion-button,
	.accordion-button:hover,
	.accordion-button:focus {
		border-color: grey !important;
	}

	.position-absolute {
		position: absolute;
	}

	.img-fluid {
		width: 100%;
		height: auto;
	}

	.img-blend-light {
		filter: brightness(50%);
	}
</style>

<div class="container my-5">
	<div class="text-center" style="padding-top: 50px;">
		<h6 class="mb-3">TIM KAMI PEDULI DENGAN ANDA</h6>
		<h3 class="mb-4 pink text-demibold">Pertanyaan Yang Sering Diajukan</h3>
	</div>
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey2.png" style="position: absolute; bottom: -170px; right: -120px; width: 35%; object-fit: cover; height: 80%;z-index: -1;">
</div>

<section class="faq-section container py-5">
	<div class="accordion animatable fadeInUp" id="faqAccordion">
		<div class="accordion-item">
			<h2 class="" id="headingOne">
				<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					Apakah konsultasi diperlukan sebelum menjalani prosedur di klinik kecantikan?
				</button>
			</h2>
			<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion" style="margin-top: -20px;">
				<div class="accordion-body">
					Ya, konsultasi dengan dokter atau profesional medis klinik kecantikan sangat penting untuk
					menentukan pilihan terbaik sesuai kebutuhan dan kondisi kulit atau tubuh Anda.
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingTwo">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					Apakah konsultasi diperlukan sebelum menjalani prosedur di klinik kecantikan?
				</button>
			</h2>
			<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion" style="margin-top: -20px;">
				<div class="accordion-body">
					Ya, konsultasi dengan dokter atau profesional medis klinik kecantikan sangat penting untuk
					menentukan pilihan terbaik sesuai kebutuhan dan kondisi kulit atau tubuh Anda.
				</div>
			</div>
		</div>
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingThree">
				<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					Apakah konsultasi diperlukan sebelum menjalani prosedur di klinik kecantikan?
				</button>
			</h2>
			<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion" style="margin-top: -20px;">
				<div class="accordion-body">
					Ya, konsultasi dengan dokter atau profesional medis klinik kecantikan sangat penting untuk
					menentukan pilihan terbaik sesuai kebutuhan dan kondisi kulit atau tubuh Anda.
				</div>
			</div>
		</div>
	</div>
</section>