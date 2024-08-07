<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	body {
		background: radial-gradient(circle at top left, #f1c3ce -10%, #fcf7f2, transparent 55%);
	}

	.contact-us {
		max-width: 800px;
		margin: 0 auto;
		padding: 2rem;
		border-radius: 10px;
	}

	.contact-us h2 {
		text-align: center;
		margin-bottom: 2rem;
		color: #f48fb1;
	}

	.custom-input {
		border-radius: 30px;
		padding: 1rem;
		background: #FCF7F2
	}
</style>

<div class="container animatable fadeInUp" style="margin-top: 100px;">
	<div class="text-center" style="padding-top: 50px;">
		<h6 class="mb-3 text-regular">HUBUNGI KAMI</h6>
		<h3 class="mb-4 pink text-demibold">Kami Senang Menerima Pesanan Anda</h3>
	</div>
</div>

<div class="contact-us mt-2 animatable fadeInUp">
	<form>
		<div class="mb-3">
			<input type="text" id="nama" name="nama" class="form-control custom-input" placeholder="Nama">
		</div>
		<div class="mb-3">
			<input type="email" id="email" name="email" class="form-control custom-input" placeholder="Email">
		</div>
		<div class="mb-3">
			<textarea id="pesan" name="pesan" class="form-control custom-input" rows="5" placeholder="Pesan"></textarea>
		</div>
		<div class="text-center">
			<button type="submit" id="btnSubmit" class=" btn btn-brown rounded-5 mt-2 px-5 justify-content-center" href="#">Kirim</button>
		</div>
	</form>
</div>


<div class="position-relative" style="z-index: -1; bottom: -35rem;">
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class="img-fluid background-img position-absolute bottom-0 end-0" />
</div>